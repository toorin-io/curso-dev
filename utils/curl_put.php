<?php
function curl_put($url, array $headers = array(), array $post = NULL){
  $defaults = array(
      CURLOPT_CUSTOMREQUEST => "PUT",
      CURLOPT_HEADER => 0,
      CURLOPT_HTTPHEADER => $headers,
      CURLOPT_URL => $url,
      CURLOPT_FRESH_CONNECT => 1,
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_FORBID_REUSE => 1,
      CURLOPT_TIMEOUT => 4,
      CURLOPT_POSTFIELDS => json_encode($post),
  );
  $ch = curl_init();
  curl_setopt_array($ch, $defaults);
  if( ! $result = curl_exec($ch)){
    trigger_error(curl_error($ch));
  }
  $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);

  return array(
    "data" => $result,
    "code" => $httpCode,
  );
}
?>