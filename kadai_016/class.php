<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
      // Foodクラスを定義する
      class Food {
        // プロパティの定義
        private $name;
        public $price;

        // メソッドの定義
        public function set_price(int $price){
          $this->price = $price;
        }
        public function show_price(){
          echo $this->name . '<br>';
        }

        // コンストラクタの定義
        public function __construct(string $name, int $price){
          $this ->name = $name;
          $this ->price =$price;
        }
      }
      ?>
     </p>
     <p>
     <?php
      // Animalクラスの定義
      class Animal{
         // プロパティの定義
        private $name;
        public $height;
        private $weight;

        // メソッドの定義
        public function set_height(int $height){
          $this->height = $height;

          }
        public function show_height(){
          echo $this->height . '<br>';
          }

        // コンストラクタの定義
        public function __construct(string $name, int $height, int $weight){
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
          }
      }

        // インスタンス化
        $food = new Food('potato',250);

        // インスタンス$foodの各プロパティの値を出力
        print_r($food);
        echo '<br>';

        // インスタンス化
        $animal = new Animal('dog', 60, 5000);

        // インスタンス$animalの各プロパティの値を出力
        print_r($animal);
        echo '<br>';

        // Foodクラスのメソッドにアクセスして出力
        echo $food->price . '<br>'; 

        // Animalクラスのメソッドにアクセスして出力
        echo $animal->height; 
      ?>
    </p>
  </body>
</html>

            