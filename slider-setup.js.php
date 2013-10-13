<?php
include "load_config.php";
?>

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
var slider=new Array();
slider[1]=new Object();
slider[1].min=0;
slider[1].max=<?php echo $max_volume; ?>;
slider[1].val=0;
slider[1].onchange=setBoxValue;

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function setBoxValue(val, box) {
    var b=document.getElementById('output'+box);
	//val=Math.round(val*1000)/1000;
	val=Math.round(val);
	b.value=val;
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
