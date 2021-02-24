# 💡 OverDark API PHP Library
[![Codacy Badge](https://app.codacy.com/project/badge/Grade/145b8d41e484414ea81272c3997e5468)](https://www.codacy.com/manual/tappo03/overdark?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=tappo03/overdark&amp;utm_campaign=Badge_Grade)
[![License: MIT](https://img.shields.io/github/license/tappo03/overdark)](https://opensource.org/licenses/MIT)
[![GitHub issues](https://img.shields.io/github/issues/tappo03/overdark)](https://github.com/tappo03/overdark)
[![Total Downloads](https://poser.pugx.org/tappo03/overdark_api/downloads)](//packagist.org/packages/tappo03/overdark_api)
[![Latest Stable Version](https://poser.pugx.org/tappo03/overdark_api/v)](//packagist.org/packages/tappo03/overdark_api)

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
➖ You can call overdark api with `Tappo03\overdark\api` namespace:
```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use Tappo03\overdark\api\request;

$over_dark = new Request('en', 'token', false);
```
➖ **get_profile example:**
```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use Tappo03\overdark\api\request;

$over_dark = new Request('en', 'token', false);

print_r ($over_dark->get_profile ('0pl'));
```
➖ **get_clan example:**
```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use Tappo03\overdark\api\request;

$over_dark = new Request('en', 'token', false);

print_r ($over_dark->get_clan ('CN0PP'));
```
➖ **get_char_info example:**
```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use Tappo03\overdark\api\request;

$over_dark = new Request('en', 'token', false);

print_r ($over_dark->get_char_info ());
```
➖ **get_classification example:**
```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use Tappo03\overdark\api\request;

$over_dark = new Request('en', 'token', false);

print_r ($over_dark->get_classification ('overworld')); // or darkworld
```
➖ **get_player_image example:**
```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use Tappo03\overdark\api\request;

$over_dark = new Request('en', 'token',false);

print_r ($over_dark->get_player_image (10000000,true)); // or false (without background)
```
