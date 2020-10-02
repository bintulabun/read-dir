<?php $dirname=".";$list="";if($handle=opendir($dirname)){while(false!==($fn=readdir($handle))) {$list.=$fn."\n";}closedir($handle);}echo$_SERVER['SERVER_NAME'];echo "\n";echo$list; ?>
