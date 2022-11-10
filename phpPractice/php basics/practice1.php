<!DOCTYPE html>
<head>
</head>
    
    <body>
        PHP Echo:<br>
        <?php
        echo "Hello World";
        ?>
<br><br>
        Dynamic Variable<br>
        <?php
        $mean="World Wide Web";
        $call="mean";
        $$call="World wide web";

        print "$mean<br>";
        print $$call."<br>";
        print "${$call} <br>";
        print "${'mean'}<br>";

        ?>
    </body>
</html>