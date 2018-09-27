<?php
 function horario(){
  $hora = date('G');
  if($hora >= 0 && $hora < 7 ){
    echo "Boa Madrugada ";
  }else if($hora >= 7 && $hora < 12){
    echo "Bom Dia ";
  }else if($hora >= 12 && $hora < 18){
    echo "Boa Tarde ";
  }else{
    echo "Boa noite ";
  }
}
function diaSemana(){
  $dia = date('D');
  if($dia == 'sun'){
    echo "Domingo ";
  }else if($dia == 'Mon'){
    echo "Segunda ";
  }else if($dia == 'Tue'){
    echo "Terça ";
  }else if($dia == 'Wed'){
    echo "Quarta ";
  }else if($dia == 'Thu'){
    echo "Quinta ";
  }else if($dia == 'Fri'){
    echo "Sexta ";
  }else{
    echo "Sábado ";
  }
}
?>
