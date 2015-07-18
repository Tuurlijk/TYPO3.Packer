Memcached
========

Install and start memcached

Requirements
------------

Debian Wheezy with the package python-pycurl and python-software-properties installed.

Role Variables
--------------

    memcached_listen: ""
    memcached_maxconn: 1024
    memcached_memusage: 128
    memcached_permissions: "0666"
    memcached_port: 11211
    memcached_socket: "/var/run/memcached/memcached.sock"

Example Playbook
-------------------------

    - hosts: servers
      roles:
         - { role: f500.memcached }

License
-------

LGPL

Author Information
------------------

Jasper N. Brouwer, jasper@nerdsweide.nl

Ramon de la Fuente, ramon@delafuente.nl
