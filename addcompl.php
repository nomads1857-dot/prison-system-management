<?php include('header.php'); ?>
<?php include('dbconnect.php'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Add New Case</h4>
                </div>
                <div class="card-body">
                    <form action="addcomplaint.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Prisoner ID</label>
                                    <input type="text" name="prisoner_id" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">State</label>
                                    <select class="form-control" name="state" id="state" required onchange="print_lga('lga', this.value);">
                                        <option value="">Select State</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Local Government Area (LGA)</label>
                                    <select class="form-control" name="lga" id="lga" required>
                                        <option value="">Select LGA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Complaint Type</label>
                                    <input type="text" name="complaint_type" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="5" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Supporting Document (Image/PDF)</label>
                            <input type="file" name="supporting_doc" class="form-control" accept="image/*,.pdf">
                            <small class="text-muted">Optional: Upload evidence or photo</small>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">Submit Case</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <a href="admin/" class="btn btn-primary">Back to Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('scripts.php'); ?>

<script type="text/javascript" src="js/regions.js"></script>
<script type="text/javascript">
    print_state("state");
</script>