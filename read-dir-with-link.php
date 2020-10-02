<?php
$dirname=".";$list="";if($handle=opendir($dirname)){while(false!==($fn=readdir($handle))) {$list.="<a href='$fn'>".$fn."</a><br>";}closedir($handle);}echo"<a href='".$_SERVER['HTTP_HOST']."'>".$_SERVER['SERVER_NAME']."</a>";echo "<br>";echo$list;
?>
