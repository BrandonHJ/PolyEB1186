<?php
/*
*
*
*
*
First, output a rectangle that has 100% page width, and 25% page height
*/
//it seems that these pdf pages are 210 units wide and 297 units high



//echo '<pre>' . print_r($_POST) . '</pre>';
require('PDF.class.php');

require('PolyoutdoorObjects.php');



//echo 'test123';



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




if(isset($_POST['formSubmit']))
{
//echo 'test123';
//$pdf->AddFont('montserrat', '', '../fpdf17/font/montserrat-regular-webfont.php');
//Set up PDF
    $pdf = new PDF('P','in','Letter');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->SetXY(0,0);
//$pdf->Cell(40,10,'Hello World!');
    $pdf->SetFillColor(0,153,0);
//$pdf->Rect(0, 0, 210, 99, 'F');
//$pdf->Image('images/swingset.jpg', 0, 0, 210, 99);

//$pdf->setTextColor(255,0,0);
//$pdf->MultiCell(0, 6, $text, 0, 'C');

//$pdf->SetFillColor(102,51,255);
//$pdf->Rect(0, 99, 210, 99, 'F');

//$pdf->SetFillColor(255,102,51);
//$pdf->Rect(0, 198, 210, 99, 'F');

    $pdf->SetAutoPageBreak(false);

    $pdf->InsertFrontCover('images/frontcover.jpg');

//check to see if 'Round End Table (Regular Height)' was selected

    include 'PolyoutdoorObjectConditions.php';

    //insert a category header image if you are adding a new product to the brochure and it is in a new category...
    //have a global variable that keeps track of the category, and pass this variable into the function call for each product
    //if product category is different than last product category, insert a new page, and then add the category header image
    //if a new page is needed but the current category is the same as last category,
    //add the mini category header to the top of the page

    $pdf->InsertBackCover('images/colors.jpg');
    $pdf->InsertBackCover('images/backcover.jpg');

//$pdf->Text(20, print_r($_POST, true));

//echo print_r($_POST, true);

//$pdf->AddPage();
//$pdf->SetXY(0,0);

//$pdf->InsertOption('images/swingset2.jpg', 'More example text. This swingset is a state of the art, Mark 2 X5P5100-S model, with built in disrupter rays and photon torpedos.');




//define a function which inserts a section which is 1/3 of the page high, it contains an image and some text


    $pdf->Output('TestPolyOutdoorBrochure.pdf', 'D');

}


?>