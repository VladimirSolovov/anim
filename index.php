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
    <h3>������ � ���������</h3>
    <pre>
<?
// ������ � ���������.
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
    <h3>������ � ��������� � ������� ������ ������ ����� � ��������</h3>
    <pre>
<?
// ������ � ��������� � ������� ������ ������ ����� � ��������.
print_r($arr2);
?></pre><?



// ������� ���������� �������� (���������� �����)


foreach ($arr as $key => $continents) {
    foreach ($continents as $anim) {
        $word = explode(" ", $anim);
        $countword = count($word);
        if($countword > 1){?><pre><?
            // $word ��� ������ �� ���� � ������.
            $val_0 = array_shift($word); // ����������� ������ �����, ��� ������ ����� ��� 0 ������, ��� ���� �� �������� ������ �� �������
            shuffle($word); // ������� ������� ������������ ��� �������� �������.
            array_unshift($word, $val_0); // ��������� � ������ $word � ����� ������ ������� $val_0(��� � ��� �������� ������ �����.)
            $arr3[$key][] = implode(' ',$word); // ��������� ��� �������� ������� � ���� �������, ��������� �� ��������.
        }
    }
}

?>
    <h3>������ � ����������� ��������� </h3>
    <pre><?
print_r($arr3);
?></pre><?