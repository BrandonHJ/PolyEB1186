<?php

//define('FPDF_FONTPATH','../fpdf17/font/');

require('../../fpdf17/fpdf.php');

require('PolyoutdoorConfig.class.php');

//print_r($_POST);


class PDF extends FPDF
{
	/*function AcceptPageBreak()
	{
		$y = $this->GetY() % 297;

		if($y === 0)
			return true;
		else
			return false;

	}*/

	public $product_count = 0;
    public $current_category = 'first';
	
	
	const DPI = 96;
    const MM_IN_INCH = 25.4;
    const A4_HEIGHT = 297;
    const A4_WIDTH = 210;
    // tweak these values (in pixels)
    const MAX_WIDTH = 800;
    const MAX_HEIGHT = 500;
    
    
 
    function pixelsToMM($val) {
        return $val * self::MM_IN_INCH / self::DPI;
    }
 
    function resizeToFit($imgFilename) {
        list($width, $height) = getimagesize($imgFilename);
 
        $widthScale = self::MAX_WIDTH / $width;
        $heightScale = self::MAX_HEIGHT / $height;
 
        $scale = min($widthScale, $heightScale);
 
        return array(
            round($this->pixelsToMM($scale * $width)),
            round($this->pixelsToMM($scale * $height))
        );
    }
 
    function centreImage($img) {
        list($width, $height) = $this->resizeToFit($img);
 
        // you will probably want to swap the width/height
        // around depending on the page's orientation
        $this->Image(
            $img, (self::A4_HEIGHT - $width) / 2,
            (self::A4_WIDTH - $height) / 2,
            $width,
            $height
        );
    }

	function InsertFrontCover($image)
	{
		
		$this->Image($image, null, null, 8.5,11);
	}

	function InsertBackCover($image)
	{
		
		$this->AddPage();
		$this->SetXY(0,0);
		$this->Image($image, null, null, 8.5,11);
	}

