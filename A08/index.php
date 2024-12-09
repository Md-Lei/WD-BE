<?php
include('connect.php');

$query = "SELECT * FROM islandsofpersonality";
$result = executeQuery($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Lato", sans-serif
        }

        .w3-bar,
        h1,
        button {
            font-family: "Montserrat", sans-serif
        }

        .fa-anchor,
        .fa-coffee {
            font-size: 200px
        }
    </style>
</head>

<body>
    <header class="w3-container w3-center"
        style="padding:128px 16px; background-image: url('images/bg.jpeg'); background-size: cover; background-position: center; color: white;">
        <h1 class="w3-margin w3-jumbo">Core Memory</h1>
        <p class="w3-xlarge">The foundation of being me.</p>
        <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top"
            onclick="window.location.href='../';">Home</button>
    </header>

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $shortDescription = $row['shortDescription'];
            $longDescription = $row['longDescription'];
            $color = $row['color'];
            $image = $row['image'];
            $status = $row['status'];
            ?>

            <div class="w3-row-padding w3-padding-64 w3-container" style="background-color: <?php echo $color; ?>;">
                <div class="w3-content">
                    <div class="w3-twothird">
                        <h1><?php echo $name; ?></h1>
                        <p class="w3-text-grey py-2"><?php echo $shortDescription; ?></p>
                        <p class="w3-text-grey py-2"><?php echo $longDescription; ?></p>
                    </div>
                    <div class="w3-third w3-center">
                        <img src="images/<?php echo $image; ?>" alt="Island Image" class="w3-padding-4"
                            style="max-width: 70%; height: auto;">
                    </div>
                    <div class="container d-flex justify-content-center align-items-center" style="height: 70px;">
                        <button onclick="window.location.href='view.php'" class="btn btn-secondary"
                            style="width: 100px;">Visit</button>
                    </div>
                </div>
            </div>

            <?php
        }
    } else {
        echo "No records found.";
    }
    ?>

    <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
        <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
    </div>

    <footer class="w3-container w3-padding-64 w3-center w3-opacity">
        <div class="w3-xlarge w3-padding-32">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>