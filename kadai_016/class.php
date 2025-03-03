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
        private $price;

        // メソッドの定義
         public function show_price(){
          echo $this->price ;
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
        private $height;
        private $weight;

        // メソッドの定義
        public function show_height(){
          echo $this->height;
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
        $food->show_price(); 
        echo '<br>';

        // Animalクラスのメソッドにアクセスして出力
        $animal->show_height(); 
      ?>
    </p>
  </body>
</html>

            