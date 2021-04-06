<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>learn php oop</title>
</head>
<body>

<!--class and object-->
    <?php 
        class name{
            public $color = 'red';
        }
        $p = new name();
        echo $p -> color;
    ?>

<!--methods-->

    <?php 
        class name {
            function nn(){
                echo "hello mahmoud ";
            }
            function age($year){
                echo "yor age is : " . $year;
            }
        }
        $prento = new name();
        echo $prento -> nn();
        echo $prento -> age(33);
    ?>

<!--extends-->

    <?php 
        class father{
            function f_mony(){
                echo " 1 million $";
            }
        }
        class son extends father {
            function s_mony(){
                echo "200 $";
            }
        }

        $fa = new father();
        echo $fa -> f_mony();
        $so = new son();
        echo $so -> s_mony();
        echo $so -> f_mony();
    ?>

<!--public private protected-->

    <?php 
        class info {
            public $name = "mahmoud";
            private $age = 22 ;
            protected $last_name = "Ali";
        }
        $info = new info();
        echo $info -> name ;
        echo $info -> last_name ;

    ?>

<!--this-->

    <?php 
        class info {
            public $name = "mahmoud <br>";
            function li(){
                echo $this -> name ;
                echo "learn oop in php";
            }
        }
        $p = new info();
        echo $p -> name ; 
        echo $p -> li();
    ?>

<!--__construct-->

    <?php 
        class info {
            function __construct(){
                echo "learn php oop";
            }
        }
        $p = new info();
    ?>

<!--__construct with parametres-->

    <?php 
        class student {
            function __construct($name,$age){
                echo $name . " " . $age ;
            }
        }
        $p = new student("mahmoud" , 22);
    ?>



    <?php 
        class emp{
            const name = "mahmoud";
            public $name2 = "Ali";
            public static $info = "learn php oop";
        }
        $p = new emp();
        echo $p -> name2 . "<br>" ;
        echo emp::name . "<br>";
        echo emp::$info;
    ?>
</body>
</html>