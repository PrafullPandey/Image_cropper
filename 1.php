<html>
<head>
<link rel="stylesheet" type="text/css" href="image.css">
<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript" src="jquery/jquery-ui.js"></script>
<script type="text/javascript" src="jquery/jquery-ui.min.js"></script>


</head>
<body>

<?php

	$photo ="11.jpg";
?>
<div class ="image_class"><img src="<?php echo $photo;?>" width="100%" height="100%" id="cropimage"/>

<div id = "crop_tool"></div>
</div>
<div class="bar">
<div class="section"><center><button onclick="check()" >check</button></center></div>
<div class="section">
<div class="btn"></div>
<div class="btn"><button onclick="zoom_in()" id="zoom_in" >Zoom in</button></div>
<div class="btn"></div>
</div>
<div class="section"><center><button onclick="zoom_out()"  >Zoom out</button></center></div>
</div>
<br><br><br><br><br><br><br><br><br><br>

<br>




<?php

?>
<script type="text/javascript">

var  a={
	count:1,topIndex:'',leftIndex:'',flag:0,
};
var b={
	Imagetop:'' , Imageleft:'',
};
function zoom_in()
{		
		a.flag=0;
		if(a.count<=2)
		{
		a.count=a.count+0.05;
		
		}
		else 
		alert('cannot zoom further');
	
	   $("#cropimage").css("transform","scale("+a.count+")");
	   
	   
}
function zoom_out()
{		
	a.flag=0;
		if(a.count>=0.5)
	   a.count=a.count-0.05;
		else 
		alert('orignal size reached');
	   $("#cropimage").css("transform","scale("+a.count+")");
	   
	   
	   
}
$(function (){
		
		a.topIndex = $("#crop_tool").position().top;
		a.leftIndex = $("#crop_tool").position().left;
		b.Imagetop = $("#cropimage").position().top;
		b.Imageleft = $("#cropimage").position().left;
		$("#cropimage").draggable();
		
}
);
function check(){
		
		a.topIndex = $("#crop_tool").position().top;
		a.leftIndex = $("#crop_tool").position().left;
		b.Imagetop = $("#cropimage").position().top;
		b.Imageleft = $("#cropimage").position().left;
		a.topIndex=a.topIndex-b.Imagetop;
		a.leftIndex=a.leftIndex-b.Imageleft;
		
		alert('Top Left x-coordinate: '+a.topIndex + ' | Top Left y-coordinate: ' + a.leftIndex );
}


</script>
<!--<script type="text/javascript" src="jquery/cropscript.js"></script>-->
</body>
</html>