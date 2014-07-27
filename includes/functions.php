<?php
//This is the file that contains my functions declearation.

function clearFloat(){
	echo "<div id=\"clearer\">";
	echo "</div>";
}
function page(){
	if($_GET['id']==1){
		echo " you are welcome to my <div class =\"present\">Home</div> page!";
	}elseif($_GET['id']==2){
		echo " you are welcome to my <div class =\"present\">Service</div> page!";
	}elseif($_GET['id']==3){
		echo " you are welcome to my <div class =\"present\">Price</div> page!";
	}elseif($_GET['id']==4){
		echo " you are welcome to my <div class =\"present\">About</div> page!";
	}elseif($_GET['id']==5){
		echo " you are welcome to my <div class =\"present\">Contact</div> page!";
	}else{
		echo " you are welcome to my page!";
	}
}


?>
