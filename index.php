
<?php
	//muutujad
	$myName = "Andrus";
	$myFamilyName = "Rinde";
	
	$hourNow = date("H");
	
	$schoolDayStart = date("d.m.Y") ." " ."8.15";
	//echo $schoolDayStart;
	$schoolBegin = strtotime($schoolDayStart);
	//echo $schoolBegin;
	$timeNow = strtotime("now");
	//echo ($timeNow - $schoolBegin);
	
	$minutesPassed = round(($timeNow - $schoolBegin) / 60);
	echo $minutesPassed;
	
	//echo $hourNow;
	//võrdlen kellaaega ja annan hinngu, mis päeva osaga on tegemist (<   >   ==   >=  <=  !=  )
	$partOfDay = "";
	if ( $hourNow < 8 ){
		$partOfDay = "varajane hommik";
	}
	//echo $partOfDay;
	if ( $hourNow >= 8 and $hourNow < 16 ) {
		$partOfDay = "koolipäev";
	}
	if ( $hourNow >= 16 ) {
		$partOfDay = "vaba aeg";
	}
	
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
<h1> <?php
		echo $myName ." " .$myFamilyName;
	?> </h1>
	
		<?php
		echo "<p>Kõige esimene PHP abil väljastatud sõnum.</p>";
		echo "<p>Täna on ";
		echo date("d.m.Y") .", käes on " .$partOfDay;
		echo ".</p>";
		echo "<p>Lehe avamise hetkel oli kell " .date("H:i:s") .".</p>";
	
	?>
	
  <script src="js/scripts.js"></script>
</body>
</html>