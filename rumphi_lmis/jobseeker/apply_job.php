<?php
require '../config/db.php';
include '../includes/session.php';
include '../includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_id = intval($_POST['job_id']);
    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("INSERT INTO applications (job_id, user_id, status) VALUES (?, ?, 'pending')");
    $stmt->execute([$job_id, $user_id]);

    echo "<p style='color:green;'>Applied successfully.</p>";
}
?>

<div class="container">
    <h2>Apply for a Job</h2>
    <form method="POST">
        <input type="number" name="job_id" placeholder="Job ID" required><br><br>
        <button type="submit">Apply</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>
