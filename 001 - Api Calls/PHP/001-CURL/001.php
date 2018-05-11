<?php
    // Example comes from:
    // https://developer.nytimes.com/article_search_v2.json#/Console/GET/articlesearch.json
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $query = array(
      "api-key" => "<--- API KEY HERE --->",
      "q" => "Grand",
      "begin_date" => "20120711",
      "end_date" => "20180510"
    );
    curl_setopt($curl, CURLOPT_URL,
      "https://api.nytimes.com/svc/search/v2/articlesearch.json" . "?" . http_build_query($query)
    );
    $result = json_decode(curl_exec($curl));
    echo json_encode($result);
?>
