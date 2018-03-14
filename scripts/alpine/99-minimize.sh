#!/bin/ash -eux

echo "==> Disk usage before minimization"
df -h

echo "==> Installed packages before cleanup"
apk info

echo "==> Removing APK files"
find /var/lib/apk -type f | xargs rm -f

echo "==> Removing any docs"
rm -rf /usr/share/doc/*

echo "==> Removing caches"
find /var/cache -type f -exec rm -rf {} \;

echo "==> Disk usage after cleanup"
df -h

echo "==> Whiteout root"
count=$(sync && df -kP / | tail -n1  | awk -F ' ' '{print $4}')
let count--
dd if=/dev/zero of=/tmp/whitespace bs=1024 count=$count
rm /tmp/whitespace

echo "==> Whiteout /boot"
count=$(sync && df -kP /boot | tail -n1 | awk -F ' ' '{print $4}')
let count--
dd if=/dev/zero of=/boot/whitespace bs=1024 count=$count
rm /boot/whitespace

echo "==> Zero out the free space to save space in the final image"
dd if=/dev/zero of=/EMPTY bs=1M
rm -f /EMPTY

# Make sure we wait until all the data is written to disk, otherwise
# Packer might quite too early before the large files are deleted
sync
