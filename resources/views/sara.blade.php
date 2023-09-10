
function donatepopup() {	
	if($('#donate-popup').length){
		
		//Show Popup
		$('.donate-box-btn').click(function() {
			$('#donate-popup').addClass('popup-visible');
		});
		
		//Hide Popup
		$('.close-donate').click(function() {
			$('#donate-popup').removeClass('popup-visible');
		});
		
	}

	//item popup
	if($('#donate-popup-item').length){
		
		//Show Popup
		$('.donate-box-btn-item').click(function() {
			$('#donate-popup-item').addClass('popup-visible');
		});
		
		//Hide Popup
		$('.close-donate').click(function() {
			$('#donate-popup-item').removeClass('popup-visible');
		});
		
	}
	//service popup
	if($('#donate-popup-service').length){
		
		//Show Popup
		$('.donate-box-btn-service').click(function() {
			$('#donate-popup-service').addClass('popup-visible');
		});
		
		//Hide Popup
		$('.close-donate').click(function() {
			$('#donate-popup-service').removeClass('popup-visible');
		});
		
	}
}