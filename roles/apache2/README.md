# Ansible Apache2 Role

[![Build Status](https://travis-ci.org/weareinteractive/ansible-apache2.png?branch=master)](https://travis-ci.org/weareinteractive/ansible-apache2)
[![Stories in Ready](https://badge.waffle.io/weareinteractive/ansible-apache2.svg?label=ready&title=Ready)](http://waffle.io/weareinteractive/ansible-apache2)

> `apache2` is an [ansible](http://www.ansible.com) role which: 
> 
> * installs apache2
> * configures apache2
> * enables/disables confs
> * creates sites
> * enables/disables sites
> * enables/disables modules
> * optionally removes default host
> * adds rules
> * configures service

## Installation

Using `ansible-galaxy`:

```
$ ansible-galaxy install franklinkim.apache2
```

Using `arm` ([Ansible Role Manager](https://github.com/mirskytech/ansible-role-manager/)):

```
$ arm install franklinkim.apache2
```

Using `git`:

```
$ git clone https://github.com/weareinteractive/ansible-apache2.git
```

## Dependencies

* Tested with Apache 2.2 | 2.4
* [franklinkim.openssl](https://github.com/weareinteractive/ansible-openssl)
* [franklinkim.htpasswd](https://github.com/weareinteractive/ansible-htpasswd)

## Variables

Here is a list of all the default variables for this role, which are also available in `defaults/main.yml`.

```
# ports to listen to
apache2_ports: [80]
# ssl ports to listen to
apache2_ssl_ports: [443]
# addresses to listen to (2.2  only)
apache2_listen_addresses: ['*']
# enabled/disabled modules
apache2_modules: []
# enabled/disabled confs
apache2_confs: []
# enabled/disabled sites
apache2_sites: []
# remove the default host
apache2_remove_default: no
# start on boot
apache2_service_enabled: yes
# current state: started, stopped
apache2_service_state: started
# set to one of:  Full | OS | Minimal | Minor | Major | Prod
apache2_server_tokens: Prod
# set to one of:  On | Off | EMail
apache2_server_signiture: 'Off'
# set to one of:  On | Off | extended
apache2_trace_enable: 'Off'
```

Module and confs might be defined through:

```
# id of the conf or module
id: auth
# state: absent | present
state: absent
```

A site might be defined through:

```
# site id (required)
id: foo
# server name (required)
name: foo.com
# ip to listen to
ip: '*'
# port to listen to
port: 80
# state: present | absent
state: present
# create the /var/www/[id]/htdocs folder
add_webroot: no
# path to your own site template
template: path/to/template.j2
# /etc/apache2/rules/[rule].conf to include
rules: []
# list of server aliases
aliases: []
# list of server redirects
redirects: []
# enable ssl
ssl:
  # port to listen to
  port: 443
  # @see franklinkim.openssl
  key_name: mykey
  cert_name: mycert
# enable auth
auth:
  # @see franklinkim.htpasswd
  name: foo
  file: foo
# custom string to append to the site
append: false
```

## Handlers

These are the handlers that are defined in `handlers/main.yml`.

* `reload apache2` 
* `restart apache2` 

## Rules

Some configuration fragments will be copied unconditionally to `/etc/apache2/rules`:

* compression.conf
* cors_ajax.conf
* cors_images.conf
* cors_web_fonts.conf
* expires.conf
* filename_based_cache_busting.conf
* ie_cookies.conf
* ie_edge.conf
* mimes.conf
* security.conf
* ssl.conf
* utf8.conf

These can be included into your site definitions (See Example playbook below).

## Example playbook

```
- host: all
  roles: 
    - franklinkim.apache2
  vars:
    apache2_modules:
      - { id: mime, state: present }
      - { id: headers, state: present }
      - { id: rewrite, state: present }
    apache2_remove_default: yes
    htpasswd:
      - name: foobar
        users:
          - { name: foobar, password: foobar }
    openssl_self_signed:
      - { name: 'foobar.local', country: 'DE', state: 'Bavaria', city: 'Munich', organization: 'Foo Bar', email: 'foo@bar.com' }
    apache2_sites:
      - id: foobar
        state: present
        name: foobar.local
        rules: ['mimes', 'expires', 'security', 'compression']
        add_webroot: yes
        auth:
          name: Foo Bar
          file: foobar
        ssl:
          key_name: foobar.local
          cert_name: foobar.local
```

## Testing

```
$ git clone https://github.com/weareinteractive/ansible-apache2.git
$ cd ansible-apache2
$ vagrant up
```

## Contributing
In lieu of a formal styleguide, take care to maintain the existing coding style. Add unit tests and examples for any new or changed functionality.

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request

## License
Copyright (c) We Are Interactive under the MIT license.
