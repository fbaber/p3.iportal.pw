<!-- javascript functions file -->
<script type="text/javascript" src="js/javascript.js"> </script>

<?php

echo "<h3> Weight Conversions</h3>";

?>

<br/>
<label>Enter a weight in pound:</label>
<input type="text" id="weight_unit" required="required">
<br/>
<button id="button3" > Convert in other units </button>
<br/>
<!--Covert to: <input type="text" id="degree" /> -->
<div class="wform" style="font-size:19px; color:#C60; text-align:center;">
<input id="grams" class="wform" type="text" onkeyup="checkDec(document.getElementById('decimal').value)" style=" border:2px dashed #C60; margin: 20px 20px 20px 20px; height:36px; width: 90%; position:relative; left:-20px; background-color:transparent; color:#C60; text-align:center; font-size:30px;">
Grams
<br>
<input id="kilogram" class="wform" type="text" onkeyup="checkBin(document.getElementById('binary').value)" style=" border:2px dashed #C60; margin: 20px 20px 20px 20px; height:36px; width: 90%; position:relative; left:-20px; background-color:transparent; color:#C60; text-align:center; font-size:30px;">
KiloGram
<br>
<input id="tons" class="wform" type="text" onkeyup="checkHex(document.getElementById('hexa').value)" style=" border:2px dashed #C60; margin: 20px 20px 20px 20px; height:36px; width: 90%; position:relative; left:-20px; background-color:transparent; color:#C60; text-align:center; font-size:30px;">
Tons
<br>
<br>
<p></p>
</div>

