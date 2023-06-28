<?php
function add_tag($contact, $tag){
   global $ac_base_url, $ac_headers;
   $data = array(
      "contactTag" => array(
        "contact" => $contact,
        "tag" => $tag,
      ),
   );

   $resp = curl_post($ac_base_url.'/contactTags', $ac_headers, $data);

   return $resp;
}
?>
