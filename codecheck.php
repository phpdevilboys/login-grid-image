<?php
session_start();
if(isset($_REQUEST["btnGo"]) and @$_REQUEST["ch5temp"]!="")
{
		$correctResult="";
		$response=(string)$_REQUEST["ch5temp"];
		$result=str_split($response, 2);
		$correctValue=$_SESSION["result"];
		foreach($result as $key => $value)		
		{
			if(substr($value,0,1)=="0")
			{
				$value=substr($value,1);
			}
			$correctResult.=$correctValue[$value];
		}
		echo "Congrets value entered is:=".$correctResult."!!!!!<br>";

}
else
{
	//include("grid_image.php");
}

?>

<html>
	<head>
			<script type="text/javascript">
				var iNbClic = 0; 
				function Grille(iCase)
				{
					 if(iNbClic <6)
					 {
						 document.logincanalnetbis.ch5temp.value = document.logincanalnetbis.ch5temp.value + iCase;
						 document.logincanalnetbis.ch2.value = document.logincanalnetbis.ch2.value + '*';
					 	 iNbClic ++;
					 }
				}  
			</script>
	</head>
	<body>
			<form method="post" name="logincanalnetbis" action="codecheck.php">
					<INPUT type=hidden value="" name="ch5temp">
					<img border="0" usemap="#MapGril" src="http://192.168.0.226/demo/gridimage/grid_image.php">
					<input maxlength="6" name="ch2" value="" type="password" disabled>
					<input type="submit" name="btnGo" id="btnGo" value="go">
			</form>
			<MAP name="MapGril">
          <area nohref onclick="Javascript:Grille('01')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('01')}" shape="rect" coords="6,5,25,24">
          <area nohref onclick="Javascript:Grille('02')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('02')}" shape="rect" coords="32,5,51,24">
          <area nohref onclick="Javascript:Grille('03')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('03')}" shape="rect" coords="58,5,77,24">
          <area nohref onclick="Javascript:Grille('04')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('04')}" shape="rect" coords="84,5,103,24">
          <area nohref onclick="Javascript:Grille('05')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('05')}" shape="rect" coords="110,5,129,24">
          <area nohref onclick="Javascript:Grille('06')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('06')}" shape="rect" coords="6,31,25,50">
          <area nohref onclick="Javascript:Grille('07')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('07')}" shape="rect" coords="32,31,51,50">
          <area nohref onclick="Javascript:Grille('08')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('08')}" shape="rect" coords="58,31,77,50">

          <area nohref onclick="Javascript:Grille('09')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('09')}" shape="rect" coords="84,31,103,50">
          <area nohref onclick="Javascript:Grille('10')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('10')}" shape="rect" coords="110,31,129,50">
          <area nohref onclick="Javascript:Grille('11')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('11')}" shape="rect" coords="6,56,25,75">
          <area nohref onclick="Javascript:Grille('12')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('12')}" shape="rect" coords="32,56,51,75">
          <area nohref onclick="Javascript:Grille('13')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('13')}" shape="rect" coords="58,56,77,75">
          <area nohref onclick="Javascript:Grille('14')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('14')}" shape="rect" coords="84,56,103,75">
          <area nohref onclick="Javascript:Grille('15')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('15')}" shape="rect" coords="110,56,129,75">   
          <area nohref onclick="Javascript:Grille('16')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('16')}" shape="rect" coords="6,81,25,100">
          <area nohref onclick="Javascript:Grille('17')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('17')}" shape="rect" coords="32,81,51,100">

          <area nohref onclick="Javascript:Grille('18')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('18')}" shape="rect" coords="58,81,77,100">
          <area nohref onclick="Javascript:Grille('19')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('19')}" shape="rect" coords="84,81,103,100">
          <area nohref onclick="Javascript:Grille('20')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('20')}" shape="rect" coords="110,81,129,100">
          <area nohref onclick="Javascript:Grille('21')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('21')}" shape="rect" coords="6,106,25,125">
          <area nohref onclick="Javascript:Grille('22')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('22')}" shape="rect" coords="32,106,51,125">
          <area nohref onclick="Javascript:Grille('23')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('23')}" shape="rect" coords="58,106,77,125">
          <area nohref onclick="Javascript:Grille('24')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('24')}" shape="rect" coords="84,106,103,125">
          <area nohref onclick="Javascript:Grille('25')" ondblclick="Javascript:if (navigator.appName=='Microsoft Internet Explorer') {Grille('25')}" shape="rect" coords="110,106,129,125">
</MAP>	
</body>
</html>

