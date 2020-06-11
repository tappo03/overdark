# 💡 OverDark API PHP Library

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/c0c2ec2b973f4f84a2cac0d240f8ccb5)](https://app.codacy.com/manual/tappo03/overdark?utm_source=github.com&utm_medium=referral&utm_content=tappo03/overdark&utm_campaign=Badge_Grade_Dashboard)

All functions of **overdark API** into a [PHP](<https://php.net>) Library, for more info <https://overdarkgame.com/langs/en/api/#/documentation>

## 🔗 TOKEN Retrive
Retrive API Token from [OverDarkAPI](<https://t.me/OverDarkAPI_bot>), if you not have, register to bot

## 💾 Installation
With **json file** (`Composer`):
``` json
{
    ...
    "require": {
        "tappo03/overdark_api": "*"
    }
}
```
With **command line** (`Composer`):

➖ `composer require tappo03/overdark_api`
## ⚙️ Example
➖ You can call overdark api with `tappo03\overdark\api` namespace:
```php
require_once ( __DIR__ . '/vendor/autoload.php' );

use tappo03\overdark\api\request;

$over_dark = new request('en','token',false);
```
➖ **get_profile example:**
```php
require_once ( __DIR__ . '/vendor/autoload.php' );

use tappo03\overdark\api\request;

$over_dark = new request('en','token',false);

print_r ($over_dark->get_profile ('0pl'));
```
➖ **get_clan example:**
```php
require_once ( __DIR__ . '/vendor/autoload.php' );

use tappo03\overdark\api\request;

$over_dark = new request('en','token',false);

print_r ($over_dark->get_clan ('CN0PP'));
```
➖ **get_char_info example:**
```php
require_once ( __DIR__ . '/vendor/autoload.php' );

use tappo03\overdark\api\request;

$over_dark = new request('en','token',false);

print_r ($over_dark->get_char_info ());
```
➖ **get_classification example:**
```php
require_once ( __DIR__ . '/vendor/autoload.php' );

use tappo03\overdark\api\request;

$over_dark = new request('en','token',false);

print_r ($over_dark->get_classification ('overdark')); // or darkworld
```
➖ **get_player_image example:**
```php
require_once ( __DIR__ . '/vendor/autoload.php' );

use tappo03\overdark\api\request;

$over_dark = new request('en','token',false);

print_r ($over_dark->get_player_image (10000000,true)); // or false (without background)
```
