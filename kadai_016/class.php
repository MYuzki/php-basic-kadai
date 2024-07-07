<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
          class Food{
            // プロパティを定義する                        
            private $name;
            private $price;

            // メソッドを定義する
            public function show_price() {
              echo $this->price . '<br>';
            }
            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
          }

          class Animal{
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;

            // メソッドを定義する
            public function show_height() {
              echo $this->height . '<br>';
            }
            // コンストラクタを定義する
            public function __construct(string $name, int $height, string $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
          }

          // インスタンス化する
          $potato = new Food('potato', 250);
          $dog = new Animal('dog', 60, 5000);
  
          // インスタンスの各プロパティの値を出力する
          print_r($potato);
          echo '<br>';
          print_r($dog);
          echo '<br>';
          $potato->show_price();
          $dog->show_height();
        ?>
    </p>
</body>

</html>