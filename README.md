# TYPO3.Packer
[Packer](https://www.packer.io/) code to create an ubuntu based Neos and TYPO3 base box.

[![Flattr this git repo](http://api.flattr.com/button/flattr-badge-large.png)](https://flattr.com/submit/auto?user_id=Tuurlijk&url=https://github.com/Tuurlijk/TYPO3.Packer&title=TYPO3.Packer&language=Ansible&tags=github&category=software)

# What is this?
This is a box builder for the following projects:
* https://github.com/Tuurlijk/TYPOTry
* https://github.com/Tuurlijk/TYPO3.Homestead
* https://github.com/Tuurlijk/TryNeos

There are Two Packer configuration files:
* [Try.json for the TYPOTry and TryNeos boxen](Try.json) - This is a minimal configuration
* [Development.json for the Homestead box](Development.json)

Each packer configuration file points to its own ansible configuration file:
* [ansible/Try.yml for the TYPOTry and TryNeos boxen](ansible/Try.yml)
* [ansible/Development.yml for the Homestead box](ansible/Development.yml)

And those files point to their own ansible configuration directories:
* [ansible/configuration/Try/ for the TYPOTry and TryNeos boxen](ansible/configuration/Try/)
* [ansible/configuration/Development/ for the Homestead box](ansible/configuration/Development/)

# Trying out your new configuration
You can try out the changes to your configuration by running ansible on a local box. You will find a [Vagrantfile](Vagrantfile) in the project which will pull in a Development box. This is the most elaborate box (software-wise). Change the ansible playbook to the one you wish to test (around line 151 in the Vagrantfile). And then just do:

```vagrant provision```

Rinse, repeat. When satisfied with the provisioning, you can pack a new box.

# Building a box
You can build a box by executing a `packer build` command and specifying the packer confiugration file of your choice:

```packer build Development.json```

If you have an [atlas account](https://atlas.hashicorp.com/) you can push a new version to there by doing:

```packer push Development.json```

Before pushing a new build to atlas, take care to update the build version number in the respective packer json file.

