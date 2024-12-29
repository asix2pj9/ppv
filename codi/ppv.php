<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>PRICE OF THE SELECTED MATCH</title>
</head>
        <body>
                <p><u>PRICE OF THE SELECTED MATCH</u></p>
                <?php
			if (!(empty($_GET["e1"])) && !(empty($_GET["e2"])))
			{
				if ($_GET["e1"]==$_GET["e2"]){
					echo "Wrong selection. A team can not play against itself. Select a different team 2, please</br>";
				}
				else{
					if ((($_GET["e1"]=="a") and  ($_GET["e2"]=="b")) or (($_GET["e1"]=="b") and  ($_GET["e2"]=="a"))){
						echo "Special match: Price: 15 Euros</br>";
					}
					else {
						echo "Basic match. Price: 10 Euros</br>";
					}
				}
			}
			else{
				echo "Empty selection. Select an option for team 1 and another option for team 2 <br>";
			}
		?>
		<br>
		<a href="index.html">Return to the init web page</a>
        </body>
</html>
