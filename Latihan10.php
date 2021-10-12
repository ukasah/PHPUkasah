<!-- Latihan Multi Dimensional Array PHP -->
<?php
$ikan = array (
    array("Aligator",5,1),
    array("Arapaima",10,2),
    array("Pari",15,3),
    array("Dugong",20,4)
  );
    
  echo $ikan[0][0].": Beratnya: ".$ikan[1][1]." Kg , ".$ikan[0][2]." ekor <br>";
  echo $ikan[1][0].": Beratnya: ".$ikan[3][1]." Kg , ".$ikan[1][2]." ekor <br>";
  echo $ikan[2][0].": Beratnya: ".$ikan[0][1]." Kg , ".$ikan[2][2]." ekor <br>";
  echo $ikan[3][0].": Beratnya: ".$ikan[3][1]." Kg , ".$ikan[3][2]." ekor <br>";
  
  ?>