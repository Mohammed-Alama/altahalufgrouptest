#!/usr/bin/env bash
echo " Installing Composer Dependencies "
composer require laravel/ui --dev
artisan ui bootstrap --auth
composer require --dev barryvdh/laravel-ide-helper
echo "ide-helper installed success"
echo "begin ide-helper config"
php artisan ide-helper:generate
php artisan vendor:publish --provider="Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider" --tag=config
php artisan ide-helper:models
php artisan ide-helper:meta
echo "ide-helper config success"
echo " Committing after modifications to Git "
git add .
git commit -am "Initialize Composer dependencies and additional files."
