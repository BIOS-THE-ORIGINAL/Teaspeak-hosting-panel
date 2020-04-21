// JavaScript Document



function open_shut(id){
	var bloc = document.getElementById('show_hide_'+id);
	if(bloc){
		if(bloc.style.display=='none'){
			bloc.style.display='';
		}else{
			bloc.style.display='none';
		}
	}
	return false;
}



function set_add_del(id){
	$("#"+id+' .remove_addit').show();
	$("#"+id+' .add_addit').hide();
	$("#"+id+' .add_addit:last').show();
	$("#"+id+" .dynamic_block:only-child > .remove_addit").hide();
}
function selrem(clickety){
	var id = $(clickety).parent().parent().attr('id'); 
	$(clickety).parent().remove(); 
	set_add_del(id); 
	return false;
}
function seladd(clickety){
	var id = $(clickety).parent().parent().attr('id'); 
	//var box = $('#'+id+' .dynamic_block:last').clone(true);
	var x=0,old_names=[];
	// these pointless looking loops are because IE doesn't handle
	// cloning the name="" part of dynamic input boxes very well... ?
	$('input',$(clickety).parent()).each(function(){
		old_names[x++] = $(this).attr('name');
	});
	$('select',$(clickety).parent()).each(function(){
		old_names[x++] = $(this).attr('name');
	});
	var box = $(clickety).parent().clone(true);
	x = 0;
	$('input',box).each(function(){
		$(this).attr('name', old_names[x++]);
	});
	$('select',box).each(function(){
		$(this).attr('name', old_names[x++]);
	});
	$('input',box).val('');
	//$(clickety).after(box); 
	$('#'+id+' .dynamic_block:last').after( box); 
	set_add_del(id); 
	load_calendars();
	return false;
}
