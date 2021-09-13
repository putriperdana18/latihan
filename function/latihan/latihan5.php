<?php  
function nilaiMax($array)  
{ 
   $n = count($array);  
   $max = $array[0]; 
   for ($i = 1; $i < $n; $i++)  
       if ($max < $array[$i]) 
           $max = $array[$i]; 
    return $max;        
} 
   
function nilaiMin($array)  
{ 
   $n = count($array);  
   $min = $array[0]; 
   for ($i = 1; $i < $n; $i++)  
       if ($min > $array[$i]) 
           $min = $array[$i]; 
    return $min;        
} 
    
$array = array(96, 80, 100, 127, 81,51, 95); 
echo "Nilai terbesar dari array diatas : ".nilaiMax($array);//5
echo "<br>"; 
echo "Nilai terkecil dari array diatas: ".nilaiMin($array);//1
?> 