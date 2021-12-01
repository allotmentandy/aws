# LAMP Stack deployment using ansible playbook

Ansible playbook to deploy LAMP Stack(Linux, Apache2, MySql, PHP) on a Debian based systems

## Getting Started

### Inventory

* Copy sample invetory file `inventory.ini.j2` to `inventory.ini` using `cp inventory.ini.j2 inventory.ini`
* Change `ansible_host` value with host IP
* Add ssh username to `ansible_user`

### Variables

* Copy sample variable file located in vars directory `defaults.yml.j2` to `defaults.yml` using `cp ./vars/defaults.yml.j2 ./vars/defaults.yml`
* set values based on your requirements

### Connection Test

Check the connection with host by running

```bash
ansible all -m ping
```

## Deployment

To deploy LAMP stack on debian system run

append `-K` if ansible users needs sudo password to elevate sudo privileges

### Test

To check apache installation visit host `[ip]` and to check php visit `[ip]/info.php` . To check mysql installation, ssh into your host with `ssh user@ip` . login to mysql shell with `sudo mysql -u root -p` and enter {{ mysql_root_password }}

  
