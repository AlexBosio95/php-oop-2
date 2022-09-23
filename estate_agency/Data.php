<?php

Class DataAgency {

    public $ProductName;
    public $ProductDescription;
    public $ProductYear;
    public $ProductPosition;
    public $Photo = null;
    protected $ProductPrice;
    protected $ProductRentalPrice;


    public function __construct($Name, $Desc, $Year, $Position, $Price, $Months = 0, $PathPhoto)
    {
        $this->ProductName = $Name;
        $this->ProductDescription = $Desc;
        $this->ProductYear = $Year;
        $this->ProductPosition = $Position;
        $this->ProductPrice = $this->getPrice($Price);
        $this->ProductRentalPrice = $this->getRentalPrice($this->ProductPrice, $Months);
        $this->Photo = $PathPhoto;
    }


    public function getPrice($Price) {
        
        if ($Price != null && $Price != 0) {
            return (($Price * 22 ) / 100) + $Price;
        } else {
            return 0;
        }
    }

    public function getRentalPrice($TotalPrice, $Months){
        return round(($TotalPrice / 4) / $Months );
    }

}

?>