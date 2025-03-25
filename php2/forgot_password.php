<?php include './layout/head.php'; ?>
<h1>Forgot Password</h1>
<form action="forgot_password_process.php" method="POST" class="w-50">
    <div class="mb-3">
        <label class="form-label">Enter your email:</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Reset Password</button>
</form>
<?php include './layout/foot.php'; ?>
