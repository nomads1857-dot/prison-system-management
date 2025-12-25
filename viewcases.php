<?php include('header.php'); ?>
<?php include('dbconnect.php'); ?>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white text-center">
            <h4>View Cases</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Prisoner ID</th>
                        <th>State</th> <!-- Updated -->
                        <th>LGA</th> <!-- Updated -->
                        <th>Complaint Type</th>
                        <th>Description</th>
                        <th>Submitted At</th>
                        <th>Supporting Document</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM complaints ORDER BY submitted_at DESC";
                    $result = mysqli_query($dbcon, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['prisoner_id']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['region']) . "</td>"; // This now holds State
                            echo "<td>" . htmlspecialchars($row['district']) . "</td>"; // This now holds LGA
                            echo "<td>" . htmlspecialchars($row['complaint_type']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['description']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['submitted_at']) . "</td>";

                            if (!empty($row['supporting_doc'])) {
                                $file_path = $row['supporting_doc'];
                                echo "<td><a href='" . htmlspecialchars($file_path) . "' target='_blank' class='btn btn-sm btn-info'>View Document</a></td>";
                            } else {
                                echo "<td>No document</td>";
                            }

                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8' class='text-center'>No cases found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>

            <div class="text-center mt-4">
                <a href="admin/" class="btn btn-primary btn-lg">Back to Dashboard</a>
            </div>
        </div>
    </div>
</div>

<?php include('scripts.php'); ?>