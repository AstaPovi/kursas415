<!---
- Užrašyk klasę, kuri talpintų žmogaus vardą, pavardę ir metodą pasisveikinimui.
- Sukurk du žmones su skirtingais duomenimis.
- Išvesk šiuos duomenis naršyklėje.-->

<?php
    class Actor {
        public $salis = 'Lietuvos';
        public $vardas;
        public $pavarde;

        public function sveiki() {
            return 'Geros dienos ' . $this -> vardas. ' '. $this -> pavarde. ' iš '. $this -> salis . ' !!!<br>';
        }
    }
    $actor1 = new Actor();
    $actor2 = new Actor();

    $actor1 -> vardas = "Rasa";
    $actor1 -> pavarde = "Sakalauskaite";

    $actor2 -> vardas = "Dominyka";
    $actor2 -> pavarde = "Vaitiekūnaite";

    echo $actor1 -> sveiki();
    echo $actor2 -> sveiki();
?>
