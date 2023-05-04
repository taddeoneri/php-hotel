<?php 
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ]
    ];
    

    if (!empty($GET_['search'])) {
        $category = $_GET['search'];
        $filteredArray = [];
        for($i = 0; $i < count($hotels); $i++){
            if($hotels[$i]['parking'] == $category){
                $filteredArray[] = $hotels[$i];
            }
        }
    }else{
        $filteredArray = $hotels;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="d-flex align-items-center flex-column">
    <h1 class="text-center py-3">Hotels PHP</h1>
    <form class="py-4" action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
        <select name="search">
            <option selected>Open this select menu</option>
            <option value="true">Parking</option>
            <option value="false">No parking</option>
        </select>
        <button type="submit">Send</button>
    </form>
    <div>
        <table class="table py-3">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to center</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < count($filteredArray); $i++){ ?>
                    <tr>
                        <td><?php echo $filteredArray[$i]['name']; ?></th>
                        <td><?php echo $filteredArray[$i]['description']; ?></td>
                        <td><?php echo $filteredArray[$i]['parking']; ?></td>
                        <td><?php echo $filteredArray[$i]['vote']; ?></td>
                        <td><?php echo $filteredArray[$i]['distance_to_center']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>    
    </div>
    
</body>
</html>