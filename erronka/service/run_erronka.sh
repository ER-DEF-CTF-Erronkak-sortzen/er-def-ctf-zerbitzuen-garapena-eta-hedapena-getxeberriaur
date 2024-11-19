#!/usr/bin/env bash

docker-compose -f "$SERVICES_PATH/erronka/service/docker-compose.yml" up -d --build
#docker-compose -f "/root/services/erronka/service/docker-compose.yml" up -d --build