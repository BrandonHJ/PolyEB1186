<?php

require_once 'models.php';


function UploadImage()
    //returns false upon fail, otherwise returns a status object containing the name, type, size, and location of uploaded file
{
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);
    if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/jpg")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/x-png")
        || ($_FILES["file"]["type"] == "image/png"))
        && ($_FILES["file"]["size"] < 200000) //must be under 200kb
        && in_array($extension, $allowedExts))
    {
        if ($_FILES["file"]["error"] > 0)
        {
            //echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
            $status = new stdClass();
            $status->name = "images/products/" . $_FILES["file"]["name"];
            $status->type = $_FILES["file"]["type"];
            $status->size = $_FILES["file"]["size"];
            $status->error = 1;
            $status->errormessage = "Cannot upload image: Return Code: " . $_FILES["file"]["error"];
            return $status;
        }
        else
        {
            //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
            //echo "Type: " . $_FILES["file"]["type"] . "<br>";
            //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
            //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

            if (file_exists("images/products/" . $_FILES["file"]["name"]))
            {

                $status = new stdClass();
                $status->name = "images/products" . $_FILES["file"]["name"];
                $status->type = $_FILES["file"]["type"];
                $status->size = $_FILES["file"]["size"];
                $status->error = 1;
                $status->errormessage = "Cannot upload image - " . $_FILES["file"]["name"] . " already exists. ";
                return $status;
            }
            else
            {
                move_uploaded_file($_FILES["file"]["tmp_name"],
                    "images/products/" . $_FILES["file"]["name"]);
                //echo "Stored in: " . "images/" . $_FILES["file"]["name"];

                $status = new stdClass();
                $status->name = "images/products/" . $_FILES["file"]["name"];
                $status->type = $_FILES["file"]["type"];
                $status->size = $_FILES["file"]["size"];
                $status->error = $_FILES["file"]["error"];
                $status->errormessage = 'none';
                return $status;
            }
        }
    }
    else
    {
        $status = new stdClass();
        $status->name = "images/products/" . $_FILES["file"]["name"];
        $status->type = $_FILES["file"]["type"];
        $status->size = $_FILES["file"]["size"];
        $status->error = 1;
        $status->errormessage = 'Error: Cannot upload image - Invalid File';
        return $status;
    }

}

?>

<html>
<head>
<title>Product Submission Details</title>

<style>

    .error {color: red;}

</style>
</head>

<body>




<?php



echo "<h1>Submission Details:</h1>";


$successful_submission = true;

$loadtime = $_POST['loadtime'];
$totaltime = time() - $loadtime;

if($totaltime < 5)
{
    echo '<p class = "error">You filled the form out too quickly, or you are a bot. Or possibly both. Please try again, as long as you are a human.</p>';
    $successful_submission = false;
}


if(strlen($_POST['title']) > 2)
{
    $title = htmlentities($_POST['title']);
    echo "<p><strong>Title</strong>: $title </p>";

}
else{
    echo '<p class = "error"><strong>Title</strong>: Invalid Product Title. Please try again.</p>';
    $successful_submission = false;
}

if(isset($_POST['published']))
{
    $published = 1;
    echo '<p><strong>Published</strong>: Yes. This product will be published in the brochure</p>';
}
else
{
    $published = 0;
    echo '<p><strong>Published</strong>: No. This product will not be published in the brochure, but can be published later</p>';
}


