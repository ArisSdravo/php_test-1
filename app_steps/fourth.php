<br>
<html>
    <body>
        <?php
            for ( $i=1; $i<=5; $i++) {
                echo "Hello World!: ".$i."<br/>";
            }
        ?>
        <br>
        <strong>xxxxx</strong>
        <br>
        <?php
            $x=array ("one", "two", "three");
            foreach ( $x as $value ) {
                echo $value . "<br/>";
            }
        ?>
    </body>
</html>