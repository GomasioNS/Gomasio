
<?php

class Follow extends AppModel {

// public $validate = array(
//         'username' => array(                                    // usernameに関してバリデーションを定義します
//             'alphaNumeric'  => array(                           // 半角英数字で入力しなければならないルールをつくります
//                     'rule'     => 'alphaNumeric',               // alphaNumeric: 半角英数字
//                     'required' => true,                         // required: 入力必須。trueなので、入力必須としました
//                     'message'  => '半角英数字で入力してください。'  // エラーメッセージを決めます
//             ),
//             'between'       => array(                           // もう1つusernameにルールを加えます
//                     'rule'     => array('between', 5, 20),      // array('between', X, Y)で、X〜Y文字以内で入力というルールを作ることができます
//                     'message'  => '5～20字以内で入力してください。'
//             )
//         ),
//         'password' => array(                                    // 次に、passwordについてルールを決めます
//             'rule' => array('minLength', '4'),                  // array('minLength', X)は、最低文字数を決めます
//             'message' => '4文字以上で入力してください。'           // 当然、逆の最大文字数も定義できます
//         ),                                                      // ルールを1つだけ定義するときは、ルールに名前をつける必要はありません
//     );                                                          // ルールが2つ以上のときは、usernameのときのように、ルールに名前をつけましょう
//     public function beforeSave($options = array()) {                       // beforeSave(): 保存する前に行う処理
//         if (isset($this->data[$this->alias]['password'])) {                // BlowfishPasswordHasherを適用させます
//             $passwordHasher = new BlowfishPasswordHasher();
//             $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
//         }
//         return true;
//     }

}
?>