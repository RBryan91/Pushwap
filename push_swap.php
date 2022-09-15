<?php
class Echangeur 
{
    
    public $la=[];
    public $lb=[];
    public function sa()
    {  
       if(count($this->la) <= 1) // si $la est inferieur ou = a 1
       {
          echo "Pas assez de nombre pour inverser les deux";
       }
       else( [$this->la[0],$this->la[1]] = [$this->la[1],$this->la[0]]); echo "sa ";  // inverse la premiere valeurs du tableau avec la 2emes
         
        // var_dump($this->la);    
    }
    public function sb()
    {
        
       if(count($this->lb) <= 1) // si $la est inferieur ou = a 1
       {
          echo "Pas assez de nombre pour inverser les deux";
       }
       else( [$this->lb[0],$this->lb[1]] = [$this->lb[1],$this->lb[0]]);  // inverse la premiere valeurs du tableau avec la 2emes
         
       //  var_dump($this->lb); 
    }
    public function sc()
    {
      $this->sb();
      //  if(count($this->lb) > 1) // si $la est inferieur ou = a 1
      // {
      //     [$this->lb[0],$this->lb[1]] = [$this->lb[1],$this->lb[0]];
      //     var_dump($this->lb); 
      //    //echo "Pas assez de nombre pour inverser les deux";
      // }
      // else( [$lb[0],$lb[1]] = [$lb[1],$lb[0]]);  // inverse la premiere valeurs du tableau avec la 2emes
         $this->sa();
       //  if(count($this->la) > 1) // si $la est inferieur ou = a 1
       //{
       //  [$this->la[0],$this->la[1]] = [$this->la[1],$this->la[0]];
       //  var_dump($this->la);
       //   //echo "Pas assez de nombre pour inverser les deux";
       //}
       //else( [$la[0],$la[1]] = [$la[1],$la[0]]);  // inverse la premiere valeurs du tableau avec la 2emes
         
       //  var_dump($la);  
    }
   
    public function pa()
    {
    //  $la[0] = $test; 
    //    echo $test;
      if(count($this->lb) > 0)
      {
         $valeurs = $this->lb[0];
     
         array_unshift($this->la,$valeurs);
         array_shift($this->lb);
         echo "pa ";
         //var_dump($this->lb); // prend en argument le tableau d'entrée et la valeurs a lui mettre dedans
         //var_dump($this->la);
      }
    }
    public function pb()
    {
      if(count($this->la) > 0)
      {
         $valeurs = $this->la[0];
     
         array_unshift($this->lb,$valeurs);  // prend en argument le tableau d'entrée et la valeurs a lui mettre dedans
         array_shift($this->la);
         echo "pb "; // enleve le premiere element et le retourne ;
         //var_dump($this->lb); 
         //var_dump($this->la);
      }
    }
    public function ra()
    {
      
         array_push($this->la, array_shift($this->la));
         //var_dump($this->la);
    }
    public function rb()
    {
      
      array_push($this->lb,array_shift($this->lb));
      //var_dump($this->lb);
    }
    public function rr()
    {
      $this->rb();
      $this->ra();
    }
    public function rra()
    {
      array_unshift($this->la,array_pop($this->la));
      echo "rra ";
      //var_dump($this->la);
    }
    public function rrb()
    {
      array_unshift($this->lb,array_pop($this->lb));
      //var_dump($this->lb);
    }
    public function rrr()
    {
      $this->rra();
      $this->rrb();
    }
    public function tris()
    {
      global $argv;
      array_shift($argv);
      $this->la = $argv;
      //var_dump($argv);
      //echo $valeursLaPlusBasse;
     // var_dump($valeursLaPlusBasse);
      
      //var_dump($indexdupluspetit);
      //var_dump($this->lb);
         while(!empty($this->la))
         {
            $valeursLaPlusBasse = min($this->la);
            $indexdupluspetit = array_search($valeursLaPlusBasse,$this->la);
            while($valeursLaPlusBasse !== $this->la[0])
           {  
              $this->rra(); 
            }
              $this->pb(); 
            }
            while(!empty($this->lb))
            {
               $this->pa();
            }
           
           // var_dump("========",$this->la,$this->lb);
         //var_dump($this->la);

         
     // switch(true)
     // {
     //    case $this->la[1] < $this->la[0]:
     //       
     //      
     //       $this->sa();
     //      
     //       var_dump($this->la);
     //        
     //      // var_dump($this->la);
     //       
     //       //var_dump($this->la);
     // }
      //if($this->la[1] < $this->la[0])
      //{
      //   $this->sa();
      //} 
     //var_dump($this->la);
    }

    
}
$suci = new Echangeur;
$suci->tris();