<!-- // app/View/Users/create.ctp -->
<!DOCTYPE html>
<html lang="ja">
<head>
<?php echo $this->Html->css('Mycolor'); ?>
<meta name="" content="; ">
<header>
    <div class="Tori">
<?php echo $this->Html->image("とり.jpg",array("alt" =>"")); ?>
</div>
<h2>ツイッターーーーーーーーー</h2>
</header>
</head>
<body>
    <h1>ログイン画面</h1>
<div class="Form">

<h1>新規登録</h1>

<?php
 echo(
  $this->Form->create('User') .        // 入力フォーム作成
  $this->Form->input('username') .     // ユーザー名入力
  $this->Form->input('password') .     // パスワード入力
  $this->Form->end('登録')             // 登録ボタン
 ); 
?>

</div>
</body>
</html>
