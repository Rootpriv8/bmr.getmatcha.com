echo "installing zip"
echo "---------------------------------------------------------"
sleep 3
apt install zip -y


echo "installing unzip"
echo "---------------------------------------------------------"
sleep 3
apt install unzip -y

cd /var/www/html/wwwroot
wget https://wordpress.org/latest.zip


echo "Unzip latest.zip"
echo "---------------------------------------------------------"
sleep 3
unzip latest.zip

cd wordpress/
mv * /var/www/html/wwwroot
cd /var/www/html/wwwroot
rm -rf wordpress/
rm latest.zip hostingstart.html


echo "copying wp-config.php file from github"
echo "---------------------------------------------------------"
sleep 2
wget https://raw.githubusercontent.com/b173w3b/runwponazwebapp.net/main/wp-config.php

echo "copying nging config file from github"
echo "---------------------------------------------------------"
sleep 3
cp /etc/nginx/sites-available/default /etc/nginx/sites-available/default.bak
rm /etc/nginx/sites-available/default
cd /etc/nginx/sites-available/
wget https://raw.githubusercontent.com/b173w3b/runwponazwebapp.net/main/default

echo "Reloading ngnix server"
echo "---------------------------------------------------------"
sleep 2
nginx -s reload

rm /home/run.sh
