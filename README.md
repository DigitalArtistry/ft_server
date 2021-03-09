# ft_server
Ecole 42: ft_server is the first systems admin project.

The obejective is to create a Dockerfile that will build an Nginx web server in a single Docker container. The container should be running on Debian Buster. 

Services required: Wordpress, Phpmyadmin and MySQL.
The server should use SSL protocole when possible.
We should also be redirected to the correct website according to its URL.
The server should run with an automated index by default with an option to deactivate it.

/*
Autoindex on/off 
./default
...
location / 
    autoindex on
...
*/


# resources

[How To Install Linux, Nginx, MySQL, PHP (LEMP stack) on Ubuntu 18.04 | DigitalOcean](https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-ubuntu-18-04)

[Learn Docker & Containers using Interactive Browser-Based Labs | Katacoda](https://www.katacoda.com/courses/docker/)

https://manpages.debian.org/buster/docker.io/Dockerfile.5.en.html

# build
docker build -t ft_server .
# run 
docker run -p 80:80 -p 443:433 ft_server
# detached
docker run -d -p 80:80 -p 443:433 --name ft_server_container ft_server
