<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <?php
                $a = 'Boa Noite,';
                $b = ' galera!';
                echo "<p> $a $b </p>";
                $c = 10;
                $d = 45;
                $e = $c + $d;
                echo '<p>' . $e . '</p>';
            ?>

            <div id="box" style="width:200px;height:100px;padding:16px;border:1px solid #000;">
                Move mouse over this box
            </div>

                <script>
                const box = document.getElementById("box");

                // Let box listen for mouseover
                box.addEventListener("mouseover", function () {
                box.innerHTML = "Mouse is over me!";
                box.style.background = "magenta";
                box.style.color = "white"
                });

                // Let box listen for mouseout
                box.addEventListener("mouseout", function () {
                box.innerHTML = "Move is out!";
                box.style.background = "pink";
                box.style.color = "white"
                });
                </script>
        </body>
    </html>