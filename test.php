<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'Warenkorb.php';
        include_once 'Artikel.php';

        $Warenkorb = new Warenkorb();
        $artikel = new Artikel(1, "Schuhe", 70.00);
        $artikel2 = new Artikel(2, "Ball", 50.00);

        $Warenkorb->addAtikel($artikel);
        $Warenkorb->addAtikel($artikel2);

        echo $Warenkorb;
        echo "Summe: " . $Warenkorb->getSumme();
        ?>
    </body>
</html>
