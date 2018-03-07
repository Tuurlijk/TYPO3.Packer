set -eux

SSH_USER=${SSH_USERNAME:-vagrant}

apk add sudo
adduser vagrant wheel

echo "==> Giving ${SSH_USER} sudo powers"
echo "Defaults exempt_group=wheel" > /etc/sudoers
echo "%wheel ALL=NOPASSWD:ALL" >> /etc/sudoers
