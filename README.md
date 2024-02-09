this was downloaded from
https://filament-issue.unitedbycode.com/

clone and serve :)

- visit /avatar
  - you will get
    - https://ui-avatars.com/api/?name=T+U&color=FFFFFF&background=09090b
- run `php artisan route:cache`
- visit /avatar
  - you should get 
    "Call to a member function getDefaultAvatarProvider() on null"
- to confirm, delete `bootstrap/cache/routes-*.php` or `route:clear`