<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Blog</title>
</head>
<body>
    <?php
        ini_set("display_errors", 1);
        require "Admin.php";

        $user1 = new User("Marco", "Rossi");
        $user1->mobile = "+393245675845";
        $user1->email = "marco@gmail.com";
        $user1->username = "marco87rs";

        $user2 = new User("Fabio", "Neri");
        $user2->mobile = "+393297364532";
        $user2->email = "fabio@gmail.com";
        $user2->username = "fabio83nr";

        $user3 = new User("Giulio", "Golia");
        $user3->mobile = "+393293565875";
        $user3->email = "giulio@gmail.com";
        $user3->username = "giulio76gl";
        
        $admin1 = new Admin("Luca", "Verdi");
        $admin1->mobile = "+393346729837";
        $admin1->email = "luca@gmail.com";
        $admin1->username = "luca82vr";

        $admin2 = new Admin("Giorgio", "Mastrota");
        $admin2->mobile = "+393386737289";
        $admin2->email = "giorgio@gmail.com";
        $admin2->username = "giorgio68mt";
        
        $persons = [];
        $i = 1;     //variabile contatore riferita agli users
        $j = 1;     //variabile contatore riferita agli admins

        //Controllo quanti user e admin esistono e li pusho in un array settando anche password e data di registrazione
        while(isset(${"user".$i}) || isset(${"admin".$j})) {
            if(isset(${"user".$i})) {
                ${"user" . $i}->setPassword();
                ${"user" . $i}->setRegistered();
                array_push($persons, ${"user".$i});
                $i++;
            } else {
                ${"admin" . $j}->setPassword();
                ${"admin" . $j}->setRegistered();
                array_push($persons, ${"admin".$j});
                $j++;
            }
        }
    ?>

    <style>
        .container {
            width: 50%;
            margin: 0 auto;
            text-align: center;
            border: 1px solid black;
            padding: 20px;
        }
        .box:not(:last-child) {
            border-bottom: 1px solid grey;
        }
    </style>
    <div class="container">
        <?php
            foreach($persons as $person) {
                echo "<div class='box'>";
                echo "<h1>" . $person->firstName . " " . $person->lastName . "</h1>";
                echo "<p>". $person->getType() ."</p>";
                echo "<p>". $person->email . " | " . $person->mobile . "</p>";
                echo "<p>" . $person->getRegistered() . "</p>";
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>