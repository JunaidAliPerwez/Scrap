<?php
  
//Intialize curl
// $ch = curl_init();
// // URL for Scraping
// curl_setopt($ch, CURLOPT_URL,'https://vincheck.info/check/report-summary.php?vin=1GNEK13Z84J196759');
// // Return Transfer True
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $output = curl_exec($ch);
// // Closing cURL
// curl_close($ch);
// print_r($output);


function get_content($url) {
    $options = array(
            CURLOPT_RETURNTRANSFER => 1, 
            CURLOPT_USERAGENT      => "Mozilla/5.0",         
    );
    $ch      = curl_init( $url );
    curl_setopt_array( $ch, $options );
    $htmlContent = curl_exec( $ch );
    curl_close( $ch );
    return $htmlContent;
}
$link = "https://vincheck.info/check/report-summary.php?vin=1GNEK13Z84J196759"; 
$response = get_content($link);
echo htmlspecialchars($response);

  
// Checking for images 
// preg_match_all(
// '!https://media.geeksforgeeks.org/wp-content/uploads/(.*)/(.*).png!',
//     $output, $data
// );
  
// foreach ($data[0] as $list) {
//     echo "<img src='$list'/>";
// }
  
//echo '</body>';
  
?>