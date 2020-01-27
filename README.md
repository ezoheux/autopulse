# Autopulse

An amazing laravel service provider to implement user management in you laravel web application.

## Installation

To install this service provider goto the root directory of your laravel application run the composer command below.

```sh
composer require ezoheux/autopulse
```

After you need to do a couple of additional steps for this service provider to work

1. Add this service provider into your app config located in `root-directory/config/app.php`.

2. Next, you should publish the config file, migrations, translations, and views so you are able to edit them. Simply run the artisan command below.

```sh
php artisan vendor:publish --provider="Ezoheux\App\AutopulseServiceProvider"
```

3. Finally, you should load the routes for this service provider by adding `Autopulse::routes();` to your `root-directory/web/routes.php`. Just add the code below to that file.

You are now done and all set to go.

## Contributing

Thank you for considering contributing to the Autopulse! The contribution guide can be found in the [Autopulse repository](https://github.com/ezoheux/autopulse/blob/master/CONTRIBUTING.md).

## Code of Conduct

In order to ensure that the Autopulse community is welcoming to all, please review and abide by the [Code of Conduct](https://github.com/ezoheux/autopulse/blob/master/CODE_OF_CONDUCT.md).

## Security Vulnerabilities

If you discover a security vulnerability within Autopulse, please send an e-mail to Ezoheux via [ezoheux31@gmail.com](mailto:ezoheux31@gmail.com). All security vulnerabilities will be promptly addressed.

## License

Autopulse is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
