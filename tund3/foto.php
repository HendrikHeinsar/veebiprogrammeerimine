
<?php
	$picsDir = "../../pics/";
	$picFileTypes = ["jpg", "jpeg", "png", "gif"];
	$picFiles = [];
	
	$allFiles = array_slice(scandir($picsDir), 2);
	//var_dump($allFiles);
	foreach ($allFiles as $file) {
		$fileType = pathinfo($file, PATHINFO_extension);
		if (in_array($fileType, $picFileTypes) == true){
			array_push($picFiles, $file);
		}
	}
	
	
	//var_dump($picFiles);
	$picCount = count($picFiles);
	
	$picNum = mt_rand(0,($picCount -1));
	$picFile = $picFiles[$picNum];
?>


<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>

<h1>FOTO</h1>
<img src="<?php echo $picsDir .$picFile; ?>" alt="fml1">
<p> Not serious FAM. </p>

</body>
</html>