<!-- // app/View/Users/login.ctp -->


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
<?php echo $this->Html->link ("新規登録はこちら",array('action'=>'create')); ?> 
<!-- ユーザー登録ページへのリンク -->
<?php echo(
  $this->Form->create('User').                                          // ログイン用入力フォーム作成
  $this->Form->input('username').                                       // ユーザー名入力フォーム
  $this->Form->input('password').                                       // パスワード入力フォーム
  $this->Form->end('ログイン')                                           // ログインボタン
);
?>
<div id="">
</div>
</div>
</body>
</html>


