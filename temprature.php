<!-- javascript functions file -->
<script type="text/javascript" src="js/javascript.js"> </script>


<?php

echo "Temprature conversion app";

?>

<br/>
<label>Enter temperature units:</label>
<input type="text" id="temp" required="required">

<br/>
<!--Covert to: <input type="text" id="degree" /> -->
<label>Convert to:</label> 
<select id="degree" >
<option value="F"> Celsius </option>
<option value="C"> Fahrenheit </option>
</select>
<br/>
<button id="button2" > Calculate </button>

