<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	<title>Corona live case by jitendra</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
	<div id="head">	
		<img src="corona.png" >

<marquee  style="background-color:lightblue">
	<br><br>
<h1 style="color:#FF4500 ">CORONA LIVE UPDATE <h5 style="color:#FF00FF">&nbsp &nbsp &nbsp &nbsp &nbsp LIVE UPDATE FROM JITENDRA</h5></h1>

</marquee>
<marquee  style="background-color:lightblue">
	<br><br>
<h1 style="color:#FF4500 ">CORONA LIVE UPDATE <h5 style="color:#008080">&nbsp &nbsp &nbsp &nbsp &nbspLIVE UPDATE FROM JITENDRA</h5></h1>

</marquee>
</div>

<table  border="2px">

<thead >
<tr >
	<td class="top"><i class="fas fa-globe" id="icon"></i><span>COUNTRY</span></td>
	<td  class="top" ><i class="far fa-calendar-plus" id="icon"></i><span>NEW CASE</span></td>
	<td  class="top"><i class="fas fa-briefcase-medical" id="icon"></i><span>TOTAL CASE</span></td>
	<td  class="top"><i class="fas fa-cart-plus" id="icon"></i><span>NEW DEATH</span></td>
	<td  class="top"> <i class="fas fa-skull-crossbones" id="icon"> </i><span>TOTAL DEATH</span></td>
	<td  class="top"> <i class="fas fa-skull-crossbones" id="icon"> </i><span>TOTAL_RECOVERED</span></td>
	<td  class="top"><i class="fas fa-calendar-alt" id="icon"></i><span>DATE</span></td>
		
		
		

	</tr>
</thead>
</div>
<tbody>
	<?php

$coronadataIn_json=file_get_contents('https://api.covid19api.com/summary');
$coronasummary=json_decode($coronadataIn_json, true);
$realData=(array)$coronasummary;
// echo  "<pre>";
//print_r($realData);
$length=count($realData['Countries']);
for($i=0; $i<$length; $i++){

 ?>
 
<tr  id="tb">
	
		
<td  class="heading"  style="background-color:#9400D3;color:white;"><?php echo  strtoupper($realData['Countries'][$i]['Country']);?> <marquee><hr style="background-color:#FFFAFA"></marquee></td>
<td  class="heading" style="background-color:#87CEFA;color:white;" ><?php echo  $realData['Countries'][$i]['NewConfirmed'];?></td>
<td  class="heading"  style="background-color:#FFB6C1;color:white;"><?php echo  $realData['Countries'][$i]['TotalConfirmed'];?> </td>
<td  class="heading" style="background-color:#98FB98;color:white;"><?php echo  $realData['Countries'][$i]['NewDeaths'];?></td>
<td  class="heading"  style="background-color:#EE82EE;color:white;"><?php echo  $realData['Countries'][$i]['TotalDeaths'];?> </td>
<td  class="heading"  style="background-color:#00FFFF ;color:white;"><?php echo  $realData['Countries'][$i]['TotalRecovered'];?></td>
<td  class="heading"  style="background-color:#00FFFF ;color:white;"><?php echo  $realData['Countries'][$i]['Date'];?></td>
</div>
</tr>

<?php 

}

?>

</tbody>

</div>

</table>
<div>
<button id="button">
<i class="fas fa-check" id="icon" ></i>&nbsp &nbsp &nbsp<span><a href="indiaApi.php" >CLICK HERE TO CHECK THE STATUS OF INDIA's  EACH STATE<a/></span></button>
</div>
</body>
</html>