<?php

include "config.php";

$stmt = $con->prepare("SELECT * FROM websites");
$stmt->execute();

$result = $stmt->get_result();

$stmt->close();

$sql = "SELECT COUNT(*) FROM websites";
$qry = mysqli_query($con, $sql);
$totalCount = mysqli_fetch_assoc($qry)['COUNT(*)'];

$idarray = [];
$urlarray = [];
$catarray = [];

while ($row = $result->fetch_assoc()) {
    $idarray[] = $row['id'];
    $urlarray[] = $row['url'];
    $catarray[] = $row['category'];
}

?>

<script>
var idArr = <?php echo json_encode($idarray); ?>;
var urlArr = <?php echo json_encode($urlarray); ?>;
var catArr = <?php echo json_encode($catarray); ?>;
</script>

<?php
include "template.php";
?>