<?php
    include "header.php";
    include "banner.php";
    include "navbar.php";
    include "conn.php";
?>
<div class="container mt-5">
<table class="table table-primary table-hover table table-striped table-bordered table-hover table-success" style="font-family:cursive;">
    <tr>
      <th>CODE</th>
      <th>NAME</th>
      <th>ID ZONE</th>
    </tr>

  <!-- LOOP FOR SELECT DATA FROM DATABASE -->
<?php
$sql = "SELECT * FROM province";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
      <td><?php  echo $row["PROVINCE_CODE"] ?></td>
      <td><?php  echo $row["PROVINCE_NAME"] ?></td>
      <td><?php  echo $row["zone_id"] ?></td>

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


</body>

<?php
    include "footer.php";
?>

</html>