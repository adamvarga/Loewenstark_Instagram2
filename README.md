Loewenstark_Instagram for Magento 2.x
=====================
[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://paypal.me/adamvarga28)

Instagram Feed with configuration for Magento 2.x

-------------------------------
Installation Instructions
-------------------------
1, Clone the extension as a composer repository via GitHub 

2, Add the <strong>loewenstark/instagram2</strong> composer package to your project. 

3, Require with 
```
composer require loewenstark/instagram2
```
4, Clear the cache and upgrade the modul environment with
 
 ```
 rm -rf var/cache/*
 rm -rf var/page_cache/*
 rm -rf var/generation/*
 php bin/magento setup:upgrade
 ```
 
5, Logout from the admin panel and then login again.

6, Change the config in System -> Configuration -> Loewenstark Instagram 2 -> Configuration

7, Add container with ID in DOM (ID Name in Setup!)

For example:

```
<div id="instagram"></div>
```
- Position in homepage / categorypage / productpage

8, You can style the template individually with css / direct im template instafeed.phtml by variable 'template'

Example setup:

![alt text](https://github.com/adamvarga/Loewenstark_Instagram2/blob/master/setup_instagram.png)

Example frontend after styling:

![alt text](https://github.com/adamvarga/Loewenstark_Instagram2/blob/master/instagram_frontend.png)

Uninstallation
--------------
1, Remove all extension files from your Magento installation OR

2, Remove via Composer and clear the caches

```
composer remove loewenstark/instagram2
```


Support
-------
If you have any issues with this extension, open an issue on [GitHub](https://github.com/adamvarga).

Contribution
------------
Any contribution is highly appreciated. The best way to contribute code is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

Developer
---------
Adam Varga
