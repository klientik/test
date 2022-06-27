<?php
require_once 'config/connect.php';
$goods = mysqli_query($mysqli, "SELECT * FROM `goods`");
$goods = mysqli_fetch_all($goods);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <title>Товары</title>
</head>

<body>
    <div class="container mt-3">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Цена</th>
                    <th>&#9998;</th>
                    <th>&#10006;</th>
                </tr>
            <tbody>
                <?php
                foreach ($goods as $item) {
                ?>

                    <tr>
                        <td><?= $item[0] ?></td>
                        <td><?= $item[1] ?></td>
                        <td><?= $item[2] ?></td>
                        <td><?= $item[3] ?></td>
                        <td><a style="color: green;" href="update.php?id=<?= $item[0] ?>">Обновить</a></td>
                        <td><a style="color: red;" href="vendor/delete.php?id=<?= $item[0] ?>">Удалить</a></td>
                    </tr>


                <?php
                }

                ?>


            </tbody>
            </thead>
        </table>
    </div>
    <div class="container mt-3">
        <h2>Добавить Новый Товар</h2>
        <form class="form-check" action="vendor/create.php" method="post">
            <p>Название</p>
            <input type="text" name="title">
            <p>Описание</p>
            <textarea name="description"></textarea>
            <p>Цена</p>
            <input type="number" name="price">
            <br><br>
            <button class="btn btn-info" type="submit">Добавить</button>

        </form>
    </div>
</body>

</html>