<?php
require '../config/db.php';
include '../includes/session.php';
include '../includes/header.php';

$employer_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT * FROM applications WHERE job_id IN (SELECT id FROM jobs WHERE employer_id = ?)");
$stmt->execute([$employer_id]);
$apps = $stmt->fetchAll();
?>

<div class="container">
    <h2>Applicants</h2>
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
