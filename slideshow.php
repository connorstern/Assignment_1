<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
var Image = new Array("images/dylon.png", "images/creek.png", "images/trees.png");
var Image_Number = 0;
var Image_Length = Image.length - 1;

function change_image(num){
	Image_Number = Image_Number + num;
	if (Image_Number > Image_Length){
		Image_Number=0;
	}
	
	if (Image_Number < 0){
		Image_Number = Image_Length;
		
	}
	document.slideshow.src= Image[Image_Number];
	return false;
}

</script>
<img src="images/reservior/dylon large.png" name="slideshow"/>
<table>
	<tr>
    	<td align="left"><a href="" onClick="return change_image(-1)"><img src="images/favicon.png"></a></td>
        <td align="right"><a href="" onClick="return change_image(1)">Next</a></td>
   </tr>
</table>
</body>
</html>
