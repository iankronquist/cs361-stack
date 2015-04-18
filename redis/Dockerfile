FROM ubuntu

RUN apt-get update
RUN apt-get -y upgrade

# install redis
RUN apt-get -y install redis-server

# copy config
COPY config/ /etc/redis/

CMD redis-server /etc/redis/redis.conf
