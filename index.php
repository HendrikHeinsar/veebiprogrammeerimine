
<?php
	//muutujad
	$myName = "Hendrik";
	$myFamilyName = "Heinsar";
	
	$monthNamesEt = ["jaanuar","veebruar","märts","aprill","mai","juuni","juuli","august","september","oktoober","november","detsember"];
	$monthNow = $monthNamesEt[date("n")-1];
	
	$hourNow = date("H");
	
	$schoolDayStart = date("d.m.Y") ." " ."8.15";
	//echo $schoolDayStart;
	$schoolBegin = strtotime($schoolDayStart);
	//echo $schoolBegin;
	$timeNow = strtotime("now");
	//echo ($timeNow - $schoolBegin);
	
	$minutesPassed = round(($timeNow - $schoolBegin) / 60);
	//echo $minutesPassed;
	
	//echo $hourNow;
	//võrdlen kellaaega ja annan, mis päeva osaga on tegemist (<   >   ==   >=  <=  !=  )
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
	
	$timeNow = strtotime(date("d.m.Y H:i:s"));
	$schoolDayEnd = strtotime(date("d.m.Y" ." " ."15:45"));
	$toTheEnd = $schoolDayEnd - $timeNow;
	//echo (round($toTheEnd / 60))
	//var_dump($_POST);
	
	$myBirthYear = "";
	$ageNotice = "";
	
	if( isset($_POST["birthYear"]) ){
		$myBirthYear = $_POST["birthYear"];
		$myAge = date("Y") - $_POST["birthYear"];
		$ageNotice = "<p>Teie vanus on ligikaudu " .$myAge ." aastat.</p>";
		
		$ageNotice .= "<p>Olete elanud järgnevatel aastatel: </p>";
		$ageNotice .= "\n <ul> \n";
		
		$yearNow = date("Y");
		for($i = $myBirthYear; $i <= $yearNow; $i++){
			$ageNotice .= "<li> \n" .$i ."</li> \n";
		}
		$ageNotice .= "</ul>";
	}
	/* COMMENT BLOCK */
	//      TEEME TSÜKLI
	/*for ($i = 0; $i < 5; $i++) {
		echo "ha";
	}*/
	
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
		
		echo $myName ." . " .$myFamilyName;
	?> </h1>
	
		<?php
		echo "<p>Kõige esimene PHP abil väljastatud sõnum.</p>";
		echo "<p>Täna on ";
		echo date("d. ") .$monthNow .date(" Y") .", käes on " .$partOfDay;
		echo ".</p>";
		echo "<p>Lehe avamise hetkel oli kell " .date("H:i:s") .".</p>";
	
	?>
	
	
	<h2>Natuke aastaarvudest</h2>
	<form method="POST">
		<label>Teie sünniaasta: </label>
		<input type="number" name="birthYear" min="1900" max="2010" value=
			"<?php echo $myBirthYear ?>">
		<input type="submit" name="submitBirthYear" value="Kinnita">
		
	</form>
	
	
	<?php 
		if ( $ageNotice != "" ){
			echo $ageNotice;
		}
	?>
	
	
  <script src="js/scripts.js"></script>
</body>
</html>