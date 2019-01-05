$(function (){
	

	
	$(document).on('change keydown paste input', '#weigthInput, #weigthinputUnit, #weigthoutputUnit', function(){
		var wegInput = $('#weigthInput').val();
		var outputUnit = $('#weigthoutputUnit').val();
		var inputUnit = $('#weigthinputUnit').val();

	

		$.post('ajax/weigth.php', {wegInput: wegInput, inputUnit: inputUnit, outputUnit: outputUnit}, function(data) {		
      		$('#weigthOutput').attr('value', data);
		});
	
	});
	
});
	
