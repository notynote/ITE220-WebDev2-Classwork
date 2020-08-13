<?php 

$seatsPrice = array(
    'A1' => 3000,
    'A2' => 3000,
    'A3' => 3000,
    'B1' => 2000,
    'B2' => 2000,
    'B3' => 2000,
    'C1' => 1000,
    'C2' => 1000,
    'C3' => 1000
);

$totalPrice = 0;
$noSeat = 0;

foreach($seatsPrice as $seat => $price) {
    

    if (isset($_POST[$seat])){
        echo $seat.": ".$price."<br>";
        $totalPrice += $price;
        $noSeat++;
    }
   
}

if ($noSeat === 0) {
    echo "<span style='color:#FF0000;'>Please select some ticket</span>";
} else {
    echo "Number of seats: ".$noSeat."<br>Total Price: ".$totalPrice;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>