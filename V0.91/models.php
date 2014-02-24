<?php
require_once 'connect.php';

//function to insert a new row into products table

function InsertProduct($title, $published, $cat1, $cat2, $image, $specs, $sku, $price, $colors)
    //inserts this campaign object into the DB as a new row
{
    $created = date('Y-m-d h:i:s');

    try{

        require 'connect.php';

        $data = array('id' => NULL, 'title' => $title, 'published' => $published, 'cat1' => $cat1, 'cat2' => $cat2, 'image' => $image, 'specs' => $specs, 'sku' => $sku, 'price' => $price, 'colors' => $colors, 'created' => $created);
        $STH = $DBH->prepare("INSERT INTO products (id, title, published, cat1, cat2, image, specs, sku, price, colors, created) value (:id, :title, :published, :cat1, :cat2, :image, :specs, :sku, :price, :colors, :created)");
        $STH->execute($data);

        //$this->id = $DBH->lastInsertId();
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }


}

function EditProduct($id, $title, $published, $cat1, $cat2, $image, $specs, $sku, $price, $colors)
{


    try{

        require 'connect.php';
        $data = array('id' => $id, 'title' => $title, 'published' => $published, 'cat1' => $cat1, 'cat2' => $cat2, 'image' => $image, 'specs' => $specs, 'sku' => $sku, 'price' => $price, 'colors' => $colors);
        $STH = $DBH->prepare("UPDATE products SET  title = :title, published = :published, cat1 = :cat1, cat2 = :cat2, image = :image, specs = :specs, sku = :sku, price = :price, colors = :colors WHERE id = :id");

        $STH->execute($data);


    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }

}

function GetProduct($id)
{
    try{
        require 'connect.php';
        $products = array();
        $STH = $DBH->query("SELECT * from products WHERE id = $id");
        $STH->setFetchMode(PDO::FETCH_ASSOC);

        while($row = $STH->fetch()) {
            $product = new stdClass();
            $product->id = $row['id'];
            $product->title = $row['title'];
            $product->published = $row['published'];
            $product->cat1 = $row['cat1'];
            $product->cat2 = $row['cat2'];
            $product->image = $row['image'];
            $product->specs = $row['specs'];
            $product->sku = $row['sku'];
            $product->price = $row['price'];
            $product->colors = $row['colors'];
            $product->created = $row['created'];
            array_push($product, $products);

        }

        return $product;
    }

    catch(PDOException $e) {
        echo $e->getMessage();
    }

}

function GetProductsByCat($cat2)
//returns an array of product objects that have a cat2 value of $cat2
{
    try{
        require 'connect.php';
        $products = array();
        $STH = $DBH->query("SELECT * from products WHERE cat2 = '$cat2'");
        $STH->setFetchMode(PDO::FETCH_ASSOC);

        while($row = $STH->fetch()) {
            $product = new stdClass();
            $product->id = $row['id'];
            $product->title = $row['title'];
            $product->published = $row['published'];
            $product->cat1 = $row['cat1'];
            $product->cat2 = $row['cat2'];
            $product->image = $row['image'];
            $product->specs = $row['specs'];
            $product->sku = $row['sku'];
            $product->price = $row['price'];
            $product->colors = $row['colors'];
            $product->created = $row['created'];
            array_push($products, $product);

        }

        return $products;
    }

    catch(PDOException $e) {
        echo $e->getMessage();
    }
}

function GetNextID()
//This will return the ID that will be the id associated with the next row that will be added to the products table
{
    try{
        require 'connect.php';
        $STH = $DBH->query("SELECT id from products ORDER BY id DESC limit 0, 1");
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $STH->fetch()) {
            $id = $row['id'];

        }

        return $id + 1;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }

}

//InsertProduct('test product', 'furniture', 'accent_furniture', 'images/blah.jpg', '4"H x 45"W', 'TEST123', '234', 'colors here');

//EditProduct(9, 'test2', 'furniture', 'accent_tables', 'images/blah2.jpg', '4"H x 45"W', 'TEST123', '233', 'colors here!!');




echo GetNextID();



?>