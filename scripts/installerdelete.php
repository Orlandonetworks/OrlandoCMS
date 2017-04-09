<?php
//Скрипт удаление древа Install после установки.
$deldir = "../install";

  function full_del_dir ($deldir)
  {
  $dir = opendir($deldir);
  while(($file = readdir($dir)))
  {
    if ( is_file ($deldir."/".$file))
    {
      unlink ($deldir."/".$file);
    }
    else if ( is_dir ($deldir."/".$file) &&
             ($file != ".") && ($file != ".."))
    {
    }
  }
  closedir ($dir);
  rmdir ($deldir);
  echo("Удаление инсталятора успешно завершено: ").$deldir.'<br>'; 
  }
  full_del_dir ($deldir)
?>
