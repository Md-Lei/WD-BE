<?php
include('connect.php');
if (isset($_GET['islandOfPersonalityID'])) {
    $islandOfPersonalityID = $_GET['islandOfPersonalityID'];
    $islandQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = '$islandOfPersonalityID'";
    $islandResult = executeQuery($islandQuery);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Island Content</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Raleway", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }

        .w3-content {
            max-width: 800px;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin: auto;
        }

        img {
            border-radius: 5px;
            width: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="w3-content">

        <header class="w3-container w3-center w3-padding-32">
            <h1><b>Island Content</b></h1>
            <p>Reflections and stories of the island.</p>
        </header>

        <?php
        if (mysqli_num_rows($islandResult) > 0) {
            while ($row = mysqli_fetch_assoc($islandResult)) {
                $image = $row['image'];
                $content = $row['content'];
                $color = $row['color'];
                ?>

                <div class="container-fluid">
                    <div class="w3-card-4 w3-white" style="margin-bottom: 20px; border-radius: 10px;">
                        <img src="images/contentImages/<?php echo $image; ?>" alt="Island Image"
                            style="border-radius: 10px 10px 0 0;">
                        <div class="w3-container p-5"
                            style="background-color: <?php echo $color; ?>; border-radius: 0 0 10px 10px;">
                            <p><?php echo $content; ?></p>
                        </div>
                    </div>
                </div>



                <?php
            }
        } else {
            echo "No content found for this island.";
        }
        ?>

        <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
            <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
        </footer>
    </div>
</body>

</html>