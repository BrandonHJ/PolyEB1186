<html>
<head><title>eBrochure</title>



<link rel="stylesheet" href="styles.css" type="text/css" />



<script language="JavaScript" src="scripts/gen_validatorv4.js" type="text/javascript"></script>

    <style>
        /*#optionform img{ width:150px; margin-left:40px; margin-bottom:20px; display:block;}*/
        #optionform img{width:80%; margin-left:10%; height:126px;}
        .span4 {width:25%; float:left; height:225px;}
        .logo {margin-left:auto; margin-right: auto; display:block;}
        .center-text {text-align:center;}
        .block {display:block; clear:both;}
    </style>
</head>
<body>
<div class = "wrapper-step2">



<?php if($_POST['type'] == 'outdoor_furniture'): ?>


<img class = "logo" src = "images/polyoutdoor.png" />
    <h2 class = "center-text">Step 2</h2>
<form action="step3.php" method="post" id = "optionform" name = "optionform">
 

<h3 class = "center-text">What type of Outdoor Furniture are you looking for?</h3><br/>

    <div class = "span4">
<input type = "checkbox" name = "furniture[]" value = "accent_tables" id = "accent_tables" checked>
    <label for = "accent_tables">Accent Tables <a href = "http://polyoutdoorfurniture.com/outdoor-furniture/accent-tables" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/accent_tables/accent_tables.jpg" /></label></div>

<div class = "span4">
<input type = "checkbox" name = "furniture[]" value = "coffee_tables" id = "coffee_tables">
    <label for = "coffee_tables">Coffee Tables <a href = "http://polyoutdoorfurniture.com/outdoor-furniture/coffee-tables" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/coffee_tables/coffee-tables.jpg" /></label></div>

<div class = "span4">
<input type = "checkbox" name = "furniture[]" value = "patio_and_picnic_table_sets" id = "patio_and_picnic_table_sets">
    <label for = "patio_and_picnic_table_sets">Patio and Picnic Table Sets <a href = "http://polyoutdoorfurniture.com/outdoor-furniture/patio-picnic-table-sets" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/patio_picnic_table_sets/patio_picnic_table_sets.jpg" /></label></div>

<div class = "span4">
<input type = "checkbox" name = "furniture[]" value = "park_and_garden_benches" id = "park_and_garden_benches" >
    <label for = "park_and_garden_benches">Park and Garden Benches <a href = "http://polyoutdoorfurniture.com/outdoor-furniture/park-garden-benches" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/park_garden_benches/park_garden_benches.jpg" /></label></div>


<div class = "span4">
<input type = "checkbox" name = "furniture[]" value = "settee_gliders" id = "settee_gliders">
    <label for = "settee_gliders">Settee Gliders <a href = "http://polyoutdoorfurniture.com/outdoor-furniture/settee-gliders" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/settee_gliders/settee_gliders.jpg" /></label></div>

<div class = "span4">
<input type = "checkbox" name = "furniture[]" value = "stationary_and_folding_chairs" id = "stationary_and_folding_chairs">
    <label for = "stationary_and_folding_chairs">Stationary and Folding Chairs <a href = "http://polyoutdoorfurniture.com/outdoor-furniture/stationary-folding-chairs" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/stationary_folding_chairs/stationary_folding_chairs.jpg" /></label></div>

<div class = "span4">
<input type = "checkbox" name = "furniture[]" value = "chaise_lounges" id = "chaise_lounges">
    <label for = "chaise_lounges">Chaise Lounges <a href = "http://polyoutdoorfurniture.com/outdoor-furniture/chaise-lounges" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/chaise_lounges/chaise_lounges.jpg" /></label></div>

<div class = "span4">
<input type = "checkbox" name = "furniture[]" value = "gliders" id = "gliders" >
    <label for = "gliders">Gliders <a href = "http://polyoutdoorfurniture.com/outdoor-furniture/gliders" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/gliders/gliders.jpg" /></label></div>

 <div class = "span4">
<input type = "checkbox" name = "furniture[]" value = "ottomans" id = "ottomans">
    <label for = "ottomans">Ottomans <a href = "http://polyoutdoorfurniture.com/outdoor-furniture/ottomans" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/ottomans/ottomans.jpg" /></label></div>

<div class = "span4">
<input type = "checkbox" name = "furniture[]" value = "porch_swings" id = "porch_swings">
    <label for = "porch_swings">Porch Swings <a href = "http://polyoutdoorfurniture.com/outdoor-furniture/porch-swings" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/porch_swings/porch_swings.jpg" /></label></div>

