<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=clients", 'vasylbon', 'vasbondesign');

    $query = "INSERT INTO questions VALUES (NULL, :name, :phone, :email, :question)";

    $quest = $conn->prepare($query);

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $question = $_POST['question'];

    $quest->execute([
        'name' => $name,
        'phone' => $phone,
        'email' => $email,
        'question' => $question,
    ]);
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}
