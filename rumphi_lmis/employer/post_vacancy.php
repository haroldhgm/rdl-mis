<?php
require '../config/db.php';
include '../includes/session.php';
include '../includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = sanitize($_POST['title']);
    $description = sanitize($_POST['description']);
    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("INSERT INTO jobs (employer_id, title, description) VALUES (?, ?, ?)");
    $stmt->execute([$user_id, $title, $description]);

    echo "<p style='color:green;'>Job posted successfully.</p>";
}
?>

<div class="container">
    <h2>Post a Job</h2>
    <form method="POST">
        <input type="text" name="title" placeholder="Job Title" required><br><br>
        <textarea name="description" placeholder="Job Description" required></textarea><br><br>
        <button type="submit">Post Job</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>
