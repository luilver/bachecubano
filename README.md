# Web de Bachecubano.com - Clasificados y Compra Venta en Cuba

![Bachecubano Web de Clasificados, negocios Compra Venta en Cuba](https://raw.githubusercontent.com/n3omaster/bachecubano/master/public/img/coming-soon-bachecubano.jpg)

## Variables globales desde AppServiceProvider

`$total_ads` = Cantidad de anuncios total, sin duplicados, activos y aprobados.  
`$parent_categories` = Parent Categories Array  
`$category_formatted` = Categories formatted for views  

## Visual Style

`.dark-primary-color    { background: #1976D2; }`  
`.default-primary-color { background: #2196F3; }`  
`.light-primary-color   { background: #BBDEFB; }`  
`.text-primary-color    { color: #FFFFFF; }`  
`.accent-color          { background: #FFC107; }`  
`.primary-text-color    { color: #212121; }`  
`.secondary-text-color  { color: #757575; }`

Some creation tips:

1. php artisan make:controller AdController --resource --model=Ad
2. php artisan make:model Store --migration --controller --resource
3. php artisan make:model Alert -mcr
4. php artisan make:model Rating -mcr
5. php artisan make:request StoreBlogPost
6. php artisan make:event OrderShipped
7. php artisan make:job SendReminderEmail --sync
8. php artisan make:mail OrderShipped

## Create AMP Pages & Facebook Instant Pages
https://github.com/wearejust/laravel-amp  
https://amp.dev/documentation/examples/e-commerce/amp_for_e-commerce_getting_started/?format=websites  

## Create Schema.org Structired Data
https://github.com/spatie/schema-org  
https://freek.dev/642-a-package-to-fluently-generate-schemaorg-markup  
https://instantarticles.fb.com/

## Referal System
https://brudtkuhl.com/blog/building-referral-system-laravel/  
https://willbrowning.me/building-a-simple-referral-system-in-laravel/

## View Hints
JS auto hashtag  
JS ajax data from on specific hover time
Secuencial notifications bottom left

## SubDomain Mapping for Stores
ArmamePC  
HolaCubaShop  
PcPlus  
ApyTec  
img.bachecubano.com for images mapping folder 👍 (now all images are at `img.bachecubano.com` <-- Cookieless domain)  
Add * in the wildcards DNS 👍 <-- Now any non existente domain map to `base_url`

## SEO Requirements
robots.txt  
sitemap.xml  
feed <- Parametrized
SEO laravel library Package

## Lazy Images Load  
https://github.com/aFarkas/lazysizes  

## Some Google API´s
Google Base  
Google Sitemap  
OpenBay Pro  

## IDE Tips & Install
IntelliSense for CSS class names in HTML

## Social Integrations
https://github.com/laravel/socialite -> Login with Facebook, Twitter, Google, LinkedIn  
MailChimp Integration (QvaQui Publicitaria) in the subscribe template 👍  


### Development History
https://github.com/barryvdh/laravel-debugbar -> composer require barryvdh/laravel-debugbar --dev  
https://tutsforweb.com/creating-helpers-laravel -> Custom Helpers  
SubDomain Stores Map
Add `'img_url' => env('IMG_URL'), //IMG_URL=https://img.bachecubano.com/` to app config file and `.ENV` file 👍  

#### Migration Procedure
categories, category_descriptions, category_stats, migrations tables upload <- Check Encode Type utf8mb4 and utf8mb4_unicode_ci 👍

rename oc_t_item to ads  
    rename fields created_at and updated_at  
    rename all obvious fields deleting the fk_i_ prefix  
    remove f_price, currency_code  
    check for indexes, and foreign keys  
    <- Check Encode Type utf8mb4 and utf8mb4_unicode_ci  

rename oc_t_item_description to ad_descriptions  
    rename all obvious fields deleting the fk_i_ prefix  
    remove fk_c_locale_code
    rename indexes name
    rename the s_ prefixes and indexes
    verify encoding type utf8mb4 and utf8mb4_unicode_ci to all tables

rename oc_t_item_resource to ad_resources
    rename all internal names and indexes and relations
    delete path field
    delete foreign key

rename oc_t_item_promotion to ad_promos
    rename item_id for ad_id
    add index to promos table

rename oc_t_item_comment to ad_comments
rename oc_t_item_location to ad_locations 
rename oc_t_item_stats to ad_stats