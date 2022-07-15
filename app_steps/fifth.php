<html>
    <body>
        <?php
            $a=2;
            $b=17;

            function add($x,$y) {
                $total = $x + $y ;
                return $total;
            }

            echo $a."+".$b."=".add($a,$b);
        ?>

        <br><br>
        <?php
            function xx($x,$y) {
                global $z; // Global variable.
                $total = $x + $y + $z;
                return $total;
            }
            $z = 5;
            echo "1 + 16"."+".$z."=" . xx(1,16);
        ?>

   </body>
</html>