<?php
include('curl_put.php');

function update_contact($contact, $fname, $lname = '', $fieldValues = array()){
   global $ac_base_url, $ac_headers;
   $data = array(
      "contact" => array(
         "firstName" => $fname,
         "lastName" => $lname,
         "fieldValues" => $fieldValues,
      ),
   );

   $resp = curl_put($ac_base_url.'/contacts/'.$contact, $ac_headers, $data);

   return $resp;
}
?>
