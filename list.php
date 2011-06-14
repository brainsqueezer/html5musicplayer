<?

include("JSON.class.php");
function getDirectory($basepath, $path = '.', $ignore = '') {
       $dirTree = array ();
  $dirTreeTemp = array ();
   $ignore[] = '.';
  $ignore[] = '..';

      $dh = @opendir($basepath.$path);

     while (false !== ($file = readdir($dh))) {

    if (!in_array($file, $ignore)) {
        if (!is_dir("$basepath$path/$file")) {
            
      //    $dirTree["$path"][] = $file;
       
       } else {
      $dirTree[] = "$path/$file";

          $dirTreeTemp = getDirectory($basepath, "$path/$file", $ignore, FALSE);
         if (is_array($dirTreeTemp))
              $dirTree   = array_merge($dirTree, $dirTreeTemp);
       }
 }
  }
           closedir($dh);
               
               return $dirTree;
}

$ignore = array('.htaccess', 'error_log', 'cgi-bin', 'php.ini', 'workspace');

$dirTree = getDirectory("/home/rap/Music", "", $ignore, TRUE);




$json = new JSON();
$str = $json->encode($dirTree);
echo $str;


?>