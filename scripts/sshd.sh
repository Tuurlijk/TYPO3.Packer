#!/bin/bash -eux

echo "UseDNS no" >> /etc/ssh/sshd_config
echo "KexAlgorithms=diffie-hellman-group1-sha1" >> /etc/ssh/sshd_config