#!/bin/ash -eux

set -exu

cat > /etc/apk/repositories <<- EOR
http://alpine.mirror.wearetriple.com/v3.7/main
http://alpine.mirror.wearetriple.com/v3.7/community
http://alpine.mirror.wearetriple.com/edge/main
http://alpine.mirror.wearetriple.com/edge/community
http://alpine.mirror.wearetriple.com/edge/testing
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