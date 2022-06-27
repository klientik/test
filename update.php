<?php
require_once 'config/connect.php';
$goods_id = $_GET['id'];
$good = mysqli_query($mysqli, "SELECT * FROM `goods` WHERE `id` = '$goods_id'");
$good = mysqli_fetch_assoc($good);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Обновить товар</title>
</head>

<body>
    <div class="container mt-3">
        <h2>Обновить Товар</h2>
        <form class="form-check" action="vendor/update.php" method="post">
            <input type="hidden" name="id" value="<?= $good['id'] ?>">
            <p>Название</p>
            <input type="text" name="title" value="<?= $good['title'] ?>">
            <p>Описание</p>
            <textarea name="description"><?= $good['description'] ?></textarea>
            <p>Цена</p>
            <input type="number" name="price" value="<?= $good['price'] ?>">
            <br><br>
            <button class="btn btn-success" type="submit">Обновить</button>

        </form>
    </div>
</body>

</html>