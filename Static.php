<html>
<body>
    <?php
	
	 function myTest()
	 {
	 static $a=6;
	 echo $a;
	 echo "<br>";
	 $a++;
	 
	 }
	 
	 myTest();
	 myTest();
	 myTest();
	 
	 ?>
	 </body>
	 </html>
