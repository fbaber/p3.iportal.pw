
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
			data: { name: "John", location: "Boston" }*/
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
    
		// alert(currency1 + ' ' + currency2 + ' ' + value);
		
		var page = 'result.php';
		$.ajax({
		type: "POST",
		url: page,
		data: { currency1: currency1, currency2: currency2, value: value }
		})
		.done(function( msg ) {
		$(".content").html(msg);
		});
		die();
		
		
		//validation code goes here.
		//example code
		/*
		var entered_values ='';
		var val = $("#input1").val();
		var val1 = $("#currency").val();
		
		var check = 1;
		
		if(val != '' && $.isNumeric(val) &&  val > 0)
		{
			entered_values = 'Entered Value :'+val;
			//alert('Entered Value : '+val);
		}else{
			
			$("#input1").val('');
			//alert('Enter a valid numeric value');
			
			//or we can 
			$("#errorlbl").css("color", "red");
			$("#errorlbl").text('Enter a Valid Numeric Value');
			
			$("#input1").focus();
			check = 0;
		}
		
		if(val1 != 0)
		{
			entered_values += '  Selected Currency :'+val1;
		}else{
			
			$("#errorlbl1").css("color", "red");
			$("#errorlbl1").text('Select a Value');
			
			$("#currency").focus();
			check = 0;
		}
		
		if(check ==1){
			alert(entered_values);
		}
		*/
		
		//ajax calling for calculations 
		
		/*
		var temp = $("#temp").val();
		
		
		var To_temp = $("#degree").val();
		//alert(To_temp);
		
		if(To_temp=='F'){
			//alert("Temp in Celsius"+temp);
			$(".content").html("<h1>Temp in Celsius</h1>:"+((temp-32)*5/9));
			
		}
		else
		{
		
		alert("Temp in Faren");
		}
		
		*/
		
		
		
		/*
		$.ajax({
				type: "POST",
				url: page,
				data: { temprature: temp, convertto: "f" }
				})
				.done(function( msg ) {
				$(".content").html(msg);
		});
		*/
	

	});

	
});
