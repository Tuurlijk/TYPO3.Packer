#!/bin/bash

# Setup mirrors
#sed -i -e '1i deb mirror://mirrors.ubuntu.com/mirrors.txt trusty-security main restricted universe multiverse' /etc/apt/sources.list
#sed -i -e '1i deb mirror://mirrors.ubuntu.com/mirrors.txt trusty-backports main restricted universe multiverse' /etc/apt/sources.list
#sed -i -e '1i deb mirror://mirrors.ubuntu.com/mirrors.txt trusty-updated main restricted universe multiverse' /etc/apt/sources.list
#sed -i -e '1i deb mirror://mirrors.ubuntu.com/mirrors.txt trusty main restricted universe multiverse' /etc/apt/sources.list

# Update the box
export DEBIAN_FRONTEND=noninteractive
export PATH=$PATH:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin
apt-get -y update >/dev/null
apt-get -y install facter linux-headers-$(uname -r) build-essential software-properties-common zlib1g-dev libssl-dev libreadline-gplv2-dev curl unzip
apt-add-repository ppa:ansible/ansible >/dev/null
apt-get -y update >/dev/null
apt-get -y install ansible >/dev/null

# Tweak sshd to prevent DNS resolution (speed up logins)
echo 'UseDNS no' >> /etc/ssh/sshd_config

# Remove 5s grub timeout to speed up booting
cat <<EOF > /etc/default/grub
# If you change this file, run 'update-grub' afterwards to update
# /boot/grub/grub.cfg.

GRUB_DEFAULT=0
GRUB_TIMEOUT=0
GRUB_DISTRIBUTOR=`lsb_release -i -s 2> /dev/null || echo Debian`
GRUB_CMDLINE_LINUX_DEFAULT="quiet"
GRUB_CMDLINE_LINUX="debian-installer=en_US"
EOF

update-grub
