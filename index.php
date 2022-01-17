<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>

    <?php

        class Film {

            public $titolo;
            public $sottotitolo;
            public $regista;

            public function __construct($titolo) {
                $this -> titolo = $titolo;
            }

            public function getFullTitle() {
                if ($this -> sottotitolo) {
                    return $this -> titolo . ": " . $this -> sottotitolo;
                } else {
                    return $this -> titolo;
                }
            }

            public function __toString() {
                if ($this -> regista) {
                    return $this -> getFullTitle() . " | " . $this -> regista;
                } else {
                    return $this -> getFullTitle() . " | " . "???";
                }
            }

        }

        $f1 = new Film("Matrix");
        $f2 = new Film("Fantozzi 2");
        $f3 = new Film("Peter Pan");

        $f2 -> sottotitolo = "il ritorno di Fantozzi";

        $f3 -> sottotitolo = "il ritorno all'isola che non c'è.";
        $f3 -> regista = "Robin Budd";

        echo "F1: " . $f1 . "<br>" .
            "F2: " . $f2 . "<br>" .
            "F3: " . $f3 . "<br>";
            

    ?>
</head>
<body>
    
</body>
</html>