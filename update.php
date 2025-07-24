<?php
include 'db.php';

$id = $_GET["id"];
$user = $conn->query("SELECT * FROM users WHERE id = $id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $stmt = $conn->prepare("UPDATE users SET name=?, email=? WHERE id=?");
    $stmt->bind_param("ssi", $name, $email, $id);
    $stmt->execute();

    header("Location: read.php");
    exit;
}
?>

<form method="post">
    <input name="name" value="<?= $user['name'] ?>" required><br>
    <input name="email" value="<?= $user['email'] ?>" required><br>
    <button type="submit">Update User</button>
</form>