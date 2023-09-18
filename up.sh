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

rm /home/up.sh
