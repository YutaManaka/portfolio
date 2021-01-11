English follows Japanese.

# 香水ShopLara
香水ShopLaraは、あなたの好きな香水を購入できる、シンプルなECサイトです。
レスポンシブ対応しているのでスマホからもご確認いただけます。
![top](https://user-images.githubusercontent.com/54618797/104148917-8ce91a80-5417-11eb-9184-5308d8bb547f.png)

お急ぎの方は、下記テストユーザーをご準備しておりますので、ログインください。
- メールアドレス:example@test.com
- パスワード:test0123

## URL
http://18.182.147.168/

## 使用技術
- 言語/フレームワーク
  - PHP 7.0.33 / Laravel 6.20.8
- データベース
  - MySQL
- 開発環境
  - Docker for Mac
    - Laradock
- 本番環境
  - AWS
    - VPC
    - EC2
    - SES
- バージョン管理
  - Github

## 構成図
![AWS JP](https://user-images.githubusercontent.com/54618797/104154055-43083080-5427-11eb-992f-64c4138ed9f0.jpg)
![Frame JP](https://user-images.githubusercontent.com/54618797/104154358-16084d80-5428-11eb-80bd-744bd101e7b8.jpg)

## 機能一覧
1. 会員登録、ログイン、ログアウト機能
2. カート機能
    - 「カートに入れる」機能
    - 「カートから削除」機能
    - 合計個数、合計金額の表示機能
3. 購入機能
    -「購入する」ボタン押下後、登録メールアドレスに確認メール送信機能

![cart](https://user-images.githubusercontent.com/54618797/104149739-c2433780-541a-11eb-8827-2cb743efe44e.png)
↑top画面から、「カートに入れる」ボタンを押下すると、カート画面に遷移します。

![checkout](https://user-images.githubusercontent.com/54618797/104149743-c5d6be80-541a-11eb-83a5-adcd7478dd47.png)
↑カート画面の「購入する」ボタンを押下すると、登録メールアドレスに確認メールを送り、購入完了ページに遷移します。

![email](https://user-images.githubusercontent.com/54618797/104149870-3ed61600-541b-11eb-83a8-80c6496ebfc9.png)
↑ユーザー名、購入した商品名、価格を表示したメールを送信します。

## 参考サイト
### 1.ローカル環境構築
- Gitインストールhttps://tracpath.com/bootcamp/git-install-to-mac.html
- Dockerインストールhttps://qiita.com/kurkuru/items/127fa99ef5b2f0288b81
- LaradockとLaravelのインストールhttps://qiita.com/mukae_tech/items/24709085948a6d707da3
- ローカルのPHPをバージョンアップhttps://ocws.jp/blog/i-raised-my-macs-php-version-to-7-3/
### 2.AWS設定
- VPCの作成https://laraweb.net/tutorial/6605/
- EC2インスタンスの作成https://laraweb.net/tutorial/6637/
- Elastic IPの紐づけhttps://laraweb.net/tutorial/6661/
### 3.Github登録
- https://laraweb.net/environment/6516/
### 4.AWSで環境構築
- SSHでログインhttps://laraweb.net/tutorial/6676/
- ソフト（Git/Docker/Docker Compose）のインストールhttps://laraweb.net/tutorial/6694/
- Gitクローン&Docker起動https://laraweb.net/tutorial/6731/
  - laradockディレクトリがコミットできなかったので、下記記事を参考に解決。https://qiita.com/Potof_/items/c75eba9cfa72819506de
  - Couldn't connect to Docker daemon at http+docker://localhost - is it running?の解決https://www.virment.com/how-to-fix-couldnt-connect-to-docker-daemon/
- Laravel 環境設定https://laraweb.net/tutorial/6746/
### 5.Gitの使い方
ひとりチーム開発（issue作成　→　branch作成　→ プルリク　→ マージ）
- https://colorfree-map.com/git-issue-myself
- https://qiita.com/kujila_shiro/items/c26c8e0ab1a3ebd114d8
### 6.ECサイト構築の参考
- https://note.com/mukae9/n/n12cc13fd4f90?magazine_key=mf7a8ea438ba1
- https://qiita.com/neneta0921/items/f99fc0d2c6e9600604e7
### 7.Amazon SESを用いたメール送信設定
- https://laraweb.net/knowledge/7012/
- https://laraweb.net/knowledge/7063/
- https://laraweb.net/knowledge/7083/


# Fragrance Shop Lara
Fragrance Shop Lara is a simple shopping site where you can choose the fragrance you like.
It is responsive page, so that you can check in your smartphone.
![top](https://user-images.githubusercontent.com/54618797/104148917-8ce91a80-5417-11eb-9184-5308d8bb547f.png)

If you are in a hurry, please use test mailaddress and password below to log in.
- mail address:example@test.com
- password:test0123

## URL
http://18.182.147.168/

## Dependency
- Language/Framework
  - PHP 7.0.33 / Laravel 6.20.8
- Database
  - MySQL
- Development environment
  - Docker for Mac
    - Laradock
- Production environment
  - AWS
    - VPC
    - EC2
    - SES
- Version control
  - Github

## Diagram
![AWS EN](https://user-images.githubusercontent.com/54618797/104154049-40a5d680-5427-11eb-8602-a3b966509783.jpg)
![Frame EN](https://user-images.githubusercontent.com/54618797/104154356-143e8a00-5428-11eb-9d1f-8b5733e88987.jpg)

## Function
1. Sign in, Log in, Log out
2. Cart
    - "Add cart"
    - "Delete from your cart"
    - Display total number and price of items
3. Purchase
    - Send a confirmation email

![cart](https://user-images.githubusercontent.com/54618797/104149739-c2433780-541a-11eb-8827-2cb743efe44e.png)
↑When you click "Add cart" button in the top page, you will see your cart page.

![checkout](https://user-images.githubusercontent.com/54618797/104149743-c5d6be80-541a-11eb-83a5-adcd7478dd47.png)
↑When you click "Purchase" button in your cart page, you will see check out page and get an confirmation email.

![email](https://user-images.githubusercontent.com/54618797/104149870-3ed61600-541b-11eb-83a8-80c6496ebfc9.png)
↑The email confirms your name, item name, and price.

## Reference
### 1.Local environment construction
- Git install https://tracpath.com/bootcamp/git-install-to-mac.html
- Docker install https://qiita.com/kurkuru/items/127fa99ef5b2f0288b81
- Laradock and Laravel install https://qiita.com/mukae_tech/items/24709085948a6d707da3
- PHP version up https://ocws.jp/blog/i-raised-my-macs-php-version-to-7-3/
### 2.AWS configuration
- VPC configration https://laraweb.net/tutorial/6605/
- EC2 instance configration https://laraweb.net/tutorial/6637/
- Elastic IP setting https://laraweb.net/tutorial/6661/
### 3.Github register
- https://laraweb.net/environment/6516/
### 4.AWS environment construction
- SSH log in https://laraweb.net/tutorial/6676/
- Git/Docker/Docker Compose install https://laraweb.net/tutorial/6694/
- Git clone & Docker configration https://laraweb.net/tutorial/6731/
  - https://qiita.com/Potof_/items/c75eba9cfa72819506de
  - https://www.virment.com/how-to-fix-couldnt-connect-to-docker-daemon/
- Laravel configration https://laraweb.net/tutorial/6746/
### 5.Git usage
issue　→　branch　→ pullrequest　→ merge
- https://colorfree-map.com/git-issue-myself
- https://qiita.com/kujila_shiro/items/c26c8e0ab1a3ebd114d8
### 6.EC site development
- https://note.com/mukae9/n/n12cc13fd4f90?magazine_key=mf7a8ea438ba1
- https://qiita.com/neneta0921/items/f99fc0d2c6e9600604e7
### 7.Amazon SES
- https://laraweb.net/knowledge/7012/
- https://laraweb.net/knowledge/7063/
- https://laraweb.net/knowledge/7083/
