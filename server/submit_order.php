<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=clients", 'vasylbon', 'vasbondesign');

    $query = "INSERT INTO client VALUES (NULL, :name, :phone, :address, :comment, :delivery, :callback, :payment, :totalSum, :date)";

    $client = $conn->prepare($query);

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $comment = $_POST['comment'];
    $delivery = $_POST['deliveryType'];
    $callback = isset($_POST['callback']) ? 'Дзвонити' : 'Недзвонити';
    $payment = $_POST['payment'];
    $totalSum = $_POST['totalSum'];
    $date = $_POST['date'];

    $client->execute([
        'name' => $name,
        'phone' => $phone,
        'address' => $address,
        'comment' => $comment,
        'delivery' => $delivery,
        'callback' => $callback,
        'payment' => $payment,
        'totalSum' => $totalSum,
        'date' => $date
    ]);
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}
