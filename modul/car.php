<?php 

interface HasBrand{
    function getBrand() : string;
}

interface IsMaintance{
    function isMaintance() : bool;
}


interface Car extends HasBrand {

    function drive(): void;
    function getTire(): int;
}

class Avanza implements Car, IsMaintance{
    
    public function drive() : void{
        echo "Drive Avanza". PHP_EOL;
    }
    public function getTire(): int{
        return 4;
    }
    public function getBrand(): string{
        return "Toyota";
    }
    public function isMaintance(): bool{
        return false;
    }
}
?>