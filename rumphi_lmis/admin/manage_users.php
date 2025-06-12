<?php
require '../config/db.php';
include '../includes/session.php';
include '../includes/header.php';

$stmt = $conn->query("SELECT * FROM users WHERE role='jobseeker'");
$users = $stmt->fetchAll();
?>

<div class="container">
    <h2>Manage Job Seekers</h2>
    <table border="1" cellpadding="10">
        <tr><th>ID</th><th>Name</th><th>Email</th></tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['name']; ?></td>
                <td><?= $user['email']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php include '../includes/footer.php'; ?>
