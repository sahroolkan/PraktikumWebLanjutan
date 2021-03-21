<?php

function predikat($total){
  if($total >= 85){
    return 'A';
  } else if($total >= 70){
    return 'B';
  } else if($total >= 55) {
    return 'C';
  } else if($total >= 40) {
    return 'D';
  } else {
    return 'E';      
  }
}

function ip($total){
  if($total >= 85){
    return '4';
  } else if($total >= 70){
    return '3';
  } else if($total >= 55) {
    return '2';
  } else if($total >= 40) {
    return '1';
  } else {
    return '0';      
  }
}