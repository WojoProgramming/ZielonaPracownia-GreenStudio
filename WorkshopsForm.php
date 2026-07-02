<?php
include("connect_db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"] ?? '';
    $surname = $_POST["surname"] ?? '';
    $email = $_POST["email"] ?? '';
    $people = $_POST["people"] ?? '';
    $workshop = $_POST["workshop"] ?? '';

    if (empty($firstname) || empty($surname) || empty($email) || empty($people) || empty($workshop)) {
        header("Location: Workshops.php?status=missing");
        exit();
    } else {
        $sql = "INSERT INTO workshops_form (firstname, surname, email, peoplenumber_id, workshop_id) 
                VALUES ('$firstname', '$surname', '$email', '$people', '$workshop')";

        try {
            $conn->query($sql);
            header("Location: Workshops.php?status=success");
            exit();
        } catch (mysqli_sql_exception $e) {
            header("Location: Workshops.php?status=error&msg=" . urlencode($e->getMessage()));
            exit();
        }
    }
}

$conn->close();
?>