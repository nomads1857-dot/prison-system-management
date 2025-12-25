<?php
include('dbconnect.php');

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prisoner_id = mysqli_real_escape_string($dbcon, $_POST['prisoner_id']);
    $state = mysqli_real_escape_string($dbcon, $_POST['state']);
    $lga = mysqli_real_escape_string($dbcon, $_POST['lga']);
    $complaint_type = mysqli_real_escape_string($dbcon, $_POST['complaint_type']);
    $description = mysqli_real_escape_string($dbcon, $_POST['description']);

    $supporting_doc = "";

    if (isset($_FILES['supporting_doc']) && $_FILES['supporting_doc']['error'] == 0) {
        $upload_dir = "uploads/";
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }
        $file_name = time() . "_" . basename($_FILES['supporting_doc']['name']);
        $target_path = $upload_dir . $file_name;
        if (move_uploaded_file($_FILES['supporting_doc']['tmp_name'], $target_path)) {
            $supporting_doc = $target_path;
        }
    }

    $sql = "INSERT INTO complaints (prisoner_id, region, district, complaint_type, description, supporting_doc, submitted_at) 
            VALUES ('$prisoner_id', '$state', '$lga', '$complaint_type', '$description', '$supporting_doc', NOW())";

    if (mysqli_query($dbcon, $sql)) {
        $message = "<div class='alert alert-success text-center'>
                        <h4>Case added successfully!</h4>
                        <a href='admin/' class='btn btn-primary btn-lg mt-3'>Back to Dashboard</a>
                    </div>";
    } else {
        $message = "<div class='alert alert-danger text-center'>Error: " . mysqli_error($dbcon) . "</div>";
    }
}
?>

<?php include('header.php'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body text-center">
                    <?php echo $message; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('scripts.php'); ?>