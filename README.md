
#### Setup Project
```bash
# clone the repo or downlaod the zip
download the zip

# comment database query in AppServiceProvider.php like this
// $categories = Category::take(5)->get();
// View::share('categories', $categories);

// $setting = Setting::first();
// View::share('setting', $setting);

# install composer dependency
composer install

# create a environment file
cp .env.example .env

# set the Application key
php artisan key:generate


# setup the database credentials and migrate database with seeders
php artisan migrate --seed

# enable the database query code in AppServiceProvider.php like this
$categories = Category::take(5)->get();
View::share('categories', $categories);

$setting = Setting::first();
View::share('setting', $setting);
```



