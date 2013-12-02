<!-- javascript functions file -->
<script type="text/javascript" src="js/javascript.js"> </script>


<?php

//echo "Temprature conversion app";
echo '<h2>'.' Easy Temperature conversion App'.'</h2>';
?>
<div class="payload">
<br/>
<label>Enter temperature units:</label>
<input type="text" id="temp" required="required">

<br/><br/>
<!--Covert to: <input type="text" id="degree" /> -->
<label>Convert to:</label> 
<select id="degree" >
<option value="F"> Celsius </option>
<option value="C"> Fahrenheit </option>
</select>
<br/>
<br/>
<button id="button2" class="btn :hover"> Calculate </button>
</div>
