<?php

// Show all information, defaults to INFO_ALL
/*if ( function_exists ( 'apache_get_modules' ) ) { 
  $modules = apache_get_modules ( ) ; 
  $mod_rewrite = in_array ( 'mod_rewrite' , $modules ) ; 
} else { 
  $mod_rewrite =  getenv ( 'HTTP_MOD_REWRITE' ) == 'On' ? true : false ; 
  echo "no esta activo";
}*/
phpinfo();
?>