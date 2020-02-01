<!-- // app/View/Tweets/home.ctp -->

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

<h1>ホームベース</h1>

<?php echo $this->Html->link ("検索",array('action'=>'../tweets/search')); ?>
<br>
<?php echo $this->Html->link ("ログアウト",array('action'=>'../users/logout')); ?>

<?php echo(

  $this->Form->create('Tweet') .        // 入力フォーム作成
  $this->Form->text('Tweet.tweet').                                       // ユーザー名入力フォーム
$this ->Form ->hidden('user_id',array('value' => $user['id'])).

  $this->Form->end ('つぶやく')                                       

);
?>

<?php echo $this->Html->link("フォロー".$pending."人",array('action' =>'../follows/followlist'));?>
<br>
<?php echo $this->Html->link("フォロワー".$pend."人",array('action' =>'../follows/followerlist'));?>

 <table>   
      <tr>
         <th>つぶやきシロー</th>
         <th>「明日」って「今」さ！！</th>

    <?php foreach ($tweets as $tweet): ?>
    <tr>
        <td><?php echo $tweet['Tweet']['tweet']; ?>
        </td>
        <td><?php echo $tweet['Tweet']['created']; ?></td>
                <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $tweet['Tweet']['id']),
                    array('confirm' => 'いっちょやってみっかぁ？')
                );
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>

</tr>
</table>
</div>
</body>
</html>

