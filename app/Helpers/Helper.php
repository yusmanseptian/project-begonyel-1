<?php

function set_active($route, $output = 'active')
{
 if( is_array($route) ) {
   foreach ($route as $r) {
     if (Route::is($r)) {
       return $output;
     }
   }
 } else {
   if (Route::is($route)){
     return $output;
   }
 }
}

?>