<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
<?php
session_start();
$_SESSION['pagename'] = "zulu index";
include "db/pushhits.php";
	error_reporting(0);
    if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
		$l = "file.png";
		if (false === strpos((string)$file ,'.'))$l = "directory.png";
		
        if ($file != "." && $file != ".."&& $file != "index.php" && $file != "css") 
        {
            $thelist .= '<img src = img/'.$l.'><a href="'.$file.'"class = "bttn-blue bttn2" target = "_blank">'.$file.'</a><br />';
        }
    }
    closedir($handle);
    }
?>

<?php echo $thelist?>

</body>
</html>
