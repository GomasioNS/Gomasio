<!-- // app/Controller/FollowsController.php -->
 
<?php
App::uses('AppController', 'Controller');

class FollowsController extends AppController{

    public function followlist(){
            $this ->loadModel('User');
            $this ->loadModel('Tweet');

        //set('送信する変数名',$this->Model名->find('条件'));
    $FT = $this->Follow->find('all', array(
    'joins' => array(
        array(
            'table' => 'tweets',
            'alias' => 'Tweet',
            'type' => 'INNER',
            'conditions' => array(
                'Tweet.user_id = Follow.follower_id'
            )
        ),
         // find all で探すものの 条件指定
    array(
                    'table' => 'users',
                    // テーブル名
            'alias' => 'Users',
            // 何だろうこれ
            'type' => 'INNER',
            // これはこのままでOK
            'conditions' => array(
                'Users.id = Follow.follower_id'
                // くっつけたいテーブルとカラム名を入力！
    )),
    ),
        'conditions' => array(
        'Follow.follow_id' => $this->Auth->user('id')),
    'fields' => array('Users.*','Tweet.*', 'Follow.*'),
    'order' => 'Follow.follow_id DESC'
));
    $this ->set('FT',$FT);
            // debug($FT);

          // 上記の形でリスト表示の命令を行なっている。詳しくは
         // https://stackoverflow.com/questions/5079908/cakephp-find-method-with-join
        
    }

    public function followerlist(){
            $this ->loadModel('User');
            $this ->loadModel('Tweet');

                    //set('送信する変数名',$this->Model名->find('条件'));
    $FTE = $this->Follow->find('all', array(
    'joins' => array(
        array(
            'table' => 'tweets',
            'alias' => 'Tweet',
            'type' => 'INNER',
            'conditions' => array(
                'Tweet.user_id = Follow.follow_id'
            )
        ),
         // find all で探すものの 条件指定
    array(
                    'table' => 'users',
                    // テーブル名
            'alias' => 'Users',
            // 何だろうこれ
            'type' => 'INNER',
            // これはこのままでOK
            'conditions' => array(
                'Users.id = Follow.follow_id'
                // くっつけたいテーブルとカラム名を入力！
    )),
    ),
        'conditions' => array(
        'Follow.follower_id' => $this->Auth->user('id')),
    'fields' => array('Users.*','Tweet.*', 'Follow.*'),
    'order' => 'Follow.follower_id DESC'
));
    $this ->set('FTE',$FTE);

    }

}

?>