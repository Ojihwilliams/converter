$(function (){
	

	
	$(document).on('change keydown paste input', '#lengthInput, #inputUnit, #outputUnit', function(){
		var lenInput = $('#lengthInput').val();
		var outputUnit = $('#outputUnit').val();
		var inputUnit = $('#inputUnit').val();


		$.post('ajax/length.php', {lenInput: lenInput, inputUnit: inputUnit, outputUnit: outputUnit}, function(data) {		
      		$('#LengthOutput').attr('value', data);
		});
	
	});
	
});
	
