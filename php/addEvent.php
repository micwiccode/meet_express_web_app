<?php
include 'env.local.php';
$inputs = [
    'title' => $_POST['event_name'],
    'date' => $_POST['event_date'],
    'place' => $_POST['event_city'].' '.$_POST['event_street_name'].' '.$_POST['event_street_number'],
    'membersActual' => 1,
    'membersMax' => $_POST['event_number_of_members']
];
var_dump($inputs);
try {
    $pdo = new PDO('mysql:host=' . getenv('DB_HOST') . ';dbname=' . getenv("DB_NAME"), getenv("DB_USERNAME"), getenv("DB_PASSWORD"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "INSERT INTO events(title, date, place, membersActual, membersMax) values (:title, :date, :place, :membersActual, :membersMax)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($inputs);

} catch (PDOException $e) {
    echo $e->getMessage();
}

header('Location: ../findevents.php');
