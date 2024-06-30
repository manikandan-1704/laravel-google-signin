# Laravel Google Login Package

A Laravel package for integrating Google login functionality.

## Installation

1. You can install the package via Composer. Run the following command:

        composer require manikandan-1704/laravel-google-login


2. Publish the package configuration file:

        php artisan vendor:publish --provider="Manikandan1704\LaravelGoogleLogin\GoogleLoginServiceProvider"


3. Register the provider in config.php : 

        // config/app.php
        
       'providers' => [
        // ...
        Manikandan1704\LaravelGoogleLogin\GoogleLoginServiceProvider::class,
        ],


4. Publish the package configuration file :

        php artisan vendor:publish --provider="Manikandan1704\LaravelGoogleLogin\GoogleLoginServiceProvider"

        This will create a googlelogin.php file in your config directory where you can configure your Google OAuth credentials.

5. Use this in use statement :

        use Manikandan1704\LaravelGoogleLogin\Controllers\GoogleLoginController;

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

This package is open-sourced software licensed under the MIT license.

## Support

For any issues or questions, please visit the GitHub repository.
