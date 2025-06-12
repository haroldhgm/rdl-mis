<?php
require '../config/db.php';
include '../includes/session.php';
include '../includes/header.php';

$stmt = $conn->query("SELECT * FROM users WHERE role='employer'");
$employers = $stmt->fetchAll();
?>

<div class="container">
    <h2>Manage Employers</h2>
    <table border="1" cellpadding="10">
        <tr><th>ID</th><th>Name</th><th>Email</th></tr>
        <?php foreach ($employers as $employer): ?>
            <tr>
                <td><?= $employer['id']; ?></td>
                <td><?= $employer['name']; ?></td>
                <td><?= $employer['email']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php include '../includes/footer.php'; ?>
