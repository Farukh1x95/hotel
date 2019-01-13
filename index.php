<?php

include("header.php");
include("connection.php");
$sql = "SELECT * FROM hoteltable";
$result = mysqli_query($conn,$sql);
?>
<div class="containter d-flex flex-row justify-content-around">
    <div class="row">
        <?php
    $row = mysqli_fetch_assoc($result);
  foreach($result as $row){ ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">
                        <a href="#">
                            <?php echo $row['hotel']?></a>
                    </h3>
                    <p class="card-text">
                        <?php echo $row['location'] ?>
                    </p>
                </div>
            </div>
        </div>
        <?php } ?>
<?php
include("footer.php");
?>
