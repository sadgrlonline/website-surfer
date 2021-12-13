
URL is <?php echo $_POST["url"]; ?><br>

<?php  
        function clean_data($data) {
            /* trim whitespace */
            $data = trim($data);
            $data = htmlspecialchars($data);
            return $data;
        } 
try {
   $db = new PDO('sqlite:websurfer.db');
  
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}   catch (Exception $e) {
    echo "Unable to connect";
    echo $e->getMessage();
    exit;
}



echo "Connected to the database";

if (isset($_POST['url'])) {
    $url = $_POST['url'];
}
if (isset($_POST['cat'])) {
    $cat = $_POST['cat'];
}

$db->exec("INSERT INTO websurf_table (url, cat) VALUES ('$url', '$cat');");

?>