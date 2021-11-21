<?php
    function get_drink_by_profession(string $s): string {
        $s = strtolower($s);
        $array = array("jabroni" => "Patron Tequila", "school counselor" => "Anything with Alcohol", "programmer" => "Hipster Craft Beer", "bike gang member" => "Moonshine", "politician" => "Your tax dollars", "rapper" => "Cristal" );
        
        if(array_key_exists($s, $array)){
          return $array[$s];
        }
        else{
          return "Beer";
        }
      }
?>