<?php
require '../config/db.php';
include '../includes/session.php';
include '../includes/header.php';
?>

<div class="container">
    <h2>Job Seeker Dashboard</h2>
    <ul>
        <li><a href="view_jobs.php">View Jobs</a></li>
        <li><a href="apply_job.php">Apply for Job</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>

<?php include '../includes/footer.php'; ?>
