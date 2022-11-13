<?php include './header.php'; 


$text = "Hello Pakistan. You are loss this match.";
  $arrayText = (explode(" ",$text));
  $length = count($arrayText);
  for ( $i = 0; $i < $length; $i++) {
    echo $arrayText[$i] . "<br/>";
  }

    $age = [
      'Abdullah'   => 33,
      'Mamun'      => 42,
      'Khondokar'  => 45,
      'Biplop'     => 47,
      'Shikandar'  => 36,
      'Fokhrul'    => 30
    ];
    
    foreach ($age as $key => $value) {
      echo 'Name is ' . $key . ' Age is ' . $value . '<br/>';
    }





?>



<?php include './footer.php'; ?>
