<?php

$r1=rand(0,7);
$r2=rand(0,7);
$r3=rand(0,7);
$count=0;

if($r1==7){
  $count++;
}
if($r2==7){
  $count++;
}	
if($r3==7){
  $count++;
}   
if ($count==1){
  echo "10 points";
}
if ($count==2){
  echo "100 points";
}
if ($count==3){
  echo "100 points";
}
else{
  echo "try again";
}
?> 
