#Press CTRL+ALT+i on Windows / CTRL+Option+i on MacOS
composer require illuminate/redis --ignore-platform-req=ext-pcntl --ignore-platform-req=ext-zip --ignore-platform-req=ext-posix
composer require laravel/pint --dev
composer require laravel/telescope --dev
composer require laravel/tinker --dev
php artisan vendor:publish --provider="Laravel\Tinker\TinkerServiceProvider"
composer require laravel/telescope
php artisan telescope:install
composer require barryvdh/laravel-debugbar --dev
php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"
composer require --dev barryvdh/laravel-ide-helper --with-all-dependencies
php artisan vendor:publish --provider="Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider" --tag=config
composer require laravel/octane --dev
php artisan octane:install
echo "2"
echo "yes"
php artisan migrate
