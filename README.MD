#Wezom - News
Test front news module for laravel

###Installation
1. Add project to composer  
```
"repositories": [
    {
        "type": "git",
        "url": "https://github.com/procivam/news.git"
    }
],
"require": {
    "procivam/news": "dev-master"
}
```
2. Update Composer dependencies: Composer update
3. Add service provider Procivam\News\NewsServiceProvider::class to Providers in config/app.php
4. Publish resources: php artisan vendor:publish --provider="Procivam\News\NewsServiceProvider"
5. Migrate: php artisan migrate