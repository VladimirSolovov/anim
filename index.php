<?php

$arr = [
	 'Africa' =>      ['Varanus scincus', 
    				   'Psittacus erithacus', 
    				   'Leptoptilos', 
    				   'Tragelaphus eurycerus', 
    				   'Spheniscus demersus', 
    				   'Giraffa', 
    				   'Panthera pardus', 
    				   'Struthio camelus', 
    				   'Simiae', 
    			 	   'Pan'
    			 	],
   	 'Australia' =>   ["Notoryctemorphia", 
    				   "Dasyuromorphia", 
    			       "Atherina mochon pontica", 
    				   "Cacatuidae", 
    				   "Dromaius novae hollandiae", 
    				   "Vombatidae", 
    				   "Macropus", 
    				   "Phascolarctos cinereus", 
    				   "Pavo cristatus", 
    			   	   "Callipepla californica"
    			   	],
   	 'Eurasia' =>     ["Hemiechinus auritus", 
    			 	   "Camelus bactrianus ferus", 
    				   "Carpospiza",
    				   "Lynx", 
    				   "Canis lupus", 
    				   "Rotifera",
    				   "Meles meles", 
    				   "Vulpes", 
    				   "Sus scrofa", 
    				   "Capreolus"
    				],
  	 'NAmerica' =>    ["Ursus maritimus", 
    			  	   "Lemmini", 
    				   "Lepus arcticus", 
    				   "Bubo scandiacus", 
    				   "Lagopus lagopus", 
    				   "Rangifer tarandus", 
    				   "Tamiasciurus hudsonicus", 
    			 	   "Martes pennanti", 
    			   	   "Ondatra zibethicus", 
    			 	   "Gulo gulo"
    			 	],
	 'SAmerica' =>    ["Dasypodidae", 
	    		       "Chaetophractus villosus losus", 
    			       "Bradypodidae", 
    			       "Myrmecophagidae", 
    		 	       "Sapajus nigritus", 
    			       "Aotus", 
    			       "Alouatta", 
    			       "Coendou", 
    			 	   "Chinchilla", 
    			   	   "Lagidium"
    			   	],
    
			];

	$arr2 = [];
	$arr3 = [];

?>
    <h2>Массив с животными</h2>
    <pre>
<?
print_r($arr);

// -----------------------------------------------------------------

foreach ($arr as $key => $continents) {
    foreach ($continents as $anim) {
        $word = explode(" ", $anim);
        $countword = count($word);
        if($countword > 1){
            $arr2[$key][] = $anim;
        }
    }
}

?>
    <h2>Массив с животными у которых больше одного слова в названии</h2>
    <pre>
<?
print_r($arr2);
?>
</pre>
<?
//--------------------------------------------------------------------
foreach ($arr as $key => $continents) {
    foreach ($continents as $anim) {	
        $word = explode(" ", $anim);
        $countword = count($word);
        if($countword > 1){
            $val_0 = array_shift($word); 
            shuffle($word);      
            array_unshift($word, $val_0);
            $arr3[$key][] = implode(' ',$word);
        }
    }
}
?>
    <h2>Массив с выдуманными животными </h2>
    <pre>
<?
print_r($arr3);
?>
</pre>
