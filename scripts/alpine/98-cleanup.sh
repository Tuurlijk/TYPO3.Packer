#!/bin/ash -eux

SSH_USER=${SSH_USERNAME:-vagrant}

echo "==> Removing unneeded packages"
apk del --purge \
    ansible \
    py2-asn1 \
    py2-asn1crypto \
    py2-bcrypt \
    py2-cffi \
    py2-cparser \
    py2-crypto \
    py2-cryptography \
    py2-idna \
    py2-ipaddress \
    py2-jinja2 \
    py2-markupsafe\
    py2-paramiko \
    py2-pynacl \
    py2-six \
    py2-yaml \
    python2 \
    python \
    wget

echo "===> Fixing persmissions on /var/www"
chown -R ${SSH_USER}:nginx /var/www

echo "==> Cleaning root home dir"
rm -rf /root/*.iso
rm -rf /root/.composer

echo "==> Cleaning up apk"
rm -rf /var/cache/apk/*

echo "==> Cleaning up tmp"
rm -rf /tmp/*

echo "==> Cleaning up ssh host"
rm -rf /etc/ssh/ssh_host_*

# Remove ash history
unset HISTFILE
rm -f /root/.ash_history
rm -f /home/${SSH_USER}/.ash_history

# Clean up log files
find /var/log -type f | while read f; do echo -ne '' > $f; done;

echo "==> Clearing last login information"
>/var/log/lastlog
>/var/log/wtmp
>/var/log/btmp
