Vendor/bin/cake bake project www
cp skeleton/View/Layouts/default.ctp www/View/Layouts/default.ctp
cp skeleton/View/Pages/home.ctp www/View/Pages/home.ctp
cp skeleton/Config/database.php www/Config/database.php
cp skeleton/webroot/index.php www/webroot/index.php
grunt less
grunt concat