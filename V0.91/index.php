<html>
<head><title>eBrochure</title>

<link rel="stylesheet" href="styles.css" type="text/css" />

<script language="JavaScript" src="scripts/gen_validatorv4.js" type="text/javascript"></script>

    <style>
        #optionform img{ width:150px; margin-left:40px; margin-bottom:20px; display:block;}

    </style>
</head>
<body>
<div class = "wrapper">



<img class = "logo" src = "images/polyoutdoor.png" />
<h2>Step 1: What are you looking for?</h2>
<form action="step2.php" method="post" id = "optionform" name = "optionform">
 



<input type = "radio" name = "type" value = "outdoor_furniture"  id="outdoor_furniture" checked> Outdoor Furniture  <a href = "http://polyoutdoorfurniture.com/outdoor-furniture" class = "learnmore" target = "blank">Learn More</a><br/>
    <label for = "outdoor_furniture"> <img src = "images/furniture.jpg" /></label>

<input type = "radio" name = "type" value = "outdoor_accents" id = "outdoor_accents"> Outdoor Accents <a href = "http://polyoutdoorfurniture.com/outdoor-accents" class = "learnmore" target = "blank">Learn More</a><br/>
   <label for = "outdoor_accents"><img src = "images/accents.jpg" /></label>

<input type = "radio" name = "type" value = "birdfeeders" id = "birdfeeders"> Bird Feeders / Bird Houses <a href = "http://polyoutdoorfurniture.com/for-the-birds" class = "learnmore" target = "blank">Learn More</a><br/>
    <label for = "birdfeeders" ><img src = "images/birds.jpg" /></label>

    <br/>
    <br/>

<input class = "submit-button" type="submit" name="formSubmit" value="Submit" />
 
</form>

</div>

</body>
</html>