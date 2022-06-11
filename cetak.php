<?php 
require 'vendor/autoload.php';

require 'functions.php';
$hospital = query ("SELECT * FROM hospital_info");
// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$options = new Options();
$options->set('isRemoteEnabled',true);      
$dompdf = new Dompdf( $options );

$html = '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Bootstrap CSS -->
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous"
  />
  
  <title>playlist hospital</title>
</head>
<body>
<h2 class="text-center">The emergency hospital</h2>
<table class="table">
<thead>
  <tr>
  <th scope="col">#</th>
  <th scope="col">Gambar</th>
  <th scope="col">Ambulance</th>
  <th scope="col">Domisili</th>
  <th scope="col">Tempat</th>
  </tr>';

  $i = 1;
  foreach ($hospital as $hl) {
    $html .= '<tr>
      <td class="align-middle">' . $i++ . '</td>    
      <td class="align-middle"><img src="http://localhost/pw_a_213040028/tubes/img/'. $hl["Gambar"] .'"
      width="50"></td>
      <td class="align-middle">' . $hl["Ambulance"] .'</td>
      <td class="align-middle">' . $hl["Domisili"] .'</td>
      <td class="align-middle">' . $hl["Tempat"] .'</td>
    </tr>';
  }

$html .= '</table>
</body>
</html>';



$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>