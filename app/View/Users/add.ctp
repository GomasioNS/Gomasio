<!-- File: /app/View/Posts/add.ctp -->

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

<h1>Add Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save Post');
?>

</div>
</body>
</html>
