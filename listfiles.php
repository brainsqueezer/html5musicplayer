<?

include("JSON.class.php");
require_once('/usr/share/php-getid3/getid3.php');

function getDirectory($basepath, $path = '.', $ignore = '') {
       $dirTree = array ();
   $ignore[] = '.';
  $ignore[] = '..';

      $dh = @opendir($basepath.$path);

       $getID3 = new getID3;
       $getID3->encoding = 'UTF-8';
     while (false !== ($file = readdir($dh))) {

    if (!in_array($file, $ignore)) {
        if (!is_dir($basepath.$path."/$file")) {

$fileChunks = array_reverse(explode(".", $file));
              $ext = $fileChunks[0];


            $item = "";
	    $item->path = "/music/".$path;
	    $item->file = $file;
if ($ext == "mp3") {
       $filename = $basepath.$path."/$file";


   // Analyze file and store returned data in $ThisFileInfo
   $ThisFileInfo = $getID3->analyze($filename);

      // metainformation is always available under [tags] even if
      getid3_lib::CopyTagsToComments($ThisFileInfo);

   // Output desired information in whatever format you want
   // Note: all entries in [comments] or [tags] are arrays of
      $item->artist = @$ThisFileInfo['comments_html']['artist'][0];
      $item->title = @$ThisFileInfo['comments_html']['title'][0];
      $item->tracknumber = @$ThisFileInfo['comments_html']['tracknumber'][0];
      $item->album = @$ThisFileInfo['comments_html']['album'][0];
      $item->year = @$ThisFileInfo['comments_html']['year'][0];


     // $item->title = @$ThisFileInfo['tags']['id3v2']['title'][0];  // title
     // echo @$ThisFileInfo['audio']['bitrate'];           // audio
    //  echo @$ThisFileInfo['playtime_string'];            // playtime

   
   
   $dirTree[] = $item;
}
       
       }
 }
  }
           closedir($dh);
               
               return $dirTree;
}


$folder= $_GET['folder'];

$ignore = array('.htaccess', 'error_log', 'cgi-bin', '.directory', 'workspace');

$dirTree = getDirectory("/home/rap/Music/", $folder, $ignore);



$json = new JSON();
$str = $json->encode($dirTree);
echo $str;


?>
