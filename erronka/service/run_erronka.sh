#!/usr/bin/env bash

docker-compose -f "$SERVICES_PATH/erronka/service/docker-compose.yml" up -d --build