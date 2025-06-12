<?php
require '../config/db.php';
include '../includes/session.php';
include '../includes/header.php';

$stmt = $conn->query("SELECT * FROM jobs");
$jobs = $stmt->fetchAll();
?>

<div class="container">
    <h2>Available Jobs</h2>
    <table border="1" cellpadding="10">
        <tr><th>ID</th><th>Title</th><th>Description</th></tr>
        <?php foreach ($jobs as $job): ?>
            <tr>
                <td><?= $job['id']; ?></td>
                <td><?= $job['title']; ?></td>
                <td><?= $job['description']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php include '../includes/footer.php'; ?>
