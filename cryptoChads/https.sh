#!/bin/bash
sudo apt-get update
sudo apt-get install certbot python3-certbot-nginx
sudo certbot --nginx -d yourdomain.com
sudo nginx -t
sudo systemctl reload nginx
echo '0 0 * * * /usr/bin/certbot renew --quiet' | sudo crontab -