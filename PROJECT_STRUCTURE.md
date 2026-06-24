# Project Structure

```text
laravel-write-ai/
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── phpunit.xml
├── README.md
├── vite.config.js
├── .editorconfig
├── .env
├── .env.example
├── .gitattributes
├── .gitignore
├── .npmrc
├── app/
│   ├── Actions/
│   │   ├── FileUpload.php
│   │   ├── SyncPostTags.php
│   │   └── Fortify/
│   │       ├── CreateNewUser.php
│   │       ├── PasswordValidationRules.php
│   │       ├── ResetUserPassword.php
│   │       ├── UpdateUserPassword.php
│   │       └── UpdateUserProfileInformation.php
│   ├── Enums/
│   │   └── PostStatus.php
│   ├── Events/
│   │   └── PostViewed.php
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Controller.php
│   │   │   ├── FollowController.php
│   │   │   ├── HomeController.php
│   │   │   ├── PostController.php
│   │   │   └── Dashboard/
│   │   │       ├── NotificationController.php
│   │   │       └── PostController.php
│   │   └── Requests/
│   │       └── PostRequest.php
│   ├── Listeners/
│   │   └── IncrementPostViews.php
│   ├── Mail/
│   │   └── GreetingMessage.php
│   ├── Models/
│   │   ├── Category.php
│   │   ├── Comment.php
│   │   ├── Post.php
│   │   ├── Tag.php
│   │   ├── User.php
│   │   └── Scopes/
│   │       └── OwnerScope.php
│   ├── Notifications/
│   │   └── FollowNotification.php
│   ├── Observers/
│   │   └── PostObserver.php
│   ├── Providers/
│   │   ├── AppServiceProvider.php
│   │   └── FortifyServiceProvider.php
│   ├── Rules/
│   │   └── Restricted.php
│   └── View/
│       └── Components/
│           ├── Layout.php
│           ├── RecommendedAuthors.php
│           └── UserMenu.php
├── bootstrap/
│   ├── app.php
│   ├── providers.php
│   └── cache/
│       └── .gitignore
├── config/
│   ├── app.php
│   ├── auth.php
│   ├── cache.php
│   ├── database.php
│   ├── filesystems.php
│   ├── fortify.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── services.php
│   └── session.php
├── database/
│   ├── .gitignore
│   ├── factories/
│   │   └── UserFactory.php
│   ├── migrations/
│   │   ├── 0001_01_01_000000_create_users_table.php
│   │   ├── 0001_01_01_000001_create_cache_table.php
│   │   ├── 0001_01_01_000002_create_jobs_table.php
│   │   ├── 2026_05_13_093930_create_categories_table.php
│   │   ├── 2026_05_13_102421_create_posts_table.php
│   │   ├── 2026_05_25_093704_add_two_factor_columns_to_users_table.php
│   │   ├── 2026_05_25_093705_create_passkeys_table.php
│   │   ├── 2026_06_01_095211_create_comments_table.php
│   │   ├── 2026_06_01_104053_create_tags_table.php
│   │   ├── 2026_06_03_091452_add_meta_columns_to_posts_table.php
│   │   ├── 2026_06_10_091518_create_notifications_table.php
│   │   ├── 2026_06_10_094707_create_followers_table.php
│   │   └── 2026_06_14_083544_add_deleted_at_to_categories_table.php
│   └── seeders/
│       ├── DatabaseSeeder.php
│       ├── CategorySeeder.php
│       ├── PostSeeder.php
│       └── UserSeeder.php
├── lang/
│   └── en/
│       ├── auth.php
│       ├── pagination.php
│       ├── passwords.php
│       └── validation.php
├── public/
│   ├── .htaccess
│   ├── favicon.ico
│   ├── index.php
│   ├── robots.txt
│   ├── css/
│   │   ├── base.css
│   │   ├── main.css
│   │   └── vendor.css
│   ├── images/
│   │   ├── avatars/
│   │   ├── icons/
│   │   ├── thumbs/
│   │   ├── default-avatar.png
│   │   ├── default-thumbnail.jpg
│   │   ├── logo.svg
│   │   ├── sample-image.jpg
│   │   └── wheel-*.jpg
│   ├── js/
│   │   ├── jquery-3.2.1.min.js
│   │   ├── main.js
│   │   ├── modernizr.js
│   │   └── plugins.js
│   └── uploads/
│       └── .gitignore
├── resources/
│   ├── css/
│   │   └── app.css
│   ├── data/
│   │   └── posts.php
│   ├── js/
│   │   └── app.js
│   └── views/
│       ├── auth/
│       │   ├── forgot-password.blade.php
│       │   ├── login.blade.php
│       │   ├── reset-password.blade.php
│       │   └── rest-password.blade.php
│       ├── asides/
│       │   ├── follow-authors.blade.php
│       │   ├── newsletter.blade.php
│       │   └── trending.blade.php
│       ├── blog/
│       │   └── single-standard.blade.php
│       ├── components/
│       │   ├── layouts/
│       │   │   └── main-layout.blade.php
│       │   ├── recommended-authors.blade.php
│       │   ├── user-menu.blade.php
│       │   └── widgets/
│       │       └── newsletter.blade.php
│       ├── dashboard/
│       │   ├── notifications.blade.php
│       │   └── posts/
│       │       ├── _form.blade.php
│       │       ├── create.blade.php
│       │       ├── edit.blade.php
│       │       ├── index.blade.php
│       │       └── show.blade.php
│       ├── home.blade.php
│       ├── layouts/
│       │   ├── front.blade.php
│       │   └── main.blade.php
│       ├── mails/
│       │   └── follow.blade.php
│       ├── pagination/
│       │   └── custom-tailwind.blade.php
│       ├── posts/
│       │   └── show.blade.php
│       ├── vendor/
│       │   ├── mail/
│       │   │   ├── html/
│       │   │   └── text/
│       │   ├── notifications/
│       │   │   └── email.blade.php
│       │   └── pagination/
│       └── welcome.blade.php
├── routes/
│   ├── console.php
│   └── web.php
├── storage/
│   ├── app/
│   ├── framework/
│   └── logs/
└── tests/
    ├── Feature/
    │   └── ExampleTest.php
    ├── Unit/
    │   └── ExampleTest.php
    └── TestCase.php
```
