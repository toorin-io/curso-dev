<?php
include("utils/ac-service.php");

$firstName = isset($_GET['fname'])?$_GET['fname'] : null;
$lastName = isset($_GET['lname'])?$_GET['lname'] : null;
$email = isset($_GET['email'])?$_GET['email'] : null;

$contact_resp = create_contact($email, $firstName, $lastName);

echo 'contact: '.json_encode($contact_resp, false);
?>
