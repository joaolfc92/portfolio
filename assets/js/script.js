$(document).on("click", '[data-toggle="lightbox"]', function(event) {
	event.preventDefault();
	$(this).ekkoLightbox();
  });

$(document).ready(function(){
	$('.icon').hover(function(){
		$(this).find('img').animate({
			'height': 70,
			'width': 70,
		},200)
	},function(){
		$(this).find('img').animate({
			'height': 50,
			'width': 50,
		},200)
	})
})

$(function(){
	$('#inputCel').mask('(00)00000-0000');
	$('#inputTel').mask('(00)0000-0000');
});