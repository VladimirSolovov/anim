<?php

$arr = [
	 "Africa" =>      ["Varanus scincus", 
    				   "Psittacus erithacus", 
    				   "Leptoptilos", 
    				   "Tragelaphus eurycerus", 
    				   "Spheniscus demersus", 
    				   "Giraffa", 
    				   "Panthera pardus", 
    				   "Struthio camelus", 
    				   "Simiae", 
    			 	   "Pan"],
   	 "Australia" =>   ["Notoryctemorphia", 
    				   "Dasyuromorphia", 
    			       "Monotremata", 
    				   "Cacatuidae", 
    				   "Dromaius novaehollandiae", 
    				   "Vombatidae", 
    				   "Macropus", 
    				   "Phascolarctos cinereus", 
    				   "Pavo cristatus", 
    			   	   "Callipepla californica"],
   	 "Eurasia" =>     ["Hemiechinus auritus", 
    			 	   "Hirundo", 
    				   "Carpospiza",
    				   "Lynx", 
    				   "Canis lupus", 
    				   "Rotifera",
    				   "Meles meles", 
    				   "Vulpes", 
    				   "Sus scrofa", 
    				   "Capreolus"],
  	 "NAmerica" =>    ["Ursus maritimus", 
    			  	   "Lemmini", 
    				   "Lepus arcticus", 
    				   "Bubo scandiacus", 
    				   "Lagopus lagopus", 
    				   "Rangifer tarandus", 
    				   "Tamiasciurus hudsonicus", 
    			 	   "Martes pennanti", 
    			   	   "Ondatra zibethicus", 
    			 	   "Gulo gulo"],
	 "SAmerica" =>    ["Dasypodidae", 
	    		       "Chaetophractus villosus", 
    			       "Bradypodidae", 
    			       "Myrmecophagidae", 
    		 	       "Sapajus nigritus", 
    			       "Aotus", 
    			       "Alouatta", 
    			       "Coendou", 
    			 	   "Chinchilla", 
    			   	   "Lagidium"],
    
			];

	$arr2 = [];
	$arr3 = [];

?>
    <h3>Массив с животными</h3>
    <pre>
<?
// Массив с животными.
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
    <h3>Массив с животными у которых больше одного слова в названии</h3>
    <pre>
<?
// Массив с животными у которых больше одного слова в названии.
print_r($arr2);
?></pre><?



// Сделать выдуманных животных (перемешать слова)


foreach ($arr as $key => $continents) {
    foreach ($continents as $anim) {
        $word = explode(" ", $anim);
        $countword = count($word);
        if($countword > 1){?><pre><?
            // $word тут массив из слов в строке.
            $val_0 = array_shift($word); // Вытаскиваем первое слово, оно сейчас стоит под 0 ключом, при этом он удалится совсем из массива
            shuffle($word); // Функция которая перемешивает все значения массива.
            array_unshift($word, $val_0); // Вставляем в массив $word в самое начало элемент $val_0(Тут у нас хранится первое слово.)
            $arr3[$key][] = implode(' ',$word); // Склеиваем все элементы массива в одну строчку, разделяем их пробелом.
        }
    }
}

?>
    <h3>Массив с выдуманными животными </h3>
    <pre><?
print_r($arr3);
?></pre><?