<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome to the Dashboard</h2>
    <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
    <a href="index.php">Logout</a>

    <!-- Add download button -->
    <button onclick="downloadFile()">Download File</button>

    <script>
        function downloadFile() {
            // Replace the file location with the actual file path
            var fileUrl = 'http://127.0.0.1/test';

            // Create an anchor element
            var link = document.createElement('a');
            link.href = fileUrl;

            // Set the download attribute and file name
            link.download = 'test';

            // Trigger the click event to start downloading
            document.body.appendChild(link);
            link.click();

            // Clean up
            document.body.removeChild(link);docke
        }
    </script>
</body>
</html>
