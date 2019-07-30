<?php
try {
    $connection = new PDO(
        'mysql:host=127.0.0.1;dbname=blog',
        'root',
        'root'
    );

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();

}


function database ($sql, $connection, $fetch) {

    $sql;
    $stmt = $connection->prepare($sql);

    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $result = $stmt->fetchAll();
}