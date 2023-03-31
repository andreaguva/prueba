<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $url = 'https://pixabay.com/api/';
    $key = '13119377-fc7e10c6305a7de49da6ecb25';

    $query = array(
        'key' => $key,
        'per_page' => 10
    );

    if (isset($_GET['q'])) {
        $query['q'] = $_GET['q'];
    }

    if (isset($_GET['category'])) {
        $query['category'] = $_GET['category'];
    }

    $url .= '?' . http_build_query($query);

    $response = file_get_contents($url);
    echo $response;
}
?>