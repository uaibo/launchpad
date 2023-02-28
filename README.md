<h1 align="center">Lanchpad for Laravel</h1>

<p align="center">
Create a pre-launch page for your Laravel project.
</p>

## Requirements

- PHP >= 8.1
- Laravel >= 5.0

## Installation

1) Install Launchpad using `composer require`:

```bash
composer require uaibo/launchpad
```

Add the service provider in `config/app.php`:

> **Important**: If you're using Laravel 5.5 or above, you can skip the registration
> of the service provider, as it is registered automatically.

```php
Uaibo\Launchpad\LaunchpadServiceProvider::class
```

2) Publish the configuration file and assets:

```bash
php artisan vendor:publish --tag="launchpad"
```

3) Run migrations:
```
php artisan migrate
```
This will create the **launchpad** table in your database **where all the signups will be stored**.


4) Add .env variable:
```
APP_MODE=launchpad
```

## Configuration

1) Customize the content via the config file:

```
config/launchpad.php
```


2) Add or replace logos, with your own:

```
/vendor/uaibo/launchpad/assets/logo-wide.png
```
```
/vendor/uaibo/launchpad/assets/logo-square.png
```
Image shown when your app is shared on social media. Recommended size: **1200x630**):
```
/vendor/uaibo/launchpad/assets/social.png
```
Logo shown under the main logo, can be a "created by" logo:
```
/vendor/uaibo/launchpad/assets/logo-vendor.png
``` 

3) If you also want to show a short video, add the following files:

Video file:
```
/vendor/uaibo/launchpad/assets/video.mp4
```
Video poster image:
```
/vendor/uaibo/launchpad/assets/video.jpg
```


![image](https://user-images.githubusercontent.com/19323835/221978589-f9028640-f4de-42dd-9772-172a4b677cc7.png)
