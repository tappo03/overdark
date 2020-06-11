# 💡 OverDark API PHP Library
All functions of <b>overdark API</b> into a <a href = 'https://php.net'>PHP</a> Library 

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

$over_dark = new request('it','token',false);
```
➖ <b>get_profile example:</b>
```php
require_once ( __DIR__ . '/vendor/autoload.php' );

use tappo03\overdark\api\request;

$over_dark = new request('it','token',false);

print_r ($over_dark->get_profile ('0pl'));
```
