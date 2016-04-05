#!/bin/sh -u

echo "==> Setup NTP";
# Set the time correctly
ntpdate -v -b in.pool.ntp.org;

echo "==> Install bash, curl, ca_root_nss and sudo";
# Install sudo, bash, curl and ca_root_nss
pkg install -y bash;
pkg install -y curl;
#pkg install -y -q ca_root_nss;
pkg install -y sudo;

# Emulate the ETCSYMLINK behavior of ca_root_nss; this is for FreeBSD 10,
# where fetch(1) was massively refactored and doesn't come with
# SSL CAcerts anymore
ln -sf /usr/local/share/certs/ca-root-nss.crt /etc/ssl/cert.pem;

echo "==> Install Ansible";
pkg install -y lang/python
pkg install -y ansible

echo "==> Enable NFS";
# As sharedfolders are not in defaults ports tree, we will use NFS sharing
cat >>/etc/rc.conf << RC_CONF
rpcbind_enable="YES"
nfs_server_enable="YES"
mountd_flags="-r"
RC_CONF

echo "==> Don't build for X11";
# Disable X11 because Vagrants VMs are (usually) headless
cat >>/etc/make.conf << MAKE_CONF
WITHOUT_X11="YES"
MAKE_CONF
