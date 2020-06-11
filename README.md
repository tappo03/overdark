# 💡 OverDark API PHP Library
All functions of <b>overdark API</b> into a <a href = 'https://php.net'>PHP</a> Library, for more info https://overdarkgame.com/langs/en/api/#/documentation

# 🔗 TOKEN Retrive
Retrive API Token from t.me/OverDarkAPI_bot, if you not have, register to bot

# 💾 Installation 
With <b>json file</b> (<code>Composer</code>):
``` json
{
    ...
    "require": {
        "tappo03/overdark_api": "*"
    }
}
```
With <b>command line</b> (<code>Composer</code>):

➖ <code>composer require tappo03/overdark_api</code>
# ⚙️ Example
➖ You can call overdark api with <code>tappo03\overdark\api</code> namespace:
```php
require_once ( __DIR__ . '/vendor/autoload.php' );

use tappo03\overdark\api\request;

$over_dark = new request('en','token',false);
```
➖ <b>get_profile example:</b>
```php
require_once ( __DIR__ . '/vendor/autoload.php' );

use tappo03\overdark\api\request;

$over_dark = new request('en','token',false);

print_r ($over_dark->get_profile ('0pl'));
```
➖ <b>get_clan example:</b>
```php
require_once ( __DIR__ . '/vendor/autoload.php' );

use tappo03\overdark\api\request;

$over_dark = new request('en','token',false);

print_r ($over_dark->get_clan ('CN0PP'));
```
➖ <b>get_char_info example:</b>
```php
require_once ( __DIR__ . '/vendor/autoload.php' );

use tappo03\overdark\api\request;

$over_dark = new request('en','token',false);

print_r ($over_dark->get_char_info ());
```
➖ <b>get_classification example:</b>
```php
require_once ( __DIR__ . '/vendor/autoload.php' );

use tappo03\overdark\api\request;

$over_dark = new request('en','token',false);

print_r ($over_dark->get_classification ('overdark')); // or darkworld
```
➖ <b>get_player_image example:</b> 
```php
require_once ( __DIR__ . '/vendor/autoload.php' );

use tappo03\overdark\api\request;

$over_dark = new request('en','token',false);

print_r ($over_dark->get_player_image (10000000,true)); // or false (without background)
```
