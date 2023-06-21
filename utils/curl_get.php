<?php
function curl_get($url, array $headers = array(), array $get = array(), array $options = array()){
  $defaults = array(
    CURLOPT_URL => $url. (strpos($url, '?') === FALSE ? '?' : ''). http_build_query($get),
    CURLOPT_HEADER => 0,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_TIMEOUT => 4
  );

  $ch = curl_init();
  curl_setopt_array($ch, ($options + $defaults));
  if( ! $result = curl_exec($ch)){
    trigger_error(curl_error($ch));
  }
  curl_close($ch);
  return $result;
}
?>
