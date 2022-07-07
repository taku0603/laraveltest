<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
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

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

2022/06/28の作業分
10:33
【Laravel】ComposerとLaravelをインストールする方法 https://nodoame.net/archives/10565

10:49
【Laravel】ルーティング、ビューの整理 https://nodoame.net/archives/10599
PHPでリダイレクトをheader関数以外で行う方法！ | Qumeruマガジン https://qumeru.com/magazine/128

11:25
【Laravel】コントローラーとアクション、Bladeテンプレートを作成する https://nodoame.net/archives/10611
Laravelで`Target class [〇〇Controller] does not exist.`と言われたときに検討してみたい原因 - Qiita https://qiita.com/norichintnk/items/34a04cd17bfe4014313a
【Laravel】エラーメッセージ「Target class [○○Controller] does not exist.」が表示されたときの解決策をお伝えします | たいらのエンジニアノート https://www.tairaengineer-note.com/laravel-error-target-class-does-not-exist/

11:52
【Laravel】フォームでPOST通信してみる https://nodoame.net/archives/10646
Laravelのルーティングの書き方を１０分でサクッと学ぶ | Web Apps Labo https://e-seventh.com/laravel-study-routing-in-ten-minutes/

13:57
【Laravel】Bladeテンプレートでレイアウトを共通化する https://nodoame.net/archives/10756
画像反映がなされないのは謎。

14:59
【Laravel】バリデーションの作成 https://nodoame.net/archives/11297

15:12
【Laravel】フォームリクエストを使ったバリデーション方法 https://nodoame.net/archives/11541

15:15
【Laravel】掲示板を作成する（1）各種設定、マイグレーションでDBテーブルを作成 https://nodoame.net/archives/11553

-- MariaDBにログイン
mysql -u root -p******

-- 掲示板用に「laravelpjt」という名前のユーザーとデータベースを作成
MariaDB [(none)]> CREATE DATABASE laravelpjt;
mysql> create user 'laravelpjt'@'localhost' identified by 'password';
mysql> grant all privileges on laravelpjt.* to 'laravelpjt'@'localhost';

-- （一旦ログアウトして）作成したユーザでログイン
mysql -u laravelpjt -ppassword

MariaDB [(none)]> show databases;


16:49
【Laravel】掲示板を作成する（2）Eloquentでのリレーション設定、SeedとFakerでDBにテストデータを登録 https://nodoame.net/archives/11572
SeedとFaker全然効かねえ…記事が古いのが原因かな


17:41
【Laravel】掲示板を作成する（3）一覧画面、詳細画面の作成 https://nodoame.net/archives/11600
namespaceの間違いでクラスがうまく検出されないエラー。
おそらく昔のコードだからディレクトリ構成ちがうんやろうな〜。
対策としてコマンドでモデルファイルを作ることが推奨される。
Laravelでモデルがnot foundするときの解決方法 - ポッポプログラミング https://poppotennis.com/posts/laravel-model-notfount
途中から全然反映されなくて萎えてきた

2022/07/07
MVCパターンについて - Laravel学習帳 https://laraweb.net/surrounding/922/
Laravelでmake:bladeでbladeを作成するコマンドの自作 - Qiita https://qiita.com/nkimra/items/f7a8465eca893abcafe8
