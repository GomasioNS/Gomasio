<!-- File: /app/View/Posts/index.ctp -->
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

<h1>Blog posts</h1>
<p><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

        <?php echo $this->Html->link ("ログアウト",array('action'=>'../users/logout')); ?>
        
<!-- ここで $posts 配列をループして、投稿情報を表示 -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['tweets']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $post['tweets']['title'],
                    array('action' => 'view', $post['tweets']['id'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $post['tweets']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $post['tweets']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $post['tweets']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
</div>
</body>
</html>
