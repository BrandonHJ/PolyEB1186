<?php

function IsChecked($chkname,$value)
{
    if(!empty($_POST[$chkname]))
    {
        foreach($_POST[$chkname] as $chkval)
        {
            if($chkval == $value)
            {
                return true;
            }
        }
    }
    return false;
}

$product_category = $_POST;
//print_r($product_category);


if(isset($_POST['furniture']))
{	
	$product_step1 = 'Outdoor Furniture';
	$product_category = $_POST['furniture'];
}
elseif(isset($_POST['accents']))
{
	$product_step1 = 'Outdoor Accents';
	$product_category = $_POST['accents'];
}
elseif(isset($_POST['birds']))
{
	$product_step1 = 'Bird Houses / Bird Feeders';
	$product_category = $_POST['birds'];
}
	
else
	$product_category = null;
	
?>



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
<div class = "wrapper-step3">

<img class = "logo" src = "images/polyoutdoor.png" />
<h2 class = "center-text">Step 3</h2>

<!-- <h3 class = "center-text"><?php echo $product_step1 . ' -> ' . ucwords(str_replace('_', ' ', $product_category)); ?></h3> -->
<!-- <h3 class = "center-text">Choose which products you might be interested in:</h3> -->
<form action="submit.php" method="post" id = "optionform" name = "optionform">

<?php

if(isChecked('furniture', 'accent_tables'))
   include 'products/accent_tables.php';

if(isChecked('accents', 'arbors_and_trellises'))
    include 'products/arbors_and_trellises.php';

if(isChecked('birds', 'bird_feeders'))
    include 'products/bird_feeders.php';

if(isChecked('birds', 'bird_houses'))
    include 'products/bird_houses.php';

if(isChecked('furniture', 'chaise_lounges'))
    include 'products/chaise_lounges.php';

if(isChecked('furniture', 'coffee_tables'))
    include 'products/coffee_tables.php';

if(isChecked('furniture', 'cushions'))
    include 'products/cushions.php';

if(isChecked('accents', 'garden_fencing'))
    include 'products/garden_fencing.php';

if(isChecked('furniture', 'gliders'))
    include 'products/gliders.php';

if(isChecked('accents', 'mailboxes_and_lamp_posts'))
    include 'products/mailboxes_and_lamp_posts.php';
    

if(isChecked('furniture', 'ottomans'))
    include 'products/ottomans.php';

if(isChecked('furniture', 'park_and_garden_benches'))
    include 'products/park_and_garden_benches.php';

if(isChecked('furniture', 'patio_and_picnic_table_sets'))
    include 'products/patio_and_picnic_table_sets.php';

if(isChecked('accents', 'planters'))
    include 'products/planters.php';

if(isChecked('furniture', 'porch_swings'))
    include 'products/porch_swings.php';

if(isChecked('furniture', 'rocking_chairs'))
    include 'products/rocking_chairs.php';

if(isChecked('furniture', 'settee_gliders'))
    include 'products/settee_gliders.php';

if(isChecked('furniture', 'stationary_and_folding_chairs'))
    include 'products/stationary_and_folding_chairs.php';

if(isChecked('accents', 'windmills_and_lighthouses'))
    include 'products/windmills_and_lighthouses.php';

if(isChecked('accents', 'wishing_wells'))
    include 'products/wishing_wells.php';


?>

    <div class = "block"></div>

<div class = "center-text">
<div id='myform_Name_errorloc' class="error_strings"></div>
Name: <input type = "text" name = "Name"><br/><br/></div>


<div class = "center-text">
<div id='myform_Email_errorloc' class="error_strings"></div>
E-mail Address: <input type = "text" name = "Email"><br/><br/></div>

<div class = "center-text">
<div id='myform_Phone_errorloc' class="error_strings"></div>
Phone Number: <input type = "text" name = "Phone"><br/><br/></div>

 
<input class = "submit-button block" type="submit" name="formSubmit" value="Submit" />
 
</form>

    <p class = "center-text">
<a  href = "index.php">Start Over</a></p>


</div>
<script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("optionform");
//remove the following two lines if you like error message box popups
frmvalidator.EnableOnPageErrorDisplay();
frmvalidator.EnableMsgsTogether();

frmvalidator.addValidation("Name","req","Please provide your name"); 
frmvalidator.addValidation("Phone","req","Please provide your phone number");
frmvalidator.addValidation("Email","req","Please provide your email"); 
frmvalidator.addValidation("Email","email","Please enter a valid email address"); 
frmvalidator.addValidation("Email","email");
</script>


</body>
</html>