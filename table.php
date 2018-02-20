<?php
$Link = mysql_connect('localhost', 'root', '123456');

if(!$Link) echo "Не удалось подключится к серверу";
else
{
    mysql_select_db('Usersbd');

    $sql = "CREATE TABLE `Userbd`.`Users` (`id` INT( 3 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,`name` VARCHAR( 25 ) CHARACTER SET

      utf8 COLLATE utf8_general_ci NULL ,`passwd` VARCHAR( 10 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL) ENGINE = MYISAM";
    if (mysql_query($sql))
        echo "Создание таблицы завершено";
    else
        echo "таблица не создана";
}
?>

