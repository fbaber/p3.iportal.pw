
$(function(){

	
	//css
	$("li").mouseover(function(){
		$(this).css("background-color", "619f15");
		$(this).css("color" , "fff");
	});
	
	$(".aclass").click(function (){
		var page = $(this).attr('id');
		page += '.php';
		$.ajax({
			//type: "POST",
			url: page/*,
			data: { name: "FB", location: "NYC" }*/
			})
			.done(function( msg ) {
			//$(".content").html('');
			$(".content").html(msg);
		});
	});
	
		
	$("#button").click(
		function (){
		
		var currency1 = $('#Currency1').val();
		var currency2 = $('#Currency2').val();
		var value = $('#Value').val();
		// Validation code
		if($.isNumeric(value) &&  (value > 0) && ('null' != value))
		{
			// entered_values = 'Entered Value :'+val;
			alert("You entered " + value + " " + currency1 + " for conversion into " + currency2);
			var page = 'result.php';
			$.ajax({
			type: "POST",
			url: page,
			data: { currency1: currency1, currency2: currency2, value: value }
			})
			.done(function( msg ) {
			$(".content").html(msg);
			});
		}
		else{
		alert("Please enter a valid numeric value for currency conversion!");
		//die();
		}
		/*
		else{
			
			//$("#input1").val('');
			alert('Enter a valid numeric value');
			
			//or we can 
			$("#Value").css("color", "red");
			$("#Value").text('Enter a Valid Numeric Value');
			
			$("#Value").focus();
			// check = 0;
		}
		*/
		// Validation code end 
		
    
		// alert(currency1 + ' ' + currency2 + ' ' + value);
		
		/*
		var page = 'result.php';
		$.ajax({
		type: "POST",
		url: page,
		data: { currency1: currency1, currency2: currency2, value: value }
		})
		.done(function( msg ) {
		$(".content").html(msg);
		}); */
		die();
		
		});
		
		// Temp conversion 
		
		
		$("#button2").click(
		function (){
		var temp = $("#temp").val();
		
		var To_temp = $("#degree").val();
		//alert("You entered " + temp + " degree Fahrenheit");
		if($.isNumeric(temp) &&  ('null' != temp))
		{
			if(To_temp=='F'){
				//alert("Temp in Celsius"+temp);
				alert("You entered " + temp + " degree Fahrenheit.");
				$(".content").html("<h1>Temp in Celsius: "+((temp-32)*5/9).toFixed(2)+"</h1>");
				
			}
			else
			{
				alert("You entered " + temp + " degree Celsius.");
				$(".content").html("<h1>Temp in Fahrenheit: "+(((temp*9)/5)+32).toFixed(2)+"</h1>");
			}
		}
		else
		{
			alert("Please enter a valid numeric value for temperature conversion!");
		}
		});
		/*
				
			
		*/
		$("#button3").click(
		function (){
		var weight_unit = $("#weight_unit").val();
		
		// alert(weight_unit);
		
		$('#grams').val((weight_unit/0.0022046).toFixed(2));
		
		$('#kilogram').val((weight_unit/2.2).toFixed(2));
		
		$('#tons').val(weight_unit/2204);
		
		});
		
		$("#Miles").keyup(function() {
			  //xTriggered++;
			  
			  var speed_in_miles = $("#Miles").val();
			 // alert("Hello");
		if($.isNumeric(speed_in_miles)){
		$('#kph').val(speed_in_miles*1.61);
		
		$('#knots').val(speed_in_miles/1.15);
		
		$('#meters_second').val(speed_in_miles*0.44704);
			}
			else
			{
			alert("Please enter a valid numeric value for speed conversion!");
			}
		});
		
		$("#kph").keyup(function() {
			  //xTriggered++;
			  
		var speed_in_kph = $("#kph").val();
		if($.isNumeric(speed_in_kph)){
		$('#Miles').val(speed_in_kph/1.61);
		
		$('#knots').val(speed_in_kph/3);
		
		$('#meters_second').val(speed_in_kph*0.54704);
			}
			else
			{
			alert("Please enter a valid numeric value for speed conversion!");
			}
		});
		
		// For Knots conversions 
		$("#knots").keyup(function() {
			  
		var speed_in_knots = $("#knots").val();
		if($.isNumeric(speed_in_knots)){
		$('#Miles').val(speed_in_knots*1.151);
		
		$('#kph').val(speed_in_knots*1.852);
		
		$('#meters_second').val(speed_in_knots*0.51444);
			}
			else
			{
			alert("Please enter a valid numeric value for speed conversion!");
			}
		});
		
		// For m/s conversions 
		$("#meters_second").keyup(function() {
			  
		var meters_second = $("#meters_second").val();
		if($.isNumeric(meters_second)){
		$('#Miles').val(meters_second/0.54704);
		
		$('#kph').val(meters_second/0.44704);
		
		$('#knots').val(meters_second/0.51444);
			}
			else
			{
			alert("Please enter a valid numeric value for speed conversion!");
			}
		});
});
