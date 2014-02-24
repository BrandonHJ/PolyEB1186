


<html>
<body>

<form action="process-createproduct.php" method="post"
      enctype="multipart/form-data">

    <label for="title">Product Title: *</label>
    <input type = "text" name = "title" id = "title" /> <br /> <br />

    <input type="checkbox" name="published" value="published" checked> Publish this product (will show up in the brochure)<br/><br/>

    <label for="title">Category: *</label>
    <select name = "category">
        <option value = "accent_tables">Accent Tables</option>
        <option value = "arbors_and_trellises">Arbors and Trellises</option>
        <option value = "bird_feeders">Bird Feeders</option>
        <option value = "bird_houses">Bird Houses</option>
        <option value = "chaise_lounges">Chaise Lounges</option>
        <option value = "coffee_tables">Coffee Tables</option>
        <option value = "cushions">Cushions</option>
        <option value = "garden_fencing">Garden Fencing</option>
        <option value = "gliders">Gliders</option>
        <option value = "mailboxes_and_lamp_posts">Mailboxes and Lamp Posts</option>
        <option value = "ottomans">Ottomans</option>
        <option value = "park_and_garden_benches">Park and Garden Benches</option>
        <option value = "patio_and_picnic_table_sets">Patio and Picnic Table Sets</option>
        <option value = "planters">Planters</option>
        <option value = "porch_swings">Porch Swings</option>
        <option value = "rocking_chairs">Rocking Chairs</option>
        <option value = "settee_gliders">Settee Gliders</option>
        <option value = "stationary_and_folding_chairs">Stationary and Folding Chairs</option>
        <option value = "windmills_and_lighthouses">Windmills and Lighthouses</option>
        <option value = "wishing_wells">Wishing Wells</option>
    </select><br /> <br />

    <label for="file">Image: *</label>
    <input type="file" name="file" id="file" /><br /> <br />


    <label for="specs">Dimensions:</label>
    <input type = "text" name = "specs" id = "specs" /><br /> <br />

    <label for="sku">SKU:</label>
    <input type = "text" name = "sku" id = "sku" /><br /> <br />

    <label for="price">Price (do not enter dollar sign):</label>
    <input type = "text" name = "price" id = "price" /><br /> <br />

    <label for="colors">Colors:</label>
    <textarea rows="4" cols="50" name="colors" id="colors"></textarea><br /> <br />

    <input type = "hidden" name = "loadtime" value = "<?php echo time(); ?>" />

    <input type="submit" name="submit" value="Submit" />
</form>

</body>
</html>