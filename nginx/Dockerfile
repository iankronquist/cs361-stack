#
# Nginx Dockerfile
#
# https://github.com/dockerfile/nginx
#

# Pull base image.
FROM ubuntu

# Install Nginx.
RUN \
  apt-get update && \
  sudo apt-get install -y software-properties-common && \
  add-apt-repository -y ppa:nginx/stable && \
  apt-get install -y nginx && \
  rm -rf /var/lib/apt/lists/* && \
  echo "\ndaemon off;" >> /etc/nginx/nginx.conf && \
  chown -R www-data:www-data /var/lib/nginx

# Define working directory.
WORKDIR /etc/nginx

# copy configs
COPY config/ /etc/nginx/

CMD ["nginx"]
