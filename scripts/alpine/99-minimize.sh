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