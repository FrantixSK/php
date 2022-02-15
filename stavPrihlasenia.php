<?php


$requiredMeno = "meno";
$requiredHeslo = "heslo";
$vysledok;


if ($_POST["username"] == $requiredMeno && $_POST["password"] == $requiredHeslo):
    $vysledok = "prihlaseny";
endif;



?>
<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        
        <?php
        if($vysledok == "prihlaseny"):
            echo $vysledok;
        else:
            header('Location: html.php?message=nespravne meno/heslo');
        endif;

        
        ?>

        
    </body>
</html>