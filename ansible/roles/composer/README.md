## composer

[![Build Status](https://travis-ci.org/Oefenweb/ansible-composer.svg?branch=master)](https://travis-ci.org/Oefenweb/ansible-composer) [![Ansible Galaxy](http://img.shields.io/badge/ansible--galaxy-composer-blue.svg)](https://galaxy.ansible.com/tersmitten/composer)

Set up composer.

#### Requirements

* `curl`
* `php` (5.3.2+)

#### Variables

* `composer_install_dir`: [default: `/usr/local/bin`]: Install directory
* `composer_self_update`: [default: `false`]: Whether or not to execute `self-update` on every run
* `composer_composer_json_map`: [default: `[]`]: A list of `composer.json` files to copy, install and or update
* `composer_composer_json_map.{n}.src`: [required]: The local path of the file to copy, can be absolute or relative (e.g. `../../../files/composer/.composer/composer.json`)
* `composer_composer_json_map.{n}.dest`: [required]: The remote path of the file to copy (e.g. `/etc/mysql/ca-cert.pem`)
* `composer_composer_json_map.{n}.owner`: [default: `root`]: The name of the user that should own the file (**optional**)
* `composer_composer_json_map.{n}.github_oauth`: A GitHub OAuth access token, to prevent hitting GitHub's rate limits on their API (**optional**)
* `composer_composer_json_map.{n}.options`: [default: `--prefer-dist`]: Additional composer options (**optional**)
* `composer_composer_json_map.{n}.run_update`: [default: `false`]: Whether or not to run `update` on every run (**optional**)

## Dependencies

None

#### Example(s)

##### Simple configuration (with `self-update` on)

```yaml
---
- hosts: all
  roles:
  - composer
  vars:
    composer_self_update: true
```

##### Advance configuration (with `composer.json` files to copy)

```yaml
---
- hosts: all
  roles:
  - composer
  vars:
    composer_composer_json_map:
      - src: ../../../files/composer/.composer/composer.json
        dest: "{{ ansible_env.HOME }}/.composer/composer.json"
        github_oauth: 34eabe8ef6ef88999c1e7ed6692b4e7f36119bf9
        options: '--prefer-source -vvv'
        update: true
```

#### License

MIT

#### Author Information

Mischa ter Smitten (based on work of Vinelab)

#### Feedback, bug-reports, requests, ...

Are [welcome](https://github.com/Oefenweb/ansible-composer/issues)!
