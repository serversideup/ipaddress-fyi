#!/bin/bash

# Pull from Github
ssh -o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null -p $DEPLOY_SSH_PORT -i /tmp/deploy_ipaddress $DEPLOY_SSH_USER@$DEPLOY_SERVER_HOST 'cd ~/httpdocs; git pull origin master'

# Run database migrations
ssh -o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null -p $DEPLOY_SSH_PORT -i /tmp/deploy_ipaddress $DEPLOY_SSH_USER@$DEPLOY_SERVER_HOST 'cd ~/httpdocs; php artisan migrate'
