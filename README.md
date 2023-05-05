# exam1_contect-form

#アプリケーション名
お問い合わせフォーム
<img width="497" alt="フォームイメージ" src="https://user-images.githubusercontent.com/92093565/236382782-39005a7f-4112-45f5-8ebf-fa6b5fddf7d6.png">


##作成した目的
教材内容の理解確認テスト

##アプリケーションURL
お問い合わせフォーム入力画面：localhost/
お問い合わせフォーム内容確認画面：localhost/confirmaition
Thanksページ：localhost/tanks
データ管理画面：localhost/data

テスト用お問い合わせフォーム入力画面：localhost/test
→本番用との変更点：フォーム自動入力ボタンを追加※保存先DBは本番環境と同じ

##機能一覧
お問い合わせフォーム（ルート：localhost/）
→入力内容をDB:contactsに保存

データ管理画面（ルート：localhost/data）
→入力内容からdb内のカラムを検索
→削除ボタンからカラムを削除

##使用技術（実行環境）
下記記載例　使用サービス；バージョン情報
・Laravel Framework:8.83.8
・nginx:1.21.1
・mysql:8.0.26
・Docker Engine - Community　:20.10.23

##テーブル設計
https://github.com/kuni9997/exam1_contect-form/issues/2#issue-1697054067

##ER図
https://github.com/kuni9997/exam1_contect-form/issues/3#issue-1697054709


