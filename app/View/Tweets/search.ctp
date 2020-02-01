 <!-- app/View/Users/search.ctp -->

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

<h1>検索画面だお</h1>
<?php echo $this->Html->link ("ホーム",array('action'=>'../tweets/home')); ?>
<br>
<?php echo $this->Html->link ("ログアウト",array('action'=>'../users/logout')); ?>

<?php echo(

  $this->Form->create().
  $this->Form->text('search.ss').                                       // ユーザー名入力フォーム
  $this->Form->submit('よろしくお願いしまぁああああす！！').

  $this->Form->end());
?>

</div>
</body>
</html>
