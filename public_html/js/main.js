$(document).ready(function(){$('#button-menu').click(function(){if($('#button-menu').attr('class')=='fa fa-bars'){$('#button-menu').removeClass('fa fa-bars').addClass('fa fa-times-circle');$('.navegacion .menu').css({'left':'0%'});$('.navegacion').css({'background':'rgba(0,0,0,0.4)'});$('.navegacion').css({'height':'100vh'})}
else{$('#button-menu').removeClass('fa fa-times-circle').addClass('fa fa-bars');$('.navegacion .menu').css({'left':'-100%'});$('.navegacion .submenu').css({'left':'-100%'});$('.navegacion').css({'height':'0%'})}});$('.navegacion .menu > .item-submenu a').click(function(){var positionMenu=$(this).parent().attr('menu');$('.item-submenu[menu='+positionMenu+'] .submenu').css({'left':'0'});$('.navegacion .submenu li.go-back').click(function(){$(this).parent().css({'left':'-100%'})})});$('.navegacion ul li .btn-enlace').click(function(){$(this).parent().css({'left':'-100%'});$('.menu').css({'left':'-100%'});$('.navegacion').css({'height':'0%'});$('#button-menu').removeClass('fa fa-times-circle').addClass('fa fa-bars')});$('.navegacion .submenu li a').click(function(){$(this).parent().css({'left':'-100%'});$('.menu').css({'left':'-100%'});$('.navegacion').css({'height':'0%'});$('#button-menu').removeClass('fa fa-times-circle').addClass('fa fa-bars')});var consulta=$("#searchTable").DataTable();$("#inputBusqueda").keyup(function(){consulta.search($(this).val()).draw();$(".header_box").css({"height":"100vh","width":"100vw","background":"rgba(0,0,0,0.5)","display":"flex","align-items":"flex-start","z-index":"9999",})
if($("#inputBusqueda").val()==""){$(".header_box").css({"height":"auto","background":"none","width":"90%",})
$("#search").hide()}else{$("#search").fadeIn("fast");$("#button-menu").css({"height":"98%",});$(".ms-dgjr").css({"height":"100%",});$(".header-top").css({"margin-top":".5em",})}});$("#icon-search").click(function(){$("#inputBusqueda").slideToggle()})
$('tbody tr td a').click(function(){$(".header_box").css({"height":"auto","background":"none",})
$("#search").hide()})})