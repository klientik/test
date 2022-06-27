<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once '../config/connect.php';
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    //mysqli_query($mysqli, "INSERT INTO `goods` (`id`, `title`, `description`, `price`) VALUES (NULL, '$title', '$description', '$price')");
    if ($price == '533') {
        mysqli_query($mysqli, "INSERT INTO `goods` (`id`, `title`, `description`, `price`) VALUES (NULL, '$title', '$description', '$price')");
    }
    header('Location: ../index.php');
    ?>
</body>

</html>