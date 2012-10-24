( function( $ ) {
var url=window.location.search;
vrai='?sended=true';
faux='?sended=false';
if(url==vrai)
{
$('#feedback').text('Votre message a bien été envoyé').animate({
	height:'2em'
},'normal');
}
if(url==faux)
{
$('#feedback').text('Votre message n´a pu être envoyé').css('color','red').animate({
	height:'2em'
},'normal');
console.log(url);
}

} )( jQuery );