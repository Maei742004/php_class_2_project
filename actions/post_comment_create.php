<?php 
// $data = [
//  'comment' => $_POST['comment'],
//  'post_id' => $_POST['post_id'],
//  'user_id' => $_POST['user_id'],
// ];
// echo "<pre>";
// print_r($data);
// echo "</pre>";
// die();
include("../config/db_con.php");
// add data to database
if(isset($_POST['post_comment'])) 
 {
  $user_id = $_POST['user_id'];
  $post_id = $_POST['post_id'];
  $comment = $_POST['comment'];
  $created_at = date("Y-m-d H:i:s");

  // echo "<pre>";
  // print_r($_POST);
  // echo "</pre>";
  // die();
  $link->query("INSERT INTO comments ( user_id,post_id, comment, created_at) VALUES ( '$user_id','$post_id', '$comment', '$created_at')");
  header("location: ../post_detail.php?id=$post_id");
 }
?>