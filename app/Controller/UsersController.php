
 
<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

public function index(){

        // 変数をビューへ渡す
        $tasks_data = array();
        $this->set('tasks_data', $tasks_data);

        // app/View/Tasks/index.ctpを表示
        $this->render('index');

}
public function login() {
   if ($this->request->is('post')) {  //ポスト送信されたデータがあれば、
 
       if ($this->Auth->login()){    // ログインが成功したら、
           return $this->redirect("../tweets/home"); // postのhomeページ(ブログ一覧のページ)に戻る
       } else {                                        // ログイン失敗したら
           $this->Flash->error(__('ログインに失敗しました'));
       }                                               // エラーメッセージを吐き出す
       // var_dump($this->request->is('post'));
   }
}

public function logout() {
    $this->Auth->logout();                             // ログアウト実行
    return $this->redirect('login');                          // ログインページに戻る指示
}



  public function create(){

       if ($this->request->is('post')) {                   // ポスト送信されたデータがあれば、
    if($this->User->save($this->request->data)){       //ユーザ登録が成功したら
      $this->redirect('login');                          //ログインページへ
    }
  }
}



}



?>
