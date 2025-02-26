### プロジェクトをダウンロードする
「Code」 → 「Download.zip」

<br>

### テーマファイルご自身のWordPressのthemeフォルダに入れテーマファイルごとエディターで開く

<br>

### tailwind cssが機能するか検証
```php
<p class="text-2xl text-red-500">tailwind css test</p>
<p class="text-4xl">tailwind css test</p>
```

<br>

tailwind cssはすでに読み込まれているので
ここから先は特にしなくても大丈夫ですが
再度ビルドしたい場合は下記をお願いします。

<br>

### 必要なモジュールをインストールする
- ターミナル開いて以下コマンドを入力する
```
npm i
```
<br>

### tailwind cssのビルドコマンド
```
npm run tailwindcss-build
```