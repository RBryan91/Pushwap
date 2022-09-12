<?php
class Echangeur 
{
    
    public $la=[];
    public $lb=[];
    public function sa($la)
    {  
        
       if(count($la) <= 1) // si $la est inferieur ou = a 1
       {
          echo "Pas assez de nombre pour inverser les deux";
       }
       else( [$la[0],$la[1]] = [$la[1],$la[0]]);  // inverse la premiere valeurs du tableau avec la 2emes
         
         var_dump($la);    
    }
    public function sb($lb)
    {
        
       if(count($lb) <= 1) // si $la est inferieur ou = a 1
       {
          echo "Pas assez de nombre pour inverser les deux";
       }
       else( [$lb[0],$lb[1]] = [$lb[1],$lb[0]]);  // inverse la premiere valeurs du tableau avec la 2emes
         
         var_dump($lb); 
    }
    public function sc($la,$lb)
    {
        if(count($lb) > 1) // si $la est inferieur ou = a 1
       {
           [$lb[0],$lb[1]] = [$lb[1],$lb[0]];
           var_dump($lb); 
          //echo "Pas assez de nombre pour inverser les deux";
       }
      // else( [$lb[0],$lb[1]] = [$lb[1],$lb[0]]);  // inverse la premiere valeurs du tableau avec la 2emes
         
         if(count($la) > 1) // si $la est inferieur ou = a 1
       {
         [$la[0],$la[1]] = [$la[1],$la[0]];
         var_dump($la);
          //echo "Pas assez de nombre pour inverser les deux";
       }
       //else( [$la[0],$la[1]] = [$la[1],$la[0]]);  // inverse la premiere valeurs du tableau avec la 2emes
         
       //  var_dump($la);  
    }
   
    public function pa($la,$lb)
    {
    //  $la[0] = $test; 
    //    echo $test;
    }

    
}
$suci = new Echangeur;
$suci->pa([12,13],[16,13]);