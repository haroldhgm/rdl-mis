<?php
require '../config/db.php';
include '../includes/session.php';
include '../includes/header.php';

$stmt = $conn->query("SELECT * FROM applications");
$apps = $stmt->fetchAll();
?>

<div class="container">
    <h2>All Job Applications</h2>
    <table border="1" cellpadding="10">
        <tr><th>ID</th><th>Job ID</th><th>Applicant ID</th><th>Status</th></tr>
        <?php foreach ($apps as $app): ?>
            <tr>
                <td><?= $app['id']; ?></td>
                <td><?= $app['job_id']; ?></td>
                <td><?= $app['user_id']; ?></td>
                <td><?= $app['status']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php include '../includes/footer.php'; ?>
