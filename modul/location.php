<?php 
// parent class
abstract class Location {

    public string $name;
}
// child class
class City extends Location {

    public function pkl(){
        return "City : Pekalongan";
    }
}
class Province extends Location {

}
class Country extends Location {

}
?>