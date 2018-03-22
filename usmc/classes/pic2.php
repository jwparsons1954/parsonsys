<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>2nd Force Recon 2017 Reunion</title>
<meta property="og:url"                content="http://parsonsys.net/usmc/recon.php" />
<meta property="og:type"               content="website" />
<meta property="og:title"              content="2nd Force Recon 2017 Reunion" />
<meta property="og:description"        content=" Connecting Old Warriors and Friends " />
<meta property="og:image"              content="http://parsonsys.net/usmc/images/reunionpage.jpg" />
    <link rel="icon" type="[MIME TYPE]" href="usmc1_flag.gif" >
    <link href="css/tp4.css" rel="stylesheet" type="text/css">
</head>
<body>	
	<?PHP
  // filetypes to display
  $imagetypes = array("image/jpeg", "image/gif");
  // Original PHP code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.

  function getImages($dir)
  {
    global $imagetypes;

    // array to hold return value
    $retval = array();

    // add trailing slash if missing
    if(substr($dir, -1) != "/") $dir .= "/";

    // full server path to directory
    $fulldir = "{parsonsys.net/usmc/reunion2016}/$dir";

    $d = @dir($fulldir) or die("getImages: Failed opening directory $dir for reading");
    while(false !== ($entry = $d->read())) {
      // skip hidden files
      if($entry[0] == ".") continue;

      // check for image files
      $f = escapeshellarg("$fulldir$entry");
      $mimetype = trim(`file -bi $f`);
      foreach($imagetypes as $valid_type) {
        if(preg_match("@^{$valid_type}@", $mimetype)) {
          $retval[] = array(
           'file' => "/$dir$entry",
           'size' => getimagesize("$fulldir$entry")
          );
          break;
        }
      }
    }
    $d->close();

    return $retval;
  }
 ?>
 </body>
</html>