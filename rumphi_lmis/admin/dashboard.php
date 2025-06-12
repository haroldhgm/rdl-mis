<?php
require '../config/db.php';
include '../includes/session.php';
include '../includes/header.php';
?>

<div class="container">
    <h2>Admin Dashboard</h2>
    <ul>
        <li><a href="manage_users.php">Manage Users</a></li>
        <li><a href="manage_employers.php">Manage Employers</a></li>
        <li><a href="manage_reports.php">View Reports</a></li>
        <li><a href="view_applications.php">View Job Applications</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>

<?php include '../includes/footer.php'; ?>
