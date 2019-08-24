# Web de Bachecubano.com - Clasificados y Compra Venta en Cuba

![Bachecubano Web de Clasificados, negocios Compra Venta en Cuba](https://raw.githubusercontent.com/n3omaster/bachecubano/master/public/img/coming-soon-bachecubano.jpg)

## Variables globales desde AppServiceProvider

`$total_ads` = Cantidad de anuncios total, sin duplicados, activos y aprobados.  
`$parent_categories` = Parent Categories Array  
`$category_formatted` = Categories formatted for views  
`$total_users` = Total de Usuarios registrados  

## Visual Style

`.dark-primary-color    { background: #1976D2; }`  
`.default-primary-color { background: #2196F3; }`  
`.light-primary-color   { background: #BBDEFB; }`  
`.text-primary-color    { color: #FFFFFF; }`  
`.accent-color          { background: #FFC107; }`  
`.primary-text-color    { color: #212121; }`  
`.secondary-text-color  { color: #757575; }`  

### Some creation tips:  

1. php artisan make:controller AdController --resource --model=Ad  
2. php artisan make:model Store --migration --controller --resource  
5. php artisan make:request StoreBlogPost  
6. php artisan make:event OrderShipped  
7. php artisan make:job SendReminderEmail --sync  
8. php artisan make:mail OrderShipped  

## Create AMP Pages & Facebook Instant Pages

https://amp.dev/documentation/examples/e-commerce/amp_for_e-commerce_getting_started/?format=websites  

## Create Schema.org Structured Data

👍 `https://github.com/spatie/schema-org` -> `https://freek.dev/642-a-package-to-fluently-generate-schemaorg-markup`  
(By now, `HomePage` and `Product Page` ) later `Profile Page`  
https://instantarticles.fb.com/ -> Study this

## Referal System

https://brudtkuhl.com/blog/building-referral-system-laravel/  
https://willbrowning.me/building-a-simple-referral-system-in-laravel/  

## View Hints

👍 JS auto hashtag -> `https://github.com/gregjacobs/Autolinker.js/`  
-> `https://cdnjs.cloudflare.com/ajax/libs/autolinker/3.1.0/Autolinker.min.js` 👍  
JS ajax data from on specific hover time  
Instafeed.js -> `http://instafeedjs.com/` 
Secuencial notifications bottom left -> 

## Mailables

Published Ad  
Recover Password  
Register/Activate Account  

## SubDomain Mapping for Stores

ArmamePC  
HolaCubaShop  
PcPlus  
ApyTec  
👍 `img.bachecubano.com` for images mapping folder (now all images are at  
`img.bachecubano.com/images ???` <-- Cookieless domain)  
Move all oc-contect to that images folder ??? 👆👆👆  
`api.bachecubano.com` big tities 😜  
👍 Add * in the wildcards DNS <-- Now any non existente domain map to `base_url` 👍  

## SEO Requirements

👍 robots.txt 👍  
👍 `https://github.com/artesaos/seotools` 👍  
👍 `composer require spatie/laravel-sitemap` form Google SiteMap Now figure out to use it 👍  
👍 sitemap.xml  👍  
👍 Feeds -> `https://github.com/spatie/laravel-feed` 👍  

## API SubDomain

`api.bachecubano.com/v1/xxx` -> Which Maps `www.bachecubano.com/v1/xxx`  
`composer require laravel/passport` Study ;-|  
prefix('api) has been deleted for api subdomain mapping  

## Lazy Images Load  

👍 `https://github.com/aFarkas/lazysizes` 👍  

## Some Google API´s

Google Merchant  
Google Sitemap
    Lets Work Here:  
    `php artisan vendor:publish --provider="Spatie\Sitemap\SitemapServiceProvider" --tag=config`  
    Now mapped from API calls, do a CRON every 6 hours at `api.bachecubano.com/v1/sitemap`  
    Separated sitemaps: Categories, Latest 1000 ads, Static Pages, Stores etc 👍   

## Free API´s for developers  

`https://medium.com/@bapunawarsaddam/rest-api-with-laravel-5-8-using-laravel-passport-53b5953798bb` 

## Social Integrations

👍 Begin Install `https://github.com/laravel/socialite`  
-> Login with `Facebook` , Twitter, Google, LinkedIn  
Missing Configuration For `Facebook` , Google, Linkedin, InstaGram  
MailChimp Integration (QvaQui) in the subscribe template  

## Cache Optimizations  

👍 `composer require genealabs/laravel-model-caching` 👍  
👍 `composer require spatie/laravel-responsecache` as Response Cache  👍  
👍 `https://github.com/spatie/laravel-responsecache` 👍  
Study laravel HTTP Browser Cache  
    php artisan responsecache:clear     <-- Clear Response Cache  
    php artisan cache:clear             <-- Clear Laravel Cache  
    ->middleware('cacheResponse:604800'); in routes <-- Cache in Fileystem, nothign to do with response headers  
    So, There are three caches: Model Cache, Page Cache and HTTP Cache  
`https://scotch.io/tutorials/caching-in-laravel-with-speed-comparisons`  
👍 `https://itnext.io/laravel-the-hidden-setcacheheaders-middleware-4cd594ba462f`  HTTP Cache: `->middleware('cache.headers:no-cache,private,max-age=120;etag');` (Very carefull with this) 👍  

## Cache Names & Duration

`regions` forever


## Cron Jobs

//api.bachecubano.com/v1/sitemap every 12 hours  

## Search Drivers and behaviour

`composer require laravel/scout`

### Development History

👍 `https://github.com/barryvdh/laravel-debugbar` -> `composer require barryvdh/laravel-debugbar --dev`  
👍 `https://tutsforweb.com/creating-helpers-laravel` -> Custom Helpers  
SubDomain Stores Map <-- how to check it? <-- production Time, nothing to do 😪  
👍 Add `'img_url' => env('IMG_URL'), //IMG_URL=https://img.bachecubano.com/` to app config file and `.ENV` file  
👍 Installed SEO Package `composer require artesaos/seotools`  `https://github.com/spatie/schema-org`  
👍 Included `https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.0/lazysizes.min.js` as LazyLoad Images  use: `<img class="img-fluid lazyload" data-src="{{ ad_first_image($ad) }}" alt="{{ $ad->description->title }}">`  
👍 Analize description texts to avoid corruptions solved: `text_clean(Str::limit($ad->description->description, 160))`  
👍 `https://laraveldaily.com/posts-per-page-how-to-save-setting-for-every-user-individually/`  
👍 TODO `composer require laravel-notification-channels/facebook-poster` -> `https://sujipthapa.co/blog/generating-never-expiring-facebook-page-access-token` -> `https://github.com/laravel-notification-channels/facebook-poster`  
👍 Add Cart Button 😱 (just design, later go to functionality)   
👍 composer require intervention/image  
👍 Where is FoxPush? 👍   
BIG TODO: Edit Ad  
Watermark Image `$img->insert(public_path('watermark.png'),'bottom-right',10, 10);`  
Emails at Exceptions 👉 `https://medium.com/@dangermark/sending-laravel-exceptions-to-your-email-6706eac3c253`  
Revisar featured-listing para mejorar el responsive  
mailtrap.io for fake emails  

### Cart Controller Model

Add to cart, Pay, Delete From Cart etc  

#### Migration Procedure

Move All content from 
👍 categories  
👍 category_descriptions  
👍 category_stats  
👍 migrations    
👍 ad_stats  
<- Check Encode Type utf8mb4 and utf8mb4_unicode_ci on every table  

rename oc_t_item to ads  

    rename fields created_at and updated_at  
    rename all obvious fields deleting the fk_i_ prefix  
    remove f_price, currency_code 
    modify price to decimal 9,2 
    check for indexes, and foreign keys  
    update ads set price = price - 1000000 where price != IS_NULL()
    modify price to decimal .00  
    MIGRATION TWEAKS:
    add phone field 😱  
    add region_id set default value as -> `737586` 
    <- Check Encode Type utf8mb4 and utf8mb4_unicode_ci  

rename oc_t_item_description to ad_descriptions  

    rename all obvious fields deleting the fk_i_ prefix  
    remove fk_c_locale_code
    rename indexes name
    rename the s_ prefixes and indexes
    <- Check Encode Type utf8mb4 and utf8mb4_unicode_ci  

rename oc_t_item_resource to ad_resources  

    rename all internal names and indexes and relations remove fk_i_ prefix <-- Find out s_name use ??  
    delete foreign key, rename indexes, remove innecesary keys  
    delete columns: name, content  
    <- Check Encode Type utf8mb4 and utf8mb4_unicode_ci  
    

rename oc_t_item_promotion to ad_promos  

    rename item_id for ad_id  
    add index to promos table   

rename oc_t_user to users

    rename all internal indexes, relations, and column names
    password varchar 191

delete temporal posts table

HERE RUN `php artisan migrate` <--------------  
HERE RUN `php artisan passport:install` <--------------  

Add three news
Facebook/Bachecubano Notes

delete oc_t_item_comment <--not so important now
delete oc_t_region <--not so important now
delete ...