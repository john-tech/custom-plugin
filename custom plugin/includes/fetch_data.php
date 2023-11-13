<?php
require_once('../../../../wp-load.php');
global $wpdb;
$add_api = $wpdb->prefix . "schedule_list";

$check = "SELECT * FROM $add_api";
$result = $wpdb->get_results($check);
$total_result_rows = $wpdb->num_rows;
if (isset($_POST['submit-qr'])) {
  $title=$_POST['title'];
  $description=$_POST['description'];
  $start_datetime=$_POST['start_datetime'];
  $end_datetime=$_POST['end_datetime']; 
 $id = $_POST['id'];
    
 if (empty($id)) {
     echo   $insert = $wpdb->prepare("INSERT into $add_api (`title`,`description`,`start_datetime`,`end_datetime`) VALUES ('$title','$description','$start_datetime','$end_datetime')");
     $ins = $wpdb->query($insert);
} else {
    echo   $sql = "UPDATE $add_api  SET  `schedule_list` set `title` = '{$title}', `description` = '{$description}', `start_datetime` = '{$start_datetime}', `end_datetime` = '{$end_datetime}' where `id` = '{$id}'";
        $update = $wpdb->query($sql);
    }
}
    
    ?> 