# openvpn-web-manager
PHP script that allows you to add and download client certificates in OpenVPN.
## Requirements
- Linux-based server
- Installed and configured OpenVPN server. If you don't have it, you can follow [this](https://www.cyberciti.biz/faq/howto-setup-openvpn-server-on-ubuntu-linux-14-04-or-16-04-lts/) tutorial
- [Apache web server](https://httpd.apache.org) or other. The reason why I advice you to use this is that authorisation in this project works only with Apache web server. If you use another web server, you should implement your own version of authorisation. Why, it is described below
## Install
Instalation of this script is simple. You just unzip [this](https://github.com/lsvoboda4/openvpn-web-manager/archive/master.zip) zip file to your web server directory. I advice you to look at files starting with ht-. Why, that is described below:
## .htaccess and .htpasswd files
In this script, these files are used for authentication. To use them, remove "-example" from filename and add dot before them. In .htaccess, there are settings for web server. In .htpasswd file, username and passwords are stored. You should take a look on these files because they authenticate users. This script executes commands in console and I advice you to implement to this script some kind of authorisation. Otherwise, some evil or angry person can slow down or completly stop your server. You shouldn't allow people to execute commands on your server, so please, pay attention to this.
