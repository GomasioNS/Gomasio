<!-- // app/Controller/TwitterController.php -->
 
<?php
App::uses('AppController', 'Controller');

class TweetsController extends AppController {

  public function home(){

        $this ->loadModel('User');
        $this ->loadModel('Follow');
        // Userのテーブルを使える様にする
        $this ->User->find('all');

        $this->set('auth', $this->Auth->user());


       $user = $this->Auth->user();
       $this->set('user',$user);

        if($this->request->is('post')) {

    if($this->Tweet->save($this->request->data)){       //Tweetが成功したら
      $tweet =array(
        'tweet'=> $this ->request ->date['Tweet']['tweet']);
        // 'user_id' => $this ->Auth ->User('id'));


      //           return $this->redirect(array('action' => 'home'));
      $this->redirect('home');                          //homeページへ
    }
   // if($this ->User->save($this->date)){

    }

  $this ->set('tweets',$this->Tweet->find('all',
    array('order' => 'created DESC',
          'conditions' => array('Tweet.user_id' => $this->Auth->user('id'),))));
  // tweetに、＄thisで役割を与えているんだお
  // わからなくなったらやまもっちゃんに聞こう

    $pending = $this->Follow->find('count', array(
      'conditions' => array('Follow.Follow_id' => $this->Auth->user('id'))));
      // debug($pending);
    $this->set('pending',$pending);

     $pend = $this->Follow->find('count', array(
      'conditions' => array('Follow.Follower_id' => $this->Auth->user('id'))
    ));
     $this->set('pend',$pend);
     // debug($pend);
 

}


public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Tweet->delete($id)) {
        $this->Flash->success(
            __('会員番号: %s抹消完了', h($id))
        );
    } else {
        $this->Flash->error(
            __('キャー！: %s さんのエッチー！', h($id))
        );
    }

    return $this->redirect('/tweets/home');
}


  public function search(){
        $this ->loadModel('User');

    if ($this->request->is('post')){ 
       $search = $this->request->data['search']['ss'];
       // serachからもってきたデータを、名前つけて$searchの箱に入れた
       $Find = $this->User->find('all');
       // ユーザーからデータを持ってくる命令
       return $this->redirect(['action' => 'search_result',$search]);
}


  }

  public function search_result($Find = null){
            $this ->loadModel('User');
            $this ->loadModel('Follow');

    // debug($Find);
    // debug($search);

    // $Find = $this->User->find('all');

    $Find = $this->User->find('all', array(
    'conditions' => array('User.username LIKE' => '%'.$Find.'%')));
// 'Model.field_name LIKE' => "%".$this->request->data['name']."%",
    $this ->set('searchname',$Find);
    // debug($searchname);
    // debug($)でその中身が反映されているかどうかがわかる

      $follow = $this->Auth->user();
       $this->set('follow',$follow);

       if($this->request->is('post')) {
           if($this->Follow->save($this->request->data)){       
      $follow =array(
        'follow'=> $this ->request ->date['Follow']['id']);
    }
  }




  }


}


?>