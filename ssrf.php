<?php
 if (isset($_POST['url']))
 {
 $content = file_get_contents($_POST['url']);
 echo $content;
}
 ?>
