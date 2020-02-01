 <!-- app/View/Users/search_result.ctp -->

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
         <th>名前一覧</th>
    <?php foreach ($searchname as $searchname): ?>
        <!-- 上の$searchnameは、php側でセットしているから使える物になりやす -->
        <!-- これが繰り返し表示になります -->
    <tr>
        <td><?php echo $searchname['User']['username']; ?>
        </td>
        <td>
            <?php echo (
          $this->Form->create('Follow') .        // 入力フォーム作成
$this ->Form ->hidden('follow_id',array('value' => $follow['id'])).
$this->Form->hidden('follower_id',array('value' => $searchname['User']['id'])).
$this->Form->submit('ぜってぇフォローしてくれよな！').
  $this->Form->end ()
);
  ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>

</table>
</div>
</body>
</html>
