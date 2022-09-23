<?php

Class DataAgency {

    public $ProductName;
    public $ProductDescription;
    public $ProductYear;
    public $ProductPosition;
    protected $ProductPrice;
    protected $ProductRentalPrice;

    public function __construct($Name, $Desc, $Year, $Position, $Price)
    {
        $this->ProductName = $Name;
        $this->ProductDescription = $Desc;
        $this->ProductYear = $Year;
        $this->ProductPosition = $Position;
        $this->ProductPrice = $this->getPrice($Price);
        // $this->ProductRentalPrice = $RentalPrice;

    }


    public function getPrice($Price) {
        
        if ($Price != null && $Price != 0) {
            return (($Price * 22 ) / 100) + $Price;
        } else {
            return 0;
        }
    }

}

?>