<!DOCTYPE html>
<html>

<head>
</head>


<?php $filename = "websurfer.db";

$dbv = new SQLite3($filename);
$idarray = [];
$urlarray = [];
$categoryarray = [];

$sql = "SELECT COUNT(*) FROM websites";
$qry = mysqli_query($con, $sql);
$totalCount = mysqli_fetch_assoc($qry)['COUNT(*)'];

$personalCount = mysqli_query($con, "SELECT COUNT(category) FROM websites WHERE category='personal'");
echo "<strong>Personal:</strong>" . $personalCount . "<br><br>";

$healingCount = $dbv->querySingle("SELECT COUNT(category) FROM websites WHERE category='healing'");
echo "<strong>Healing:</strong>" . $healingCount . "<br><br>";

$usefulCount = $dbv->querySingle("SELECT COUNT(category) FROM websites WHERE category='useful'");
echo "<strong>Useful:</strong>" . $usefulCount . "<br><br>";

$funCount = $dbv->querySingle("SELECT COUNT(category) FROM websites WHERE category='fun'");
echo "<strong>Fun:</strong>" . $funCount . "<br><br>";

$seriousCount = $dbv->querySingle("SELECT COUNT(category) FROM websites WHERE category='serious'");
echo "<strong>Serious:</strong>" . $seriousCount . "<br><br>";

$socialCount = $dbv->querySingle("SELECT COUNT(category) FROM websites WHERE category='social'");
echo "<strong>Social:</strong>" . $socialCount . "<br><br>";

$totalCount = $dbv->querySingle("SELECT COUNT(*) FROM websites");
echo "<strong>Total:</strong>" . $totalCount . "<br><br>";

echo "<div id='commentContain'>\n";
$results = $dbv->query("SELECT DISTINCT * FROM websites");
while ($row = $results->fetchArray()) {
    echo "<br><br><div class='row'><div class='item'><strong>ID:</strong>" . $row['id'] . "<br><strong>URL: </strong>" .
        $row['url'] . "<br><strong>categoryegory:</strong>" . $row['category'] . "</div></div>";
}
while ($row = $results->fetchArray()) {
    $idarray[] = $row['id'];
    $urlarray[] = $row['url'];
    $categoryarray[] = $row['category'];
}

print_r(json_encode($idarray));
echo "<br><br>";
print_r(json_encode($urlarray));
echo "<br><br>";
print_r(json_encode($categoryarray));

echo "</div>\n";
echo "</body>\n";
echo "</html>";
echo "<style>.commentContain {display: flex;flex-direction: column-reverse;}</style>";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<script>
var encodeidArray = <?php echo json_encode($idarray); ?>;
var encodeurlArray = <?php echo json_encode($urlarray); ?>;
console.log(encodeidArray);
console.log("line break");
console.log(encodeurlArray);
console.log(encodeidArray[1]);
</script>