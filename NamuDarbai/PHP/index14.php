<!--
- Sukurkite savo funkciją, kuri naršyklėje rodytų dabartinius metus: © 2018, jei tinklalapis buvo sukurtas ankstesniais metais, turėtų rodyti tokiu formatu:  © 2015-2018
- Pasvarstykite, kaip rasite dabartinius metus ir ar jūsų funkcija turės parametrų.
- Naudokitės: http://php.net/manual/en/function.date.php
-->

<?php

            $yearCreated = 2030;
            $yearCurrent = date('Y');

            if ($yearCreated < $yearCurrent) {
                echo '&copy ' . $yearCreated . ' - '. $yearCurrent;
            } elseif ($yearCreated == $yearCurrent) {
                echo '&copy ' . $yearCurrent;
            } else {
                echo '&copy ' . $yearCurrent;
            }




//    class Year {
//
//        public $yearCreated = 2015;
//        public $yearCurrent = date('Y');
//
//        public function copyright() {
//
//            if ($this -> yearCreated < $this -> yearCurrent) {
//                return '&copy ' . $this -> yearCreated . ' - '. $this -> yearCurrent;
//            } elseif ($this -> yearCreated == $this -> yearCurrent) {
//                return '&copy ' . $this -> yearCurrent;
//            } else {
//                return '&copy ' . $this -> yearCurrent;
//            }
//        }
//    }
//        $years = new Year();
//        echo $years -> copyright();


?>