    function InsertOptionData($object, $x, $y)
    {
        $image = $object->image;
        $title = $object->title;
        $price = $object->price;
        $price = number_format((float)$price, 2);


        $specs = $object->specs;
        $description = $object->description;

        //Output object's image
        $this->Image($image, $x + .24, $y + .24, 1.54, 1.54);

        //Output object's title

        $this->setX($x + 2.02);
        //$this->setY($y + .24);
        $this->setY($y + .48);
        $this->setTextColor(96,57,19);
        $this->SetFontSize(9);
        //$this->MultiCell(1.64, 11, $title, 0, 'C');
        //$this->MultiCell(1.64, 11, 'test');
        //$this->Text($x + 2.02, $y + .24, 'test');
        if(strlen($title) > 20)
        {
            //get strpos of first space after position 20

            $title2 = substr($title, 20);

            $position = strpos($title2, ' ');
            if($position === false)
            {
                $title2 = null;
            }
            else
            {
                $title2 = substr($title, $position+21);
                $title = substr($title, 0, $position+20);
            }


        }
        $this->Text($x + 2.02, $y + .48, $title);
        if(isset($title2))
            $this->Text($x + 2.02, $y + .68, $title2);

        //Output object's price

        $this->setTextColor(68,4,0);

        $this->Text($x + 2.02, $y + 1.33, '$' . $price);






    }
	//function InsertOption($image, $title, $specs, $description)
	function InsertOption($object)
	{


        $subcategory = $object->subcategory;



        //function InsertOption($image, $title, $specs, $description)
        //if product_count is 8, and we are in the same category,
        //insert a new page with the mini cat header at top and reset product_count

        if($subcategory == $this->current_category && $this->product_count == 8)
        {

            $this->AddPage();
            $this->product_count = 0;
            //insert mini cat header at (x,y) of (.28, .382), and it should be 7.94 inches wide and 1.01 inches tall

        }

        //if category of current object is different than last catgory, insert a new page, add the caterogy header
        //to the top of the page, and set product_count to 2 (so that products get inserted in third vertical position)
        if($subcategory != $this->current_category)
        {

            $this->AddPage();
            $this->product_count = 2;
            $this->current_category = $subcategory;
            //insert main category header at (x,y) of (.28, .382), and it should be 7.94 inches wide and 3.412 inches tall


            switch($subcategory) {
                case 'accent_tables':
                    $this->Image('images/accent-table.png', .28, .382, 7.94, 3.412);
                    break;

                case 'arbors_and_trelises':
                    $this->Image('images/place-holder.png', .28, .382, 7.94, 3.412);
                    break;

                case 'bird_feeders':
                    $this->Image('images/place-holder.png', .28, .382, 7.94, 3.412);
                    break;

                case 'bird_houses':
                    $this->Image('images/place-holder.png', .28, .382, 7.94, 3.412);
                    break;

                case 'chaise_lounges':
                    $this->Image('images/chaise-lounges.png', .28, .382, 7.94, 3.412);
                    break;

                case 'coffee_tables':
                    $this->Image('images/coffee-table.png', .28, .382, 7.94, 3.412);
                    break;

                case 'cushions':
                    $this->Image('images/cushions.png', .28, .382, 7.94, 3.412);
                    break;

                case 'garden_fencing':
                    $this->Image('images/place-holder.png', .28, .382, 7.94, 3.412);
                    break;

                case 'gliders':
                    $this->Image('images/gliders.png', .28, .382, 7.94, 3.412);
                    break;

                case 'mailboxes_and_lamp_posts':
                    $this->Image('images/place-holder.png', .28, .382, 7.94, 3.412);
                    break;

                case 'ottomans':
                    $this->Image('images/ottomans.png', .28, .382, 7.94, 3.412);
                    break;

                case 'park_and_garden_benches':
                    $this->Image('images/park-garden-benches.png', .28, .382, 7.94, 3.412);
                    break;

                case 'patio_and_picnic_table_sets':
                    $this->Image('images/patio-picnic-tables.png', .28, .382, 7.94, 3.412);
                    break;

                case 'planters':
                    $this->Image('images/place-holder.png', .28, .382, 7.94, 3.412);
                    break;

                case 'porch_swings':
                    $this->Image('images/porch-swings.png', .28, .382, 7.94, 3.412);
                    break;

                case 'rocking_chairs':
                    $this->Image('images/rocking-chairs.png', .28, .382, 7.94, 3.412);
                    break;

                case 'settee_gliders':
                    $this->Image('images/settee-gliders.png', .28, .382, 7.94, 3.412);
                    break;

                case 'stationary_and_folding_chairs':
                    $this->Image('images/stationary-folding-chairs.png', .28, .382, 7.94, 3.412);
                    break;

                case 'windmills_and_lighthouses':
                    $this->Image('images/place-holder.png', .28, .382, 7.94, 3.412);
                    break;

                case 'wishing_wells':
                    $this->Image('images/place-holder.png', .28, .382, 7.94, 3.412);
                    break;

                default:
                    $this->Image('images/place-holder.png', .28, .382, 7.94, 3.412);
                    break;





            }
        }



        if($this->product_count == 0)
            $this->InsertOptionData($object, .28, 1.392);

        if($this->product_count == 1)
            $this->InsertOptionData($object, 4.32, 1.392);

        if($this->product_count == 2)
            $this->InsertOptionData($object, .28, 3.794);

        if($this->product_count == 3)
            $this->InsertOptionData($object, 4.32, 3.794);

        if($this->product_count == 4)
            $this->InsertOptionData($object, .28, 6.196);

        if($this->product_count == 5)
            $this->InsertOptionData($object, 4.32, 6.196);

        if($this->product_count == 6)
            $this->InsertOptionData($object, .28, 8.598);

        if($this->product_count == 7)
            $this->InsertOptionData($object, 4.32, 8.598);


        $this->product_count++;


	}

	
}




?>