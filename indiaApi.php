
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	<title>Corona live case by jitendra</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<style type="text/css">
		

*{

	margin:0;
	padding:0;
}

table{

	width:100%;
   
  
}

.heading{
    
    padding-right:px;
    padding-bottom: px;
    text-align: center;
    background-color:;
   /*  background:url('https://source.unsplash.com')no-repeat center center/cover;*/
   border: 2px solid black; 
   font-weight:bold;
   
   
}

.top{

  
   padding-right:10px;
    padding-bottom:10px;
    padding-top:8px;
    text-align: center;
    background-color:red;
    color:#FFFAFA;
    font-weight:bold;
	
}

#icon{

   padding:8px;
   font-size:18px;
}

#head{width: 100%;
    display: flex;
    justify-content:center;
    justify-items: center;
   background-color:;
 
   
   color:#F8F8FF;
}


#body1{

	overflow-y:auto;

}


	</style>
</head>


<body>
	<div id="head">	
		<img src="corona.png"  width="20%">

<marquee  style="background-color:lightblue" width="100%">
	<br><br>
<h1 style="color:#FF4500 ">CORONA LIVE UPDATE <h5 style="color:#FF00FF">&nbsp &nbsp &nbsp &nbsp &nbsp LIVE UPDATE FROM JITENDRA</h5></h1>


</marquee>

</div>

<table  border="2px">

<thead >
<tr >
	<td class="top"><i class="fas fa-city" id="icon"></i><span>	CITY_NAME</span></td>
	<td  class="top" ><i class="far fa-calendar-plus" id="icon"></i><span>CONFIRMED_CASE</span></td>
	<td  class="top"><i class="fas fa-briefcase-medical" id="icon"></i><span>DISCHARGE</span></td>
	<td  class="top"><i class="fas fa-skull-crossbones" id="icon"></i><span>DEATH</span></td>
	<td  class="top"> <i class="fas fa-clipboard-check" id="icon"> </i><span>TOTAL_CONFIRMED_CASE</span></td>
	
		
		

	</tr>
</thead>
</div>

<div  id="body1">
<tbody>
<?php

$data=file_get_contents('https://api.rootnet.in/covid19-in/stats/latest');
		$apidata=json_decode($data, true);
		$realdata=(array)$apidata;
		$len=count($realdata['data']['regional']);
	//	echo  $len;
		echo  "<pre>";
	// print_r($realdata);

	for($i=0; $i<$len; $i++){

	?>
<tr>
		
<td class="heading" style="background-color: #DC143C;color:white;"><?php echo strtoupper($realdata['data']['regional'][$i]['loc']); ?>  <marquee><hr style="background-color:#FFFAFA"></marquee></td>
<td class="heading" style="background-color:#87CEFA;color:white;"><?php echo $realdata['data']['regional'][$i]['confirmedCasesIndian']; ?></td>
<td class="heading" style="background-color:#FFB6C1;color:white;"><?php echo $realdata['data']['regional'][$i]['discharged']; ?></td>
<td class="heading" style="background-color:#98FB98;color:white;"><?php echo $realdata['data']['regional'][$i]['deaths']; ?></td>
<td class="heading" style="background-color:#EE82EE;color:white;"><?php echo $realdata['data']['regional'][$i]['totalConfirmed']; ?></td>
		
</tr>
	</tr>
	<?php

}
?>
</tbody>
</div>

</table>


</body>
</html>