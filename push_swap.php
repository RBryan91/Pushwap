<?php
use function UI\quit;
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
         
       
    }
    public function sc()
    {
      $this->sb();
      $this->sa(); 
    }
   
    public function pa()
    {
    
      if(count($this->lb) > 0)
      {
         $valeurs = $this->lb[0];
     
         array_unshift($this->la,$valeurs);
         array_shift($this->lb);
         $compteur = count($this->lb);
         if($compteur == 0)
         {
            echo "pa";
         }
         else
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
         $compteur = count($this->la);
         if($compteur == 0)
         {
            echo "pb";
         }
         else
          echo "pb "; 
         
      }
    }
    public function ra()
    {
      
         array_push($this->la, array_shift($this->la));
         
    }
    public function rb()
    {
      
      array_push($this->lb,array_shift($this->lb));
      
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
      
    }
    public function rrb()
    {
      array_unshift($this->lb,array_pop($this->lb));
      
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

      while(!empty($this->la))
      {
         $valeursLaPlusBasse = min($this->la);
         $indexdupluspetit = array_search($valeursLaPlusBasse,$this->la);
         while($valeursLaPlusBasse !== $this->la[0])
         { 
            
            if($indexdupluspetit==1)
            {
               $this->sa();
            }
            else
           $this->rra();
         }
         if($this->verif() == true)
           {
              $this->pa();
              
               if(empty($this->lb)){echo PHP_EOL; exit;}
           }
           else
           $this->pb();
      }
      while(!empty($this->lb))
      {
         $this->pa();
      }
      
   }
   public function verif()
   {
      for($i = 0; $i < count($this->la)-1; $i ++)
      {  
         if($this->la[$i] > $this->la[$i+1]) // comparaison du premier element avec le 2eme ect 
         {
            return false;
         }
      }
     
      return true; 
   }
   
}
$suci = new Echangeur;
$suci->tris();