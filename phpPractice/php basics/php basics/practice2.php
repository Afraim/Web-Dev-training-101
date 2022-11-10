<!DOCTYPE html>
<head>
</head>
    
    <body>
        Variables<br>
        <?php
        $my_String = "Hello everybody";
        $a = 50;
        $b = 20;
        $flo = 2.3;


        print $my_String."<br>";
        print "<h4>Variable with oparetion<br>Sum=".$a+$b."<br>Sub=".$a-$b."<br>Mul".$a*$b."<br>Div".$a/$b."<br";

        ?>

        <h4>PHP heredoc</h4>

        <?php
        $practice = <<<Text
        Php basic tutorial Php basic tutorial <br>
        Php basic tutorial Php basic tutorial <br>
        Php basic tutorial Php basic tutorial <br>
        Text;

        echo $practice;
        ?>


        <h4> Array </h4>
        <?php
        $simple = array("Apple","Banana","Pineapple");
        $pair = array("Apple"=>"Red","Banana"=>"Yellow","Pineapple"=>"green-yellow");


        print "Fruit is =".$simple[0]."<br>";
        print "Color of ".$simple[0]." is ".$pair[$simple[0]]."<br>"

        ?>
    </body>
</html>