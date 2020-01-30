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
9. php artisan make:migration migration_name

## Create AMP Pages & Facebook Instant Pages

https://amp.dev/documentation/examples/e-commerce/amp_for_e-commerce_getting_started/?format=websites  

## Create Schema.org Structured Data

👍 `https://github.com/spatie/schema-org` -> `https://freek.dev/642-a-package-to-fluently-generate-schemaorg-markup` 👍  
👍 (By now, `HomePage` and `Product Page` ) later `Profile Page` 
https://instantarticles.fb.com/ -> Study this

## Referal System

https://brudtkuhl.com/blog/building-referral-system-laravel/  
https://willbrowning.me/building-a-simple-referral-system-in-laravel/  

## View Hints

👍 JS auto hashtag -> `https://github.com/gregjacobs/Autolinker.js/` 👍  (AutoLink This # and some urls)

## Mailables

👍  Published Ad (Revisar)  
Recover Password  (Refactorizar)
Register/Activate Account  (Refactorizar)
Liked Ad
Rated Ad
Followed user

## SubDomain Mapping for Stores

ArmamePC  
HolaCubaShop  
PcPlus  
ApyTec  
👍 `img.bachecubano.com` for images mapping folder (now all images are at `img.bachecubano.com/images ???` <-- Cookieless domain)  
Move all oc-content to that images folder ??? 👆👆👆  
`api.bachecubano.com` big tities 😜  
👍 Add * in the wildcards DNS <-- Now any non existente domain map to `base_url` 👍  

## SEO Requirements

👍 robots.txt 👍  
👍 `https://github.com/artesaos/seotools` 👍  
👍 `composer require spatie/laravel-sitemap` form Google SiteMap Now figure out to use it 👍  
👍 sitemap.xml  👍  
👍 Feeds -> `https://github.com/spatie/laravel-feed` 👍 (Done Just with the News, later see the ads)  

## API SubDomain

`api.bachecubano.com/v1/xxx` -> Which Maps `www.bachecubano.com/v1/xxx` 
`composer require laravel/passport` Study ; -|  
prefix('api) has been deleted for api subdomain mapping  

## Lazy Images Load  

👍 `https://github.com/aFarkas/lazysizes` 👍  

## Some Google API´s

Google Merchant  
Google Sitemap
👍🏼 Google Analytics 
incoming visits from specific ad

Track the usage of your Laravel APIs with the Measurement Protocol
`composer require irazasyed/laravel-gamp` 

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

## Like/Dislike Behavior

👍 Like Behavior `composer require overtrue/laravel-like` 
Like/Dislike behavior via API
api.bachecubano.com/v1/like route
api.bachecubano.com/v1/dislike route
`php artisan vendor:publish --provider="Overtrue\\LaravelLike\\LikeServiceProvider" --tag=config` 
`php artisan vendor:publish --provider="Overtrue\\LaravelLike\\LikeServiceProvider" --tag=migrations` 
User model `use Overtrue\LaravelLike\Traits\CanLike;` inside Class `use CanLike;` 
Ad model `use Overtrue\LaravelLike\Traits\CanBeLiked;` inside Class `use CanBeLiked;` 
API:
$user = User::find(1); 
$post = Post::find(2); 
$user->like($post); 
$user->unlike($post); 
$user->toggleLike($post); 
$user->hasLiked($post); 
$post->isLikedBy($user); 
Event 	Description
Overtrue\LaravelLike\Events\Liked 	Triggered when the relationship is created.(Study this so events call other events like Emails) 👍  

#### Get user likes with pagination:

$likes = $user->likes()->with('likable')->paginate(20); 
foreach ($likes as $like) {  
    $like->likable; // App\Post instance  
}  

#### Get object likers:  

foreach($post->likers as $user) {  
    echo $user->name;  
}  

#### Like Helpers

// all
$user->likes()->count(); 
// with type
$user->likes()->withType(Post::class)->count(); 
// likers count
$post->likers()->count(); 

## Ban Users

`https://laraveldaily.com/how-to-ban-suspend-users-in-laravel-project` 

## Rating System

`https://github.com/rennokki/rating`  `composer require rennokki/rating` 
To rate other models, simply call rate() method:
$page = Page::find(1); 
$user->rate($page, 10); 
$user->hasRated($page); // true
$page->averageRating(User::class); // 10.0, as float
To update a rating, you can call updateRatingFor() method:
$user->updateRatingFor($page, 9); 
As you have seen, you can call averageRating() within models that can be rated. The return value is the average arithmetic value of all ratings as float.
$ad->raters(User::class)->get(); // Users that have rated this page
$user->ratings(Ad::class)->get(); // Pages that this user has rated

## Friend System

`composer require rennokki/befriended` 
$alice = User::where('name', 'Alice')->first(); 
$bob = User::where('name', 'Bob')->first(); 
$tim = User::where('name', 'Tim')->first(); 
$alice->follow($bob); 
$alice->following()->count(); // 1
$bob->followers()->count(); // 1
User::followedBy($alice)->get(); // Just Bob shows up
User::unfollowedBy($alice)->get(); // Tim shows up

## Cache Optimizations  

👍 `composer require spatie/laravel-responsecache` as Response Cache  👍  
👍 `https://github.com/spatie/laravel-responsecache` 👍  

Study laravel HTTP Browser Cache  

    php artisan responsecache:clear     <-- Clear Response Cache  
    php artisan cache:clear             <-- Clear Laravel Cache  
    ->middleware('cacheResponse:604800'); in routes <-- Cache in Fileystem, nothign to do with response headers  
    So, There are three caches: Model Cache, Page Cache and HTTP Cache  

`https://scotch.io/tutorials/caching-in-laravel-with-speed-comparisons` 
👍 `https://itnext.io/laravel-the-hidden-setcacheheaders-middleware-4cd594ba462f` HTTP Cache: `->middleware('cache.headers:no-cache,private,max-age=120;etag');` (Very carefull with this) 👍  

## Cache Names & Duration

👍 `regions` forever `Cache::rememberForever` 👍  

## Cron Jobs

https://api.bachecubano.com/v1/sitemap every 12 hours  (Check for it)
https://api.bachecubano.com/v1/lachopi/generate

## Promotions Viralize

👍 Telegram -> require laravel-notification-channels/telegram 👍  
👍 Twitter -> require laravel-notification-channels/twitter  👍  
👍 Facebook Messenger -> require laravel-notification-channels/facebook

## User Money Increase and Deduce

$myself->wallet->deduce($amount); 
$myself->wallet->credit($amount); 

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
Show more/Less behavior `https://github.com/viralpatel/jquery.shorten`  
👍🏼 `https://www.itsolutionstuff.com/post/laravel-change-password-with-current-password-validation-exampleexample.html` change Password 👍🏼  

### Cart Controller Model

Add to cart, Pay, Delete From Cart etc  

### User settings

implement some JSON store setting per user, new column JSON type, load it as any other data, write some methods for update and delete

### general Settings

install anlutro/laravel-settings
Setting::set('foo', 'bar'); 
Setting::get('foo', 'default value'); 
Setting::get('nested.element'); 
Setting::forget('foo'); 
$settings = Setting::all(); 

// Get the store instance
setting(); 
// Get values
setting('foo'); 
setting('foo.bar'); 
setting('foo', 'default value'); 
setting()->get('foo'); 
// Set values
setting(['foo' => 'bar']); 
setting(['foo.bar' => 'baz']); 
setting()->set('foo', 'bar'); 
// Method chaining
setting(['foo' => 'bar'])->save(); 

created settings table

## Fixes

Después de solicitar la nueva contraseña, redigirir con mensaje a esa misma página  
👍🏼 Custom sendPasswordResetNotification  
Add three news  
Facebook/Bachecubano Notes  

## Migration helpers

php artisan down --allow=152.207.218.177

## Features Coming Soon

Internal Chat  
Caché desactivada para los usuarios conectados.  
Ajax View Count  
Follow Seller  
Make Offer Modal  
google feedburner ads  
save cookie with last listing view, so add a NEW listing bagde if created_at is bigger  

## Testing Platform Functions

✅ Login  
✅ Register  
✅ Recover Password  
✅ Reset Password  
Change User Data:  
✅ Name  
✅ Avatar    
✅ Signature?  
❌ email?  
✅ Publish Ad (revisar fotos path)  
✅ After publish, launch modal with sharing options  
✅ Words Filter 👉 AppServiceProvider.php:Validator::extend  
    Guest Post (Prove with Facebook || Twitter Share 🤷‍♂️)  
    Private Email?  
✅ Autofill data from loggedin User  
〽️ Edit Ad Photos deletion?  
〽️ Check for a secure deletion physical images  
✅ Delete Ad  
✅ View Ad   
✅ Index Ads  
   ✅ Filter Category  
   ✅ Filter Price  
   ✅ Filter promotion status  
   ✅ Filter only fotos  
   ✅ Filter only partners  
✅ Promote Ad (deduce, increase money)  
〽️ BreadCrumbs (SEO Schema)  
✅ Update All Ads (throttle behavior)  
✅ Like Ad (Test)  
✅ Unlike Ad  
Report Ad  (Prioridad)  
✅ Share Ad  
    ✅ Facebook   
    ✅ Messenger  
    ✅ Twitter  
    ✅ Linkedin  
    ✅ Telegram  
    Email  
Prettify Ad promotion bars  
✅ Transfer Money  
Call, Send SMS, SendBacheSMS to a user  
User Profile Page  
Store Profile Page (Subdomain)  
Rv Scrapper  
Emails:  
    ✅ Ad created  
    Ad promoted  
    Ad comment  
API  
    List categories `https://api.bachecubano.com/{version}/categories`  
    List Ads from categpry `https://api.bachecubano.com/{version}/ads/{cat_id}`  
    Show Ad `https://api.bachecubano.com/{version}/ad/{ad_id}`  
    Search Ad  
    User info (limited)  
Email PIPE for api@bachecubano.com
    

## TODO
✅ Change Intervention GB library to imagick  