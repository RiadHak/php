<?php
$current_timestamp = date("H:i");
echo "Het is NU: ".$current_timestamp;

$val_key = array(
    'fotos/morning.png'  => [12,6],
    'fotos/afternoon.png' => [6,18],
    'fotos/evening.png' => [18,00],
    'fotos/night.png' =>[00,6]
);

foreach($val_key as $key => $value ){
    if($current_timestamp < $value[0] || $current_timestamp >= $value[1]  ){
        echo '<style> body { background-image: url(' .$key. ')}; </style>';
        break;

    }
}






























// for($i = 0; $i < count($fotos_dir); $i++){
//     if($current_timestamp > $tijden[$i] || $current_timestamp >= $tijden[$i]  ){
//         echo 'tessssst';
//         // echo '<style> body { background-image: url(' .$fotos_dir[$i]. ')}; </style>';
//     }
//     $i++;
// }





// if($current_timestamp > 12 || $current_timestamp >= 6  ){   
//     $background_image= 'fotos/morning.png';
//     echo '<style> body { background-image: url(' .$background_image. ')}; </style>';
// }

// elseif($current_timestamp < 18 || $current_timestamp >= 12  ){
//     $background_image= 'fotos/morning.png';
//     echo '<style> body { background-image: url(' .$background_image. ')}; </style>';
// }

// elseif($current_timestamp < 18 || $current_timestamp >= 12  ){
//     $background_image= 'fotos/morning.png';
//     echo '<style> body { background-image: url(' .$background_image. ')}; </style>';
// }
// elseif($current_timestamp < 18 || $current_timestamp >= 12  ){
//     $background_image= 'fotos/morning.png';
//     echo '<style> body { background-image: url(' .$background_image. ')}; </style>';
// }
?>