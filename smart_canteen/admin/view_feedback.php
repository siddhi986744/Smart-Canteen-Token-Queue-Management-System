<?php
// ⚠️ session_start() yaha mat likhna
include "../db.php";

// Admin check
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: ../login.php");
    exit();
}

// Fetch feedback data
$result = mysqli_query($conn,
    "SELECT f.*, u.name
     FROM feedback f
     JOIN users u ON f.user_id = u.user_id
     ORDER BY f.created_at DESC");
?>

<?php include "layout.php"; ?>

<div class="container mt-4">

    <h3 class="fw-bold mb-4 text-center">
        📋 Student Food Feedback
    </h3>

    <div class="row">

        <?php if(mysqli_num_rows($result) > 0){ ?>

            <?php while($row = mysqli_fetch_assoc($result)){ ?>

                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm border-0 p-3 h-100">

                        <h6 class="fw-bold mb-1">
                            <?= $row['name']; ?>
                        </h6>

                        <p class="mb-1">
                            <strong>Food:</strong> <?= $row['food_name']; ?>
                        </p>

                        <p class="mb-1 text-warning">
                            <?= str_repeat("★", $row['rating']); ?>
                        </p>

                        <p class="text-muted small">
                            <?= $row['comment']; ?>
                        </p>

                        <small class="text-secondary">
                            <?= $row['created_at']; ?>
                        </small>

                    </div>
                </div>

            <?php } ?>

        <?php } else { ?>

            <div class="col-12 text-center text-muted">
                No feedback available yet.
            </div>

        <?php } ?>

    </div>

</div>
