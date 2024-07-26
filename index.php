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
    ],

];

$vote = isset($_GET['vote']) ? $_GET['vote'] : 0;

$filter_hotels = [];

if (!isset($_GET['parking'])) {
    foreach ($hotels as $hotel) {
        if ($hotel['vote'] >= $vote) {
            $filter_hotels[] = $hotel;
        }
    }
} else {
    foreach ($hotels as $hotel) {
        if ($hotel['parking'] && $hotel['vote'] >= $vote) {
            $filter_hotels[] = $hotel;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
    <h1>PHP Hotel</h1>

    <form action="index.php" method="GET">
        <div class="d-flex">

            <input type="checkbox" id="parking" class="form-ceck-input" name="parking">
            <label for="parking" class="form-ceck-label">Solo con parcheggio</label>

            Voto:

            <?php for ($i = 0; $i <= 5; $i++) : ?>
                <input type="radio" class="form-check-input" name="vote" id="vote<?php echo $i ?>" value="<?php echo $i ?>">
                <label class="form-check-label me-3" for="vote<?php echo $i ?>"><?php echo $i ?></label>
            <?php endfor; ?>

            <button type="submit" class="btn btn-primary">Filtra</button>

        </div>
    </form>

    <table class="table">
        <thead>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Parcheggio</th>
            <th scope="col">Voto</th>
            <th scope="col">Distanza dal centro</th>
        </thead>
        <tbody>

            <?php foreach ($filter_hotels as $hotel) : ?>
                <tr>
                    <td><?php echo $hotel['name'] ?></td>
                    <td><?php echo $hotel['description'] ?></td>
                    <td><?php echo $hotel['parking'] ? 'Sì' : 'No' ?></td>
                    <td><?php echo $hotel['vote'] ?></td>
                    <td>KM. <?php echo $hotel['distance_to_center'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>


    </table>
</body>

</html>