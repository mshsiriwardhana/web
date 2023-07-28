<?php 
  //Q1
  $x = 6;
  $y = 4;

  echo 'sum: '.($x+$y).'<br>';
  echo 'difference: '.($x-$y).'<br>';
  echo 'produce: '.($x*$y).'<br>';
  echo 'division: '.$x/$y.'<br>';
  
  //Q2
  echo '<br>';
  for($i=5; $i<=15; $i++){
    echo $i.'<br>';
  }
  echo '<br>';

  //Q3
  function billValue($unit){
    if($unit>0 && $unit<=50){
      $bill = $unit*3.5;
      echo 'Bill value: Rs.'.$bill;
    }
    else if($unit>50 && $unit<=100){
      $bill = $unit*4.0;
      echo 'Bill value: Rs.'.$bill;
    }
    else if($unit>100 && $unit<=150){
      $bill = $unit*5.2;
      echo 'Bill value: Rs.'.$bill;
    }
    else{
      $bill = $unit*6.5;
      echo 'Bill value: Rs.'.$bill;
    } 
  }
  billValue(250);
  echo '<br>';

  //Q4
  function day($num){
    switch($num){
      case 1: echo 'Monday'; break;
      case 2: echo 'Tuesday'; break;
      case 3: echo 'Wednesday'; break;
      case 4: echo 'Thursday'; break;
      case 5: echo 'Friday'; break;
      case 6: echo 'saturday'; break;
      case 7: echo 'Sunday'; break;
      default: echo 'invalid number';
    }
  }
  day(5);
  echo '<br>';

  //Q5
  $fruits = ['mango', 'banana', 'orange'];
  foreach($fruits as $fruit)
    echo $fruit.'<br>';
  print_r($fruits);
?>