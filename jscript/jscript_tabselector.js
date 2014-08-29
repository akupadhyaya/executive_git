$(function(){ idfyCurrentPage(); });

function idfyCurrentPage(){
var location = window.location+'';
var locationArr = location.split('/');
$('a[href='+location+']').addClass('current');
$('a[href='+locationArr[locationArr.length-1]+']').addClass('current');

}