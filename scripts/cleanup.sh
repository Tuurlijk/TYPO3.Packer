#!/bin/bash -eux

SSH_USER=${SSH_USERNAME:-vagrant}

CLEANUP_PAUSE=${CLEANUP_PAUSE:-0}
echo "==> Pausing for ${CLEANUP_PAUSE} seconds..."
sleep ${CLEANUP_PAUSE}

# Make sure udev does not block our network - http://6.ptmc.org/?p=164
echo "==> Cleaning up udev rules"
rm -rf /dev/.udev/
rm /lib/udev/rules.d/75-persistent-net-generator.rules

echo "==> Cleaning up leftover dhcp leases"
# Ubuntu 10.04
if [ -d "/var/lib/dhcp3" ]; then
    rm /var/lib/dhcp3/*
fi
# Ubuntu 12.04 & 14.04
if [ -d "/var/lib/dhcp" ]; then
    rm /var/lib/dhcp/*
fi 

# Add delay to prevent "vagrant reload" from failing
echo "pre-up sleep 2" >> /etc/network/interfaces

echo "==> Cleaning up tmp"
rm -rf /tmp/*

# Cleanup apt cache
apt-get -y autoremove --purge
apt-get -y clean
apt-get -y autoclean
find /var/cache/apt/ -type f -exec rm -v {} \;

echo "==> Installed packages"
dpkg --get-selections | grep -v deinstall

# Remove Bash history
unset HISTFILE
rm -f /root/.bash_history
rm -f /home/${SSH_USER}/.bash_history

# Cleanup ccache, composer, phpbrew and ruby caches
rm -rf /root/.ccache
rm -rf /home/${SSH_USER}/.ccache
rm -rf /root/.composer
rm -rf /home/${SSH_USER}/.composer
rm -rf /root/.gem
rm -rf /home/${SSH_USER}/.gem
rm -rf /root/.phpbrew/build
rm -rf /home/${SSH_USER}/.phpbrew/build
rm -rf /root/.phpbrew/distfiles
rm -rf /home/${SSH_USER}/.phpbrew/distfiles
rm -rf /root/.phpbrew/tmp
rm -rf /home/${SSH_USER}/.phpbrew/tmp
rm -rf /usr/local/phpbrew/build/*
rm -rf /usr/local/phpbrew/distfiles/*
rm -rf /usr/local/phpbrew/tmp/*

# Clean up log files
find /var/log -type f | while read f; do echo -ne '' > $f; done;

echo "==> Clearing last login information"
>/var/log/lastlog
>/var/log/wtmp
>/var/log/btmp

echo "==> Whiteout root"
count=$(df --sync -kP / | tail -n1  | awk -F ' ' '{print $4}')
let count--
dd if=/dev/zero of=/tmp/whitespace bs=1024 count=$count
rm /tmp/whitespace

echo "==> Whiteout /boot"
count=$(df --sync -kP /boot | tail -n1 | awk -F ' ' '{print $4}')
let count--
dd if=/dev/zero of=/boot/whitespace bs=1024 count=$count
rm /boot/whitespace

echo "==> Zero out the free space to save space in the final image"
dd if=/dev/zero of=/EMPTY bs=1M
rm -f /EMPTY

# Make sure we wait until all the data is written to disk, otherwise
# Packer might quite too early before the large files are deleted
sync
