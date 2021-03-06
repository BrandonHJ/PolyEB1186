<?php

class PolyoutdoorConfig
{
    public $title; //string value of the product name in a readable format, like 'Round End Table (Regular Height)'
    public $cat1; //possible values are 'furniture', 'accents', and 'birds'
	public $cat2; //this is the category under category - for example, 'accent_tables' or 'coffee_tables'
	public $image; //this is the string value of the image associated with the product
	public $specs; //this is the string value of the specs, for example 'MODEL:CPOCT DIMENSIONS:26"W X 17"H WEIGHT:30 LBS'
    public $sku;
    public $price;
	public $colors; //this is the string value of the description found on the product pages on the site

	 
	

	public function __construct($title, $cat1, $cat2, $image, $specs, $sku, $price, $colors)
	//constructor
	{
        $this->title = $title;
        $this->cat1 = $cat1;
		$this->cat2 = $cat2;
        $this->image = $image;
        $this->specs = $specs;
        $this->sku = $sku;
        $this->price = $price;
		$this->colors = $colors;

		
	}



	public function isMatch($category, $subcategory, $product)
	//returns true if all conditions match. otherwise, returns false
	{
		
		
		
		if( $category == $this->category && $subcategory == $this->subcategory && $product == $this->product) 
		{
			
			return true;
		}
		else
		{
			
			return false;
			
		}

	}
	
	

}


?>