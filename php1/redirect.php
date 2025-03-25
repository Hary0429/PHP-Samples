<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    $gender = htmlspecialchars($_POST['gender']);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $address = htmlspecialchars($_POST['address']);
    $contactnumber = filter_input(INPUT_POST, 'contactnumber', FILTER_SANITIZE_NUMBER_INT);
    
    if (!$age || !$email || empty($gender) || empty($address) || empty($contactnumber)) {
        echo "<script>alert('Invalid input! Please check your details.'); window.history.back();</script>";
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Submitted Data</h2>
    <table class="table table-bordered">
        <tr><td><strong>Age:</strong></td><td><?php echo $age; ?></td></tr>
        <tr><td><strong>Gender:</strong></td><td><?php echo $gender; ?></td></tr>
        <tr><td><strong>Email:</strong></td><td><?php echo $email; ?></td></tr>
        <tr><td><strong>Address:</strong></td><td><?php echo $address; ?></td></tr>
        <tr><td><strong>Contact Number:</strong></td><td><?php echo $contactnumber; ?></td></tr>
    </table>
    <a href="./" class="btn btn-primary">Return to Main Form</a>
</body>
</html>
