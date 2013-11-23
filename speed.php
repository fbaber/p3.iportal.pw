<!-- javascript functions file -->
<script type="text/javascript" src="js/javascript.js"> </script>

<?php

echo "<h3> Speed Conversions</h3>";

?>

<br/>
<label>Enter speed in Miles:</label>
<input type="text" id="Miles" required="required">

<br/>
<!--Covert to: <input type="text" id="degree" /> -->
<label>Converted into:</label> 

<div class="wform" style="font-size:19px; color:#C60; text-align:center;">
<input id="kph" class="wform" type="text" onkeyup="checkDec(document.getElementById('decimal').value)" style=" border:2px dashed #C60; margin: 20px 20px 20px 20px; height:36px; width: 90%; position:relative; left:-20px; background-color:transparent; color:#C60; text-align:center; font-size:30px;">
Kilo Meter Per Hour
<br>
<input id="knots" class="wform" type="text" onkeyup="checkBin(document.getElementById('binary').value)" style=" border:2px dashed #C60; margin: 20px 20px 20px 20px; height:36px; width: 90%; position:relative; left:-20px; background-color:transparent; color:#C60; text-align:center; font-size:30px;">
Nautical Miles per hour
<br>
<input id="meters_second" class="wform" type="text" onkeyup="checkHex(document.getElementById('hexa').value)" style=" border:2px dashed #C60; margin: 20px 20px 20px 20px; height:36px; width: 90%; position:relative; left:-20px; background-color:transparent; color:#C60; text-align:center; font-size:30px;">
Meters per second
<br>
<br>
<p></p>
</div>

<br/>
<!--
<button id="button3" > Calculate </button> -->