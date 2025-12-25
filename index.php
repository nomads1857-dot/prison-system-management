<?php
session_start();
include('dbconnect.php');

// Force clear session to always show login page (temporary for testing - remove if you want persistent login)
session_unset();
session_destroy();
session_start();

if (isset($_SESSION['staffid'])) {
    if ($_SESSION['role'] == 'Admin') {
        header("Location: admin/");
        exit();
    } elseif ($_SESSION['role'] == 'CID') {
        header("Location: cid/");
        exit();
    } elseif ($_SESSION['role'] == 'NCO') {
        header("Location: officer/");
        exit();
    }
}
?>

<?php include('header.php'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Prison Management System</h4>
                </div>
                <div class="card-body">
                    <h5 class="text-center mb-4">Admin Login</h5>

                    <?php if (isset($_SESSION['error'])): ?>
                        <div class="alert alert-danger text-center">
                            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                        </div>
                    <?php endif; ?>

                    <form action="logincheck.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="login" class="btn btn-primary">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('scripts.php'); ?>