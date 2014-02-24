<html>
<head><title>eBrochure</title>

<style>
.err
{
	font-family : Verdana, Helvetica, sans-serif;
	font-size : 12px;
	color: red;
}
.error_strings{ font-family:Verdana; font-size:14px; color:#660000; background-color:#ff0;}

.wrapper {position: relative;
top: 20%;
left: 50%;
margin-top: -50px;
margin-left: -50px;
width: 100px;
height: 100px;}

.logo { width:250px;}

</style>

<script language="JavaScript" src="scripts/gen_validatorv4.js" type="text/javascript"></script>

</head>
<body>
<div class = "wrapper">

<?php if($_POST['type'] == 'outdoor_furniture'): ?>

<img class = "logo" src = "images/tw-logo-fb.png" />
<form action="step3.php" method="post" id = "optionform" name = "optionform">
 

What type of outdoor furniture are you looking for?<br/>

<input type = "radio" name = "furniture" value = "accent_tables" checked> Accent Tables<br/>
<input type = "radio" name = "furniture" value = "coffee_tables"> Coffee Tables<br/>
<input type = "radio" name = "furniture" value = "patio_and_picnic_table_sets"> Patio and Picnic Table Sets<br/>
<input type = "radio" name = "furniture" value = "park_and_garden_benches" > Park and Garden Benches<br/>
<input type = "radio" name = "furniture" value = "settee_gliders" > Settee Gliders<br/>
<input type = "radio" name = "furniture" value = "stationary_and_folding_chairs" > Stationary and Folding Chairs<br/>
<input type = "radio" name = "furniture" value = "chaise_lounges" > Chaise Lounges<br/>
<input type = "radio" name = "furniture" value = "gliders" > Gliders<br/>
<input type = "radio" name = "furniture" value = "ottomans" > Ottomans<br/>
<input type = "radio" name = "furniture" value = "porch_swings" > Porch Swings<br/>
<input type = "radio" name = "furniture" value = "rocking_chairs"> Rocking Chairs<br/>
<input type = "radio" name = "furniture" value = "cushions"> Cushions<br/><br/>


<input type="submit" name="formSubmit" value="Submit" />
 
</form>




<?php else: ?>
Error: No valid option selected

<?php endif; ?>



</div>

</body>
</html>