<?php 
  $access_token = 'Ph9Iw2Y6PiN0BrG98j8gxgELX8Zz1+DwFV1X9yubXB7H62CiOtFDydszhJh5jR6wP5UyUabKOdNNz6vL4GDQ9QdI0ssu9FnObIMDnDBt/x65rcsQbdWx/UXRpyrxla3+maixKZGebebuDjB+/ZW0V1GUYhWQfeY8sLGRXgo3xvw=';
  $url = 'https://api.line.me/v2/oauth/verify';
  $headers = array('Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;
