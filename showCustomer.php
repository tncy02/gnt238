<?php
    include "header.php";
    include "banner.php";
    include "navbar.php";
    include "conn.php";
?>

<div class="container mt-5">
    <table class="table table-danger table-hover table table-striped table-bordered table-hover table-success" style="font-family:cursive;">
        <tr>
        <th>Customer ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Position</th>
        <th>Salary</th>
        </tr>

    <!-- LOOP FOR SELECT DATA FROM DATABASE -->
    <?php
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    ?>

    <tr>
        <td><?php  echo $row["cus_id"] ?></td>
        <td><?php  echo $row["cus_name"] ?></td>
        <td><?php  echo $row["cus_address"] ?></td>
        <td><?php  echo $row["cus_position"] ?></td>
        <td><?php  echo $row["cus_salary"] ?></td>
        </tr>

    <?php
    }
    } else {
    echo "0 results";
    }

    mysqli_close($conn);
    ?>
    </table>
</div>