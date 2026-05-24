<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!--
        <p id = "p1">Meu texto </p>

        <script>
            let p = document.getElementById("p1");
            p.innerHTML = "Outro texto";
            p.style.color = "green"
            p.style.backgroundColor = "red"
        </script>
        -->

        <?php
            $a = 'Boa noite';
            $b = ' galera!';
            echo '<p>' . $a . $b . '</p>'; 

            $c = 10;
            $d = 35;
            $e = $c + $d;
            echo "<p>$e</p>";
        ?>

        <div id = "box" style = "width: 200px;height: 100px;padding: 16 px;border: 1px groove #104086;">Move mouse over this box!</div>

        <script>
            const box = document.getElementById("box");
            //Let box listen mouseover
            box.addEventListener("mouseover", function(){
                box.innerHTML = "Mouse is over me";
                box.style.backgroundColor  = "cyan";
            })  
 
            //Let box listen for mouseout
            box.addEventListener("mouseout", function(){
                box.innerHTML = "Mouse is out!"
                box.style.backgroundColor = "magenta";
            })
        </script>

    </body>
</html>