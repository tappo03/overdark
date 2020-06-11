# 💡 OverDark API PHP Library
All functions of <b>overdark API</b> 

# 🔗 TOKEN Retrive
Retrive API Token from t.me/OverDarkAPI_bot, if you not have, register to bot

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
