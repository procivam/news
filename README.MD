#Wezom - News
Test front news module for laravel

###Installation
1. Add project to composer  
```
"repositories": [
    {
        "url": "https://github.com/procivam/news",
        "type": "git"
    }
],
"require": {
    "procivam/news": "1.*"
}
```
2. Update Composer dependencies: Composer update
3. Publish resources: php artisan publish
4. Migrate: php artisan migrate
5. Add service provider Procivam\News\NewsServiceProvider::class to Providers in config/app.php