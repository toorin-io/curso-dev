<?php
$ac_base_url = "https://conquistandosuavaga.api-us1.com/api/3";
$ac_headers = array(
   "Api-Token: fde6f23f75529695d277c0bd676254ebe20301b737888a89f09c29b0698ab846af389ed7",
   "Accept: application/json",
   "Content-Type: application/json",
);

include('curl_get.php');
include('curl_post.php');
include('curl_put.php');
include('create_contact.php');
include('update_contact.php');
include('add_tag.php');
?>
