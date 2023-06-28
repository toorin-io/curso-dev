<?php
function create_contact($email, $fname, $lname){
   global $ac_base_url, $ac_headers;
   $data = array(
      "contact" => array(
         "email" => $email,
         "firstName" => $fname,
         "lastName" => $lname,
      ),
   );

   $resp = curl_post($ac_base_url.'/contacts', $ac_headers, $data);

   return $resp;
}
?>