<div class = "span4">
<input type = "checkbox" name = "furniture[]" value = "rocking_chairs" id = "rocking_chairs">
    <label for = "rocking_chairs">Rocking Chairs <a href = "http://polyoutdoorfurniture.com/outdoor-furniture/rocking-chairs" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/rocking_chairs/rocking_chairs.jpg" /></label></div>

<div class = "span4">
<input type = "checkbox" name = "furniture[]" value = "cushions" id = "cushions">
    <label for = "cushions">Cushions <a href = "http://polyoutdoorfurniture.com/outdoor-furniture/cushions" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/cushions/cushions.jpg" /></label></div>

<br/>


<input class = "submit-button block" type="submit" name="formSubmit" value="Submit" />
 
</form>

<?php elseif($_POST['type'] == 'outdoor_accents'): ?>

<img class = "logo" src = "images/polyoutdoor.png" />
<form action="step3.php" method="post" id = "optionform" name = "optionform">


<h3 class = "center-text">What type of Outdoor Accents are you looking for?</h3><br/>

<div class = "span4">
<input type = "checkbox" name = "accents[]" value = "arbors_and_trellises" id = "arbors_and_trellises" checked>
    <label for = "arbors_and_trellises">Arbors and Trellises <a href = "http://polyoutdoorfurniture.com/outdoor-accents/arbors-trellises" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/arbors_and_trellises/arbors_and_trellises.jpg" /></label></div>

<div class = "span4">
<input type = "checkbox" name = "accents[]" value = "mailboxes_and_lamp_posts" id = "mailboxes_and_lamp_posts">
    <label for = "mailboxes_and_lamp_posts">Mailboxes and Lamp Posts <a href = "http://polyoutdoorfurniture.com/outdoor-accents/mailboxes-lamp-posts" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/mailboxes_and_lamp_posts/mailboxes_and_lamp_posts.jpg" /></label></div>


<div class = "span4">
<input type = "checkbox" name = "accents[]" value = "wishing_wells" id = "wishing_wells">
    <label for = "wishing_wells">Wishing Wells <a href = "http://polyoutdoorfurniture.com/outdoor-accents/wishing-wells" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/wishing_wells/wishing_wells.jpg" /></label></div>


<div class = "span4">
<input type = "checkbox" name = "accents[]" value = "garden_fencing" id = "garden_fencing">
    <label for = "garden_fencing">Garden Fencing <a href = "http://polyoutdoorfurniture.com/outdoor-accents/garden-fencing" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/garden_fencing/garden_fencing.jpg" /></label></div>

<div class = "span4"></div>

<div class = "span4">
<input type = "checkbox" name = "accents[]" value = "windmills_and_lighthouses" id = "windmills_and_lighthouses">
    <label for = "windmills_and_lighthouses">Windmills and Lighthouses <a href = "http://polyoutdoorfurniture.com/outdoor-accents/windmills-lighthouses" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/windmills_and_lighthouses/windmills_and_lighthouses.jpg" /></label></div>


<div class = "span4">
<input type = "checkbox" name = "accents[]" value = "planters" id = "planters">
    <label for = "planters">Planters <a href = "http://polyoutdoorfurniture.com/outdoor-accents/planters" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/planters/planters.jpg" /></label></div>

<br/>


<input class = "submit-button block" type="submit" name="formSubmit" value="Submit" />
 
</form>

<?php elseif($_POST['type'] == 'birdfeeders'): ?>

<img class = "logo" src = "images/polyoutdoor.png" />
<form action="step3.php" method="post" id = "optionform" name = "optionform">


<h3 class = "center-text">Are you looking for Bird Feeders or Bird Houses?</h3><br/>

<div class = "span4"></div>
<div class = "span4">
<input type = "checkbox" name = "birds[]" value = "bird_feeders" id = "bird_feeders" checked>
    <label for = "bird_feeders">Bird Feeders <a href = "http://polyoutdoorfurniture.com/for-the-birds/bird-feeders" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/bird_feeders/bird_feeders.jpg" /></label></div>

<div class = "span4">
<input type = "checkbox" name = "birds[]" value = "bird_houses" id = "bird_houses">
    <label for = "bird_houses">Bird Houses <a href = "http://polyoutdoorfurniture.com/for-the-birds/bird-houses" class = "learnmore" target = "blank">Learn More</a><br/>
    <img src = "images/products/bird_houses/bird_houses.jpg" /></label></div>

<br/>


<input class = "submit-button block" type="submit" name="formSubmit" value="Submit" />
 
</form>




<?php else: ?>
Error: No valid option selected

<?php endif; ?>

<p class = "center-text"><a href = "index.php">Back</p>



</div>

</body>
</html>