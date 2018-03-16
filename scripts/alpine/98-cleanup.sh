#!/bin/ash -eux

SSH_USER=${SSH_USERNAME:-vagrant}

echo "==> Removing unneeded packages"
apk del --purge \
    ansible \
    git \
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
    tar \
    wget

echo "===> Fixing permissions on /var/www"
chown -R nginx:nginx /var/www

echo "==> Cleaning root home dir"
rm -rf /root/*.iso
rm -rf /root/.composer

echo "==> Remove unused kernel modules"
rm -rf /lib/modules/4.9.73-0-hardened

echo "==> Remove mysql bin logs"
rm -rf /var/lib/mysql/mysql-bin.*

echo "==> Remove localhost site"
rm -rf /var/www/localhost

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
