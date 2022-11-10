<!DOCTYPE html>
<head>
</head>
    
    <body>
        <h4>Functions and Loops</h4>

        
        <?php 
        function Sum($a,$b){
            return $a+$b;
        }
        print Sum(4,5);

        print "<br><br>";

        $today = mktime(0,0,0, date("m"),Date("d")+1,date("y"));

        echo "Today =".date("d/m/y")."<br>";
        
        echo "Tomorrow =".date("d/m/y",$today);
        
        ?>
    </body>
</html>