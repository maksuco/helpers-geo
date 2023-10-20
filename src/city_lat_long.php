<?php

  function getGeoData($city_geo_id) {

  }

  function storeGeoData() {
    $file = fopen('src/data.csv', 'r');
    while (($data = fgetcsv($file)) !== false) {
        $results[] = $data;
    }
    $data = [

    ];
    file_put_contents('src/cities.php', $results);
    fclose($file);
  }