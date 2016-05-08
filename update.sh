echo "Actualizando Imperya"
git reset --hard
git pull --rebase
composer=$1
if [ "$composer" == "composer" ]; then
               echo "Se Actualizara Composer"
               php composer.phar self-update
               php composer.phar update
               mkdir -p app/var/jwt
               openssl genrsa -out app/var/jwt/private.pem -aes256 4096
               openssl rsa -pubout -in app/var/jwt/private.pem -out app/var/jwt/public.pem
fi
php bin/console doctrine:schema:update --dump-sql --force
php bin/console doctrine:fixtures:load --append
php bin/console cache:clear --env prod
php bin/console cache:clear --env acceptance
#chmod 755 index.php
chmod 755 web/app.php
chmod 755 web/app_dev.php
chmod 755 web/app_acceptance.php
chmod 755 update.sh
