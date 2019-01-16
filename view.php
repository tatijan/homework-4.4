<?php
require('connect.php');
foreach ($_POST as $key => $value) {
    $wiev = "$key";
}
$sth1 = $pdo->prepare("DESCRIBE $wiev;");
$sth1->execute();
$sth1 = $sth1->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            padding: 10px;
        }
        table, tr, th, td {
            border: 1px solid #bebebe;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
        form {
            display: inline-block;
        }
        .f1, .f2 {
            margin: 20px 0;
        }
    </style>
    <title>Изменить поля таблицы</title>
</head>
<body>
<h3>Работа с таблицей : <?= $wiev ?></h3>
<table>
    <tr>
        <th>Поле</th>
        <th>Изменить</th>
        <th>Тип</th>
        <th>Изменить</th>
    </tr>
    <?php
    for ($i=0; $i < count($sth1); $i++) {
        ?>
        <tr><td>
                <?php echo $sth1[$i]['Field'] ?></td>
            <td>
                <form action="change.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="Table" value="<?= $wiev ?>">
                    <input type="hidden" name="Field" value="<?= $sth1[$i]['Field'] ?>">
                    <input type="hidden" name="Type" value="<?= $sth1[$i]['Type'] ?>">
                    <input type="text" name="Field2" placeholder="ведите новое название" value="">
                    <input type="submit" name="" value="Изменить">
                </form>
                <form action="delete.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="Table" value="<?= $wiev ?>">
                    <input type="hidden" name="Field" value="<?= $sth1[$i]['Field'] ?>">
                    <input type="submit" name="" value="Удалить">
                </form>
            </td>
            <td>
                <?php echo $sth1[$i]['Type'] ?></td>
            <td>
                <form action="change.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="Table" value="<?= $wiev ?>">
                    <input type="hidden" name="Field" value="<?= $sth1[$i]['Field'] ?>">
                    <input type="hidden" name="Type" value="<?= $sth1[$i]['Type'] ?>">
                    <input type="text" name="Type2" placeholder="ведите новый тип" value="">
                    <input type="submit" name="" value="Изменить">
                </form>
            </td></tr>
        <?php
    }
    ?>
</table>
<p><a href="tableList.php">На главную</a></p>
</body>
</html>