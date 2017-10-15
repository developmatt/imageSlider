$(document).ready(function(){
	var counter = 0;
	marginLeft = 0;
	$('.front').on('click', function(){
		if(counter < images.length - 1){
			counter++;
			$('.main-image img').attr('src', images[counter]);
			scroll();
		}
	});

	$('.back').on('click', function(){
		if(counter > 0){
			counter--;
			$('.main-image img').attr('src', images[counter]);
			scroll();
		}
	});

	function scroll(){
		if(counter > 2){
			var boxWidth = $('.miniature-box').width();
			marginLeft = (counter - 2) * boxWidth;
			if(marginLeft > ((boxWidth * images.length) - (boxWidth * 5))){
				marginLeft =  ((boxWidth * images.length) - (boxWidth * 5));
			}
			$('.miniature-box').first().css('margin-left', - marginLeft);
		}else{
			$('.miniature-box').first().css('margin-left', 0);
		}
	}
});
