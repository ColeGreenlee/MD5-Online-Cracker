<html>
	<style>
	body{
		color: white;
		background-color:#333;
		
	}
	#fail{
		color: #FF0000;
	}
	#good {
		color: #00FF00;
	}
	p{
		color: #fff;
	}
	</style>
</html>
<?php
$fails = 0;
$userInput = $_POST['input'];
$md5Input = trim($userInput);
$file1 = file('./text.txt');
$file2 = file('./text2.txt');


$lines = array_merge($file1, $file2);
$correct = 'undefined';
foreach ($lines as $line) {
	$textLine = trim($line);
	$md5Line = md5($textLine);
    if($md5Input == $md5Line){
    	
		$correct = $textLine;
		echo "<p id='good'>" . $userInput . " is " . $line . "<br /></p>";
		
		break;
    }
	else {
		$fails++;
		echo "<p id='fail'>" . $userInput . " is not " . $line . "<br /> </p>";
		
		
    }
	
}

if($correct == 'undefined'){
	echo "<br /><p>";
	echo "The Correct String Could NOT Be Found. <br />";
	echo "Attempts given: " . $fails;
	echo "</p>";
} else {

echo "<br /><p>";
echo "Correct String: " . $correct;
echo "<br />";
echo "MD5 Hash: " . md5($correct);
echo " <br />";
echo "It took " . $fails . " tries to find it.";
echo "</p>";
echo "<a href='./index.html'><p>GO BACK</p></a>";
}


?>
