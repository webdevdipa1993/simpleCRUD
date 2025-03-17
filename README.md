
LARAVEL CLI STEPS:: 
   composer create-project laravel/laravel crud_system
   cd crud_system
   php artisan make:migration create_products_table
   php artisan migrate
   php artisan make:seeder ProductSeeder
   php artisan make:model Product
   php artisan db:seed --class=ProductSeeder
   php artisan make:controller ProductController --resource
   php artisan make:view product.index
   php artisan make:view product.create
   php artisan make:view product.edit
   php artisan make:view product.show
   php artisan make:layouts.default
   php artisan make:view layouts.default


GIT STEPS:: 
  git init
  git remote add origin https://github.com/webdevdipa1993/simpleCRUD.git
  git add .env .env.example README.md app\ artisan bootstrap\ composer.json composer.lock config\ database\ package.json  phpunit.xml public\ resources\ routes\ storage\ tests\ vite.config.js
  git add .gitignore\ .gitattributes .gitignore
  git status
  git commit -m "Initial Commit"
  git push origin master