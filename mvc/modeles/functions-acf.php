<?php
function SC_get_field($selector,$post_id=false,$format_value=true,$return=false){
	if(function_exists('get_field')){
		return get_field($selector,$post_id,$format_value);
	}
	return $return;
}
function SC_the_field($selector,$post_id=false,$format_value=true,$return=''){
	echo SC_get_field($selector,$post_id,$format_value,$return);
}


//gestion tableau image
function SC_get_image_field($selector,$post_id=false,$type=['thumbnail','medium','large'],$format_value=true,$return=false){
	$img = SC_get_field($selector,$post_id,$format_value,$return);
	if( is_array($img) ){
		return '<img src="'.$img['sizes']['thumbnail'].'" alt="'.$img['alt'].'">';
	}
	return $return;
}
function SC_the_image_field($selector,$post_id=false,$type=['thumbnail'],$format_value=true,$return=''){
	echo SC_get_image_field($selector,$post_id,$type,$format_value,$return);
}
