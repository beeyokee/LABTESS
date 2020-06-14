<?php 
  $access_token = 'w3VOshqIzVxUguZeL7qYVQGGktHGE8qHRHlcX1DS88jCiNe9LYVSdhNd3M4BGZ38KaD0cE7rCa/d0Vb5ic7aVJ/zhhVHJi28qKDp3CPfmcv1JiQBDk9J8YzbsH1ZfTrDhlOfCxY1a7mkJSBta2vunwdB04t89/1O/w1cDnyilFU=';
  $url = 'https://api.line.me/v1/oauth/verify';
  $headers = array('Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;
