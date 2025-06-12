<?php
require '../config/db.php';
include '../includes/session.php';
include '../includes/header.php';
?>

<div class="container">
    <h2>Employer Dashboard</h2>
    <ul>
        <li><a href="post_vacancy.php">Post a Vacancy</a></li>
        <li><a href="view_applicants.php">View Applicants</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>

<?php include '../includes/footer.php'; ?>
