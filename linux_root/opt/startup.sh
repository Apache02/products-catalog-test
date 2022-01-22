#!/bin/sh
set -e

cd "$APP_PATH"

# Prepare php application
if [ "$STARTUP_UPDATE_VENDORS" = "true" ]
then
  # update vendors
  su - www-data -c "cd $APP_PATH && composer install -o"
fi

# migrate here
su - www-data -p -c "cd $APP_PATH && php yii migrate/up --interactive 0"

# sleep 2
# supervisorctl start php-worker
