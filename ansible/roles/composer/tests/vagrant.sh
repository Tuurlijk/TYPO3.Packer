#!/usr/bin/env bash
#
# set -x;
set -e;
set -o pipefail;
#
thisFile="$(readlink -f ${0})";
thisFilePath="$(dirname ${thisFile})";

# Only provision once
if [ -f /provisioned ]; then
  exit 0;
fi

export DEBIAN_FRONTEND=noninteractive;

shopt -s expand_aliases;
alias apt-update='apt-get update -qq';
alias apt-install='apt-get install -q -y -o Dpkg::Options::="--force-confdef" -o Dpkg::Options::="--force-confold"';

# No PHP 5 support in 16.04
if $(lsb_release -r | grep -q '16.04'); then
  PHP_VERSION='7.0';
else
  PHP_VERSION='5';
fi
apt-update && apt-install "php${PHP_VERSION}-cli" curl;

touch /provisioned;
