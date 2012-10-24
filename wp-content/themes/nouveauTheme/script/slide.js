( function( $ ) {
var nb_image= 5;
var url= $('#logo').attr('src');
url = url.replace('logo.png','slideshow/');
console.log(url);
var image_url1;
var image_url2;
var suffix = '.png';

var image_prec;

var setup =function()
{
image_url1=(Math.floor(Math.random()*(nb_image-1))+1);
image_url2=image_url1+1;
var background_value='url('+url+image_url1+suffix+') center no-repeat';
$('#slide').css('background',background_value).animate({ 
	height:'25em',
	marginBottom:'3em',
},"slow");
console.log(nb_image);


}

setup();


var slide=function()
{

$("#slide").animate({
	width:'0%'
},"slow")
var background_value2='url('+url+image_url2+suffix+') center no-repeat';
$('#slide2').css('background',background_value2);
$("#slide2").animate({
	width:'100%'
},"slow", reinit);
function reinit(){
$('#slide').css({
	width:'100%',
	background:background_value2
	});

$('#slide2').css({
	width:'0%'
});
if (image_url2+1<=nb_image) {
	image_url1=image_url2;
	image_url2=image_url2+1;
}
else
{
	image_url1=1;
	image_url2=1;
	console.log('reinit');
}
}
}
window.setInterval(slide,5000);
} )( jQuery );