
<?php 

require_once __DIR__ . '/estate_agency/Data.php';
require_once __DIR__ . '/estate_agency/Agent.php';
require_once __DIR__ . '/estate_agency/Client.php';

$HouseWithGarden = new DataAgency('HouseBig', 'with big garden', 2022, 'New York', 243000, 24, 'https://images.adsttc.com/media/images/5e68/48ed/b357/658e/fb00/0441/large_jpg/AM1506.jpg?1583892706');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Data Agency</title>
</head>
<body>
    <div class="container p-4">
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $HouseWithGarden->Photo ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $HouseWithGarden->ProductName ?></h5>
            <p class="card-text"><?php echo $HouseWithGarden->ProductDescription ?></p>
            <h4><?php echo $HouseWithGarden->PubblicPrice . ' $' ?></h4>
            <h6><?php echo $HouseWithGarden->PubblicRentalPrice . ' $/Months' ?></h6>
            <a href="#" class="btn btn-primary">Buy</a>
        </div>
        </div>
    </div>
</body>
</html>