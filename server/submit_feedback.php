<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=clients", 'vasylbon', 'vasbondesign');

    $query = "INSERT INTO feedback VALUES (NULL, :name, :phone, :address, :gender, :comment, :rate, :date)";

    $feedback = $conn->prepare($query);

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $comment = $_POST['comment'];
    $rate = $_POST['rate'];
    $date = $_POST['date'];

    $feedback->execute([
        'name' => $name,
        'phone' => $phone,
        'address' => $address,
        'gender' => $gender,
        'comment' => $comment,
        'rate' => $rate,
        'date' => $date
    ]);
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}
