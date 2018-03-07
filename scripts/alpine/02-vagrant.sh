set -exu

date > /etc/vagrant_box_build_time

#
# bash for vagrant (default shell is bash)
#   doesn't look like there is an easy way for vagrant guest
#   plugin to register a default shell. easier than always
#   having to *remember* to configure `ssh.shell` for
#   alpine boxes.
#
# cURL for initial vagrant key install from vagrant github repo.
#   on first 'vagrant up', overwritten with a local, secure key.
#

SSH_USER=${SSH_USERNAME:-vagrant}
SSH_USER_HOME=${SSH_USER_HOME:-/home/${SSH_USER}}

# Create Vagrant user (if not already present)
if ! id -u $SSH_USER >/dev/null 2>&1; then
    echo "==> Creating $SSH_USER user"
    addgroup $SSH_USER
    adduser -D -G wheel $SSH_USER -h $SSH_USER_HOME
    echo "${SSH_USER}:${SSH_USER}" | chpasswd
fi

echo "==> Installing vagrant key"
mkdir -p $SSH_USER_HOME/.ssh
chmod -R go-rwsx $SSH_USER_HOME/.ssh
cd $SSH_USER_HOME/.ssh

curl -sSo $SSH_USER_HOME/.ssh/authorized_keys 'https://raw.githubusercontent.com/mitchellh/vagrant/master/keys/vagrant.pub'
chmod 600 $SSH_USER_HOME/.ssh/authorized_keys
chown -R $SSH_USER:$SSH_USER $SSH_USER_HOME/.ssh

#set -xu
#
#echo "==> Installing dotfiles"
#apk add zsh zsh-vcs shadow
#git clone https://github.com/tuurlijk/dotfiles "$SSH_USER_HOME/dotfiles"
#cd "$SSH_USER_HOME/dotfiles"
#./setup.sh
#echo ${SSH_PASSWORD} | chsh -s /bin/zsh ${SSH_USER}
#
#apk del shadow