switch($_POST['category'])
{
    case 'accent_tables':
        $cat1 = 'furniture';
        $cat2 = 'accent_tables';
        break;
    case 'arbors_and_trellises':
        $cat1 = 'accents';
        $cat2 = 'arbors_and_trellises';
        break;
    case 'bird_feeders':
        $cat1 = 'birds';
        $cat2 = 'bird_feeders';
        break;
    case 'bird_houses':
        $cat1 = 'birds';
        $cat2 = 'bird_houses';
        break;
    case 'chaise_lounges':
        $cat1 = 'furniture';
        $cat2 = 'chaise_lounges';
        break;
    case 'coffee_tables':
        $cat1 = 'furniture';
        $cat2 = 'coffee_tables';
        break;
    case 'cushions':
        $cat1 = 'furniture';
        $cat2 = 'cushions';
        break;
    case 'garden_fencing':
        $cat1 = 'accents';
        $cat2 = 'garden_fencing';
        break;
    case 'gliders':
        $cat1 = 'furniture';
        $cat2 = 'gliders';
        break;
    case 'mailboxes_and_lamp_posts':
        $cat1 = 'accents';
        $cat2 = 'mailboxes_and_lamp_posts';
        break;
    case 'ottomans':
        $cat1 = 'furniture';
        $cat2 = 'ottomans';
        break;
    case 'park_and_garden_benches':
        $cat1 = 'furniture';
        $cat2 = 'park_and_garden_benches';
        break;
    case 'patio_and_picnic_table_sets':
        $cat1 = 'furniture';
        $cat2 = 'patio_and_picnic_table_sets';
        break;
    case 'planters':
        $cat1 = 'accents';
        $cat2 = 'planters';
        break;
    case 'porch_swings':
        $cat1 = 'furniture';
        $cat2 = 'porch_swings';
        break;
    case 'rocking_chairs':
        $cat1 = 'furniture';
        $cat2 = 'rocking_chairs';
        break;
    case 'settee_gliders':
        $cat1 = 'furniture';
        $cat2 = 'settee_gliders';
        break;
    case 'stationary_and_folding_chairs':
        $cat1 = 'furniture';
        $cat2 = 'stationary_and_folding_chairs';
        break;
    case 'windmills_and_lighthouses':
        $cat1 = 'accents';
        $cat2 = 'windmills_and_lighthouses';
        break;
    case 'wishing_wells':
        $cat1 = 'accents';
        $cat2 = 'wishing_wells';
        break;
    default:
        $cat1 = '';
        $cat2 = '';
        $successful_submission = false;
        echo '<p class = \"error\">Invalid Category</p>';
        break;

}

$readable_category = str_replace('_', ' ', $cat2);
$readable_category = ucfirst($readable_category);
echo "<p><strong>Category</strong>: $readable_category </p>";

$specs = htmlentities($_POST['title']);
echo "<p><strong>Specs</strong>: $specs </p>";

$sku = htmlentities($_POST['sku']);
echo "<p><strong>SKU</strong>: $sku </p>";


//Handle price

$price = htmlentities($_POST['price']);
$price = str_replace('$', '', $price);

if(strlen($price) === 0)
{
    echo '<p class = "error"><strong>Price</strong>: Invalid Price. Please try again.</p>';
    $successful_submission = false;
}
else
    echo "<p><strong>Price</strong>: \$ $price </p>";

//Handle colors
$colors = htmlentities($_POST['colors']);
echo "<p><strong>Colors</strong>: $colors </p>";

//Handle image
$status = UploadImage();

if($status->error !== 0)
{
    echo "<p class = \"error\"> $status->errormessage </p>";
    $successful_submission = false;
}
else
{
    $image = $status->name;
    echo '<p>Image successfully uploaded:</p>';
    echo "<img src = '$image' alt = '$image' />";


}

if($successful_submission)
{
    echo '<h3>Success! This product will be added to the database</h3>';
    InsertProduct($title, $published, $cat1, $cat2, $image, $specs, $sku, $price, $colors);
}
else
    echo '<h3 class = "error">There are problems with this submission, and the product has NOT been added</h3>';

//echo '<pre>' . print_r($status, true) .   '</pre>';

echo '<pre>' . print_r($_POST, true) . '</pre>';

//echo '<pre>' . print_r($_FILES, true) . '</pre>';

echo "<p><a href = \"createproduct.php\">Go Back</a></p>";


?>

</body>
</html>