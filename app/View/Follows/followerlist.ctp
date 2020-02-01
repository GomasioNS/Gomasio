
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

<table>
    <tr>
<th>人間たち</th><br>
<br>
<tr>
    <?php foreach ($FTE as $FTE): ?>
       <!-- 配列のデータを取り出してechoで出力する、h()はエスケープ -->
       <td><?php echo $FTE['Users']['username'] ?></td>
        <td><?php echo $FTE['Tweet']['tweet'] ?></td>

        <td><?php echo $FTE['Tweet']['created'] ?></td>

        <!-- このsつけたりつけちゃダメだったりな仕様は謎 -->
</tr>
</tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>

</div>
</body>
</html>
