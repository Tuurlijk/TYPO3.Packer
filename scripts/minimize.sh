#!/bin/bash -eux

echo "==> Disk usage before minimization"
df -h

echo "==> Installed packages before cleanup"
dpkg --get-selections | grep -v deinstall

# Remove some packages to get a minimal install
echo "==> Removing all linux kernels except the currrent one"
dpkg --list | awk '{ print $2 }' | grep 'linux-image-3.*-generic' | grep -v $(uname -r) | xargs apt-get -y purge
echo "==> Removing linux source"
dpkg --list | awk '{ print $2 }' | grep linux-source | xargs apt-get -y purge
if [ "$BOX_TYPE" = "Try" ]; then
	echo "==> Removing development packages"
	dpkg --list | awk '{ print $2 }' | grep -- '-dev$' | xargs apt-get -y purge
	echo "==> Removing documentation"
	dpkg --list | awk '{ print $2 }' | grep -- '-doc$' | xargs apt-get -y purge
#echo "==> Removing development tools"
#dpkg --list | grep -i compiler | awk '{ print $2 }' | xargs apt-get -y purge
#apt-get -y purge cpp gcc g++
#apt-get -y purge build-essential git
	echo "==> Removing default system Ruby"
	apt-get -y purge ruby ri doc
	echo "==> Removing default system Python"
	apt-get -y purge build-essential python-dbus libnl1 python-smartpm python-twisted-core libiw30 python-twisted-bin libdbus-glib-1-2 python-pexpect python-pycurl python-serial python-gobject python-pam python-openssl libffi5
	echo "==> Removing fluff"
	apt-get -y purge byobu git git-man htop multitail php5-xdebug php5-xhprof postfix subversion tmux vim-common

	echo "==> Removing git source from /var/www"
	cd /var/www && for gitSource in `find ./ -name .git`; do rm -rf $gitSource; done
fi
echo "==> Removing more fluff"
apt-get -y purge sound-theme-freedesktop subversion language-pack-gnome-en language-pack-gnome-en-base policykit-1-gnome gconf-service gconf2-common laptop-detect autoconf automake cpp eject autoconf automake cpp build-essential dbus-x11 hicolor-icon-theme gcc-4.8 ccache m4 make cpp-4.8 parted geoip-database

#echo "==> Removing X11 libraries"
#apt-get -y purge libx11-data xauth libxmuu1 libxcb1 libx11-6 libxext6
echo "==> Removing obsolete networking components"
apt-get -y purge ppp pppconfig pppoeconf
echo "==> Removing other oddities"
apt-get -y purge popularity-contest installation-report landscape-common wireless-tools wpasupplicant ubuntu-serverguide ansible

# Clean up the apt cache
apt-get -y autoremove --purge
apt-get -y autoclean
apt-get -y clean

# Clean up orphaned packages with deborphan
apt-get -y install deborphan
while [ -n "$(deborphan --guess-all --libdevel)" ]; do
	deborphan --guess-all --libdevel | xargs apt-get -y purge
done
apt-get -y purge deborphan dialog

if [ "$BOX_TYPE" = "Try" ]; then
	echo "==> Removing man pages"
	rm -rf /usr/share/man/*
fi
echo "==> Removing APT files"
find /var/lib/apt -type f | xargs rm -f
echo "==> Removing any docs"
rm -rf /usr/share/doc/*
echo "==> Removing caches"
find /var/cache -type f -exec rm -rf {} \;

echo "==> Disk usage after cleanup"
df -h