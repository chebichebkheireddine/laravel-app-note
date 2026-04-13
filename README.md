<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

```
laravel-app-note
├─ .editorconfig
├─ app
│  ├─ Http
│  │  ├─ Controllers
│  │  │  ├─ Controller.php
│  │  │  └─ NoteController.php
│  │  └─ Requests
│  │     ├─ StoreNoteRequest.php
│  │     └─ UpdateNoteRequest.php
│  ├─ Models
│  │  ├─ Note.php
│  │  └─ User.php
│  ├─ Providers
│  │  └─ AppServiceProvider.php
│  └─ View
│     └─ Components
│        └─ Breadcrumb.php
├─ artisan
├─ bootstrap
│  ├─ app.php
│  ├─ cache
│  │  ├─ packages.php
│  │  └─ services.php
│  └─ providers.php
├─ composer.json
├─ composer.lock
├─ config
│  ├─ app.php
│  ├─ auth.php
│  ├─ cache.php
│  ├─ database.php
│  ├─ filesystems.php
│  ├─ logging.php
│  ├─ mail.php
│  ├─ queue.php
│  ├─ sanctum.php
│  ├─ services.php
│  └─ session.php
├─ database
│  ├─ factories
│  │  └─ UserFactory.php
│  ├─ migrations
│  │  ├─ 0001_01_01_000000_create_users_table.php
│  │  ├─ 0001_01_01_000001_create_cache_table.php
│  │  ├─ 0001_01_01_000002_create_jobs_table.php
│  │  ├─ 2026_02_27_150916_create_personal_access_tokens_table.php
│  │  └─ 2026_04_05_101734_create_notes_table.php
│  └─ seeders
│     └─ DatabaseSeeder.php
├─ package-lock.json
├─ package.json
├─ phpunit.xml
├─ public
│  ├─ .htaccess
│  ├─ favicon.ico
│  ├─ index.php
│  └─ robots.txt
├─ README.md
├─ resources
│  ├─ css
│  │  └─ app.css
│  ├─ js
│  │  ├─ app.js
│  │  └─ bootstrap.js
│  └─ views
│     ├─ components
│     │  └─ breadcrumb.blade.php
│     ├─ errors
│     │  └─ 503.blade.php
│     ├─ layout
│     │  ├─ app.blade.php
│     │  └─ nav.blade.php
│     ├─ Notes
│     │  ├─ create-note.blade.php
│     │  ├─ index-note.blade.php
│     │  └─ update-note.blade.php
│     ├─ post.blade.php
│     └─ welcome.blade.php
├─ routes
│  ├─ api.php
│  ├─ console.php
│  └─ web.php
├─ storage
│  ├─ app
│  │  ├─ private
│  │  └─ public
│  ├─ framework
│  │  ├─ cache
│  │  │  └─ data
│  │  ├─ sessions
│  │  ├─ testing
│  │  └─ views
│  │     ├─ 0266a149a483fdacbb5123c7ed29d2c9.php
│  │     ├─ 041233201b248bb46589b3224525d21c.php
│  │     ├─ 053864dad50c73f6384551b52c5b61f1.php
│  │     ├─ 17a422d889468673f22dfba9a576ffa4.php
│  │     ├─ 1ae30684693c7ebc716c282eaba2cb73.php
│  │     ├─ 24da6e6edef70a023ef106a8c573e525.php
│  │     ├─ 2a0bdc758747dc8677566b314b40af20.php
│  │     ├─ 2a22dce977b7b850cea6abdbbaee095a.php
│  │     ├─ 3a237229a50cede1a0529a74599835c7.php
│  │     ├─ 3ce91fd249f9e332df97706fd00ae596.php
│  │     ├─ 3ea889484030cc16850d2558c3242ee5.php
│  │     ├─ 45454f69da4a593cf55dc2e26d071e63.php
│  │     ├─ 534154d6e2822b52ef7aec00f03bc523.php
│  │     ├─ 55e20f12cad90c0f74ecdebd021e2948.php
│  │     ├─ 55f5c2d376273ebeacbdd34234c06347.php
│  │     ├─ 5da630e023d20b5e15e11ab96e3f7f39.php
│  │     ├─ 608512e465139c2a9c16a8b518b977ff.php
│  │     ├─ 65131ac5bf35b6e65050fa5cee08f47a.php
│  │     ├─ 697b4dd89a8f01500d532dee26894f64.php
│  │     ├─ 7af2bfc2bf227ca84cae5c25cb5098c0.php
│  │     ├─ 877969419e66111587b93777ed71e334.php
│  │     ├─ 8ba374cf72e5edc7fcd7924422b7e3d3.php
│  │     ├─ 8bcb0cdbed0ce2b576ea312246e8de44.php
│  │     ├─ 91df9a62bbc2706487d1aa8b1fc4c115.php
│  │     ├─ 944c303a134b28bf0f8c8218f68cce81.php
│  │     ├─ 9700cf824d9b1da5f414122290f31f70.php
│  │     ├─ 9857a096839b9a213f8dda4104a7680b.php
│  │     ├─ a790b8a651a0f63da230b4849447fa66.php
│  │     ├─ a93a237c5c83828e9118f18f9f217c16.php
│  │     ├─ a9cd73bb2a2d867e781db4cf6f84eb3e.php
│  │     ├─ aa7ac834b80b4c6bf1786472f4e515e5.php
│  │     ├─ b39ff2e55b0810e68e08f381861aada2.php
│  │     ├─ b8612a13326ad55c5e6f9f56a227682e.php
│  │     ├─ ca849e78a8526328fd476977aabb3821.php
│  │     ├─ cf5e1fbb6b878a0067f67c68f898f518.php
│  │     ├─ d26a990a6199a4cd8a4be105a1550b67.php
│  │     ├─ d735cb6110c3702ca2e8517f4a8d3029.php
│  │     ├─ ecf2b327ce501b4e2beada8b334cbcee.php
│  │     ├─ ee65bebb62c51eae81ec79ceb4cf304c.php
│  │     ├─ f0881ad56eeaddefc872290a7942873f.php
│  │     ├─ f583d2a52c796ac8b08786fac6dd2780.php
│  │     ├─ f653921f7b5d59a6f4d6fac1bd3c71fb.php
│  │     ├─ f842a5a595a510e44e1d0ac73a60d346.php
│  │     └─ fa559405b0adb054189176e9473a8dfe.php
│  └─ logs
└─ tests
   ├─ Feature
   │  └─ ExampleTest.php
   ├─ TestCase.php
   └─ Unit
      └─ ExampleTest.php

```
```
laravel-app-note
├─ .editorconfig
├─ app
│  ├─ Http
│  │  ├─ Controllers
│  │  │  ├─ Controller.php
│  │  │  └─ NoteController.php
│  │  └─ Requests
│  │     ├─ StoreNoteRequest.php
│  │     └─ UpdateNoteRequest.php
│  ├─ Models
│  │  ├─ Note.php
│  │  └─ User.php
│  ├─ Providers
│  │  └─ AppServiceProvider.php
│  └─ View
│     └─ Components
│        └─ Breadcrumb.php
├─ artisan
├─ bootstrap
│  ├─ app.php
│  ├─ cache
│  │  ├─ packages.php
│  │  └─ services.php
│  └─ providers.php
├─ composer.json
├─ composer.lock
├─ config
│  ├─ app.php
│  ├─ auth.php
│  ├─ cache.php
│  ├─ database.php
│  ├─ filesystems.php
│  ├─ logging.php
│  ├─ mail.php
│  ├─ queue.php
│  ├─ sanctum.php
│  ├─ services.php
│  └─ session.php
├─ database
│  ├─ factories
│  │  └─ UserFactory.php
│  ├─ migrations
│  │  ├─ 0001_01_01_000000_create_users_table.php
│  │  ├─ 0001_01_01_000001_create_cache_table.php
│  │  ├─ 0001_01_01_000002_create_jobs_table.php
│  │  ├─ 2026_02_27_150916_create_personal_access_tokens_table.php
│  │  └─ 2026_04_05_101734_create_notes_table.php
│  └─ seeders
│     └─ DatabaseSeeder.php
├─ package-lock.json
├─ package.json
├─ phpunit.xml
├─ public
│  ├─ .htaccess
│  ├─ favicon.ico
│  ├─ index.php
│  └─ robots.txt
├─ README.md
├─ resources
│  ├─ css
│  │  └─ app.css
│  ├─ js
│  │  ├─ app.js
│  │  └─ bootstrap.js
│  └─ views
│     ├─ components
│     │  └─ breadcrumb.blade.php
│     ├─ errors
│     │  └─ 503.blade.php
│     ├─ layout
│     │  ├─ app.blade.php
│     │  └─ nav.blade.php
│     ├─ Notes
│     │  ├─ create-note.blade.php
│     │  ├─ index-note.blade.php
│     │  └─ update-note.blade.php
│     ├─ post.blade.php
│     └─ welcome.blade.php
├─ routes
│  ├─ api.php
│  ├─ console.php
│  └─ web.php
├─ storage
│  ├─ app
│  │  ├─ private
│  │  └─ public
│  ├─ framework
│  │  ├─ cache
│  │  │  └─ data
│  │  ├─ sessions
│  │  ├─ testing
│  │  └─ views
│  │     ├─ 0266a149a483fdacbb5123c7ed29d2c9.php
│  │     ├─ 041233201b248bb46589b3224525d21c.php
│  │     ├─ 053864dad50c73f6384551b52c5b61f1.php
│  │     ├─ 17a422d889468673f22dfba9a576ffa4.php
│  │     ├─ 1ae30684693c7ebc716c282eaba2cb73.php
│  │     ├─ 24da6e6edef70a023ef106a8c573e525.php
│  │     ├─ 2a0bdc758747dc8677566b314b40af20.php
│  │     ├─ 2a22dce977b7b850cea6abdbbaee095a.php
│  │     ├─ 3a237229a50cede1a0529a74599835c7.php
│  │     ├─ 3ce91fd249f9e332df97706fd00ae596.php
│  │     ├─ 3ea889484030cc16850d2558c3242ee5.php
│  │     ├─ 45454f69da4a593cf55dc2e26d071e63.php
│  │     ├─ 534154d6e2822b52ef7aec00f03bc523.php
│  │     ├─ 55e20f12cad90c0f74ecdebd021e2948.php
│  │     ├─ 55f5c2d376273ebeacbdd34234c06347.php
│  │     ├─ 5da630e023d20b5e15e11ab96e3f7f39.php
│  │     ├─ 608512e465139c2a9c16a8b518b977ff.php
│  │     ├─ 65131ac5bf35b6e65050fa5cee08f47a.php
│  │     ├─ 697b4dd89a8f01500d532dee26894f64.php
│  │     ├─ 7af2bfc2bf227ca84cae5c25cb5098c0.php
│  │     ├─ 877969419e66111587b93777ed71e334.php
│  │     ├─ 8ba374cf72e5edc7fcd7924422b7e3d3.php
│  │     ├─ 8bcb0cdbed0ce2b576ea312246e8de44.php
│  │     ├─ 91df9a62bbc2706487d1aa8b1fc4c115.php
│  │     ├─ 944c303a134b28bf0f8c8218f68cce81.php
│  │     ├─ 9700cf824d9b1da5f414122290f31f70.php
│  │     ├─ 9857a096839b9a213f8dda4104a7680b.php
│  │     ├─ a790b8a651a0f63da230b4849447fa66.php
│  │     ├─ a93a237c5c83828e9118f18f9f217c16.php
│  │     ├─ a9cd73bb2a2d867e781db4cf6f84eb3e.php
│  │     ├─ aa7ac834b80b4c6bf1786472f4e515e5.php
│  │     ├─ b39ff2e55b0810e68e08f381861aada2.php
│  │     ├─ b8612a13326ad55c5e6f9f56a227682e.php
│  │     ├─ ca849e78a8526328fd476977aabb3821.php
│  │     ├─ cf5e1fbb6b878a0067f67c68f898f518.php
│  │     ├─ d26a990a6199a4cd8a4be105a1550b67.php
│  │     ├─ d735cb6110c3702ca2e8517f4a8d3029.php
│  │     ├─ ecf2b327ce501b4e2beada8b334cbcee.php
│  │     ├─ ee65bebb62c51eae81ec79ceb4cf304c.php
│  │     ├─ f0881ad56eeaddefc872290a7942873f.php
│  │     ├─ f583d2a52c796ac8b08786fac6dd2780.php
│  │     ├─ f653921f7b5d59a6f4d6fac1bd3c71fb.php
│  │     ├─ f842a5a595a510e44e1d0ac73a60d346.php
│  │     └─ fa559405b0adb054189176e9473a8dfe.php
│  └─ logs
└─ tests
   ├─ Feature
   │  └─ ExampleTest.php
   ├─ TestCase.php
   └─ Unit
      └─ ExampleTest.php

```