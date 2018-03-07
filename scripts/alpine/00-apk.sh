set -exu

cat >> /etc/apk/repositories <<- EOR
http://dl-cdn.alpinelinux.org/alpine/edge/community
EOR

# Upgrade all packages
apk upgrade -U --available

source /etc/os-release

# Wget and python are needed for ansible
apk add \
    ansible \
    ca-certificates \
    curl \
    nfs-utils \
    virtualbox-guest-additions \
    virtualbox-guest-modules-hardened

rc-update add virtualbox-guest-additions
echo vboxsf >>/etc/modules