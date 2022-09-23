
<?php 

require_once __DIR__ . '/estate_agency/Data.php';
require_once __DIR__ . '/estate_agency/Agent.php';
require_once __DIR__ . '/estate_agency/Client.php';

$HouseWithGarden = new DataAgency('HouseBig', 'with big garden', 2022, 'New York', 243000, 24, 'https://images.adsttc.com/media/images/5e68/48ed/b357/658e/fb00/0441/large_jpg/AM1506.jpg?1583892706');

var_dump($HouseWithGarden);

?>