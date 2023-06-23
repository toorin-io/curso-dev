<?php
include("utils/ac-service.php");
include("utils/curl_get.php");

$firstName = isset($_GET['fname'])?$_GET['fname'] : null;
$lastName = isset($_GET['lname'])?$_GET['lname'] : null;
$email = isset($_GET['email'])?$_GET['email'] : null;
$utm_source = isset($_GET['utm_source'])?$_GET['utm_source'] : null;
$utm_source_id = 31;
$utm_medium = isset($_GET['utm_medium'])?$_GET['utm_medium'] : null;
$utm_medium_id = 32;
$utm_campaign = isset($_GET['utm_campaign'])?$_GET['utm_campaign'] : null;
$utm_campaign_id = 33;
$utm_term = isset($_GET['utm_term'])?$_GET['utm_term'] : null;
$utm_term_id = 34;
$utm_content = isset($_GET['utm_content'])?$_GET['utm_content'] : null;
$utm_content_id = 35;

$fieldValues = array(
  (object) array(
    "field" => $utm_source_id,
    "value" => $utm_source,
  ),
  (object) array(
    "field" => $utm_medium_id,
    "value" => $utm_medium,
  ),
  (object) array(
    "field" => $utm_campaign_id,
    "value" => $utm_campaign,
  ),
  (object) array(
    "field" => $utm_term_id,
    "value" => $utm_term,
  ),
  (object) array(
    "field" => $utm_content_id,
    "value" => $utm_content,
  ),
);

$contact_resp = curl_get($ac_base_url.'/contacts?email='.$email, $ac_headers);
$data = json_decode($contact_resp, false);
$resp = update_contact($data->contacts[0]->id, $firstName, $lastName, $fieldValues);

if($resp['code'] < 400){
  echo json_encode($resp, false);
} else {
  echo 'code: '.$resp['code'];
}
?>
