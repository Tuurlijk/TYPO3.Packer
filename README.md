# TYPO3.Packer
https://www.packer.io/ code to create an ubuntu based Neos and TYPO3 base box.

[![Flattr this git repo](http://api.flattr.com/button/flattr-badge-large.png)](https://flattr.com/submit/auto?user_id=Tuurlijk&url=https://github.com/Tuurlijk/TYPO3.Packer&title=TYPO3.Packer&language=Ansible&tags=github&category=software)

# Wazzaaaap?
This is a box builder for the following projects:
* https://github.com/Tuurlijk/TYPOTry
* https://github.com/Tuurlijk/TYPO3.Homestead
* https://github.com/Tuurlijk/TryNeos
* https://github.com/Tuurlijk/TYPO3.Review

There are Three Packer configuration files:
* [Review.json for the review box](Review.json)
* [Try.json for the TYPOTry and TryNeos boxen](Try.json)
* [Development.json for the Homestead box](Development.json)

Each packer configuration file points to its own ansible configuration file:
* [ansible/Review.yml for the review box](ansible/Review.yml)
* [ansible/Try.yml for the TYPOTry and TryNeos boxen](ansible/Try.yml)
* [ansible/Development.yml for the Homestead box](ansible/Development.yml)

And those files point to their own ansible configuration directories:
* [ansible/configuration/Review/ for the review box](ansible/configuration/Review/)
* [ansible/configuration/Try/ for the TYPOTry and TryNeos boxen](ansible/configuration/Try/)
* [ansible/configuration/Development/ for the Homestead box](ansible/configuration/Development/)

# TODO
* Make pretty /etc/issue
* Setup mailcatcher for Neos
