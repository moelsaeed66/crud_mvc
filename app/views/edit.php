<?php include ('header.php');?>

<style>
    body {
        font-family: Arial, sans-serif;
    }
    form {
        max-width: 400px;
        margin: 0 auto;
    }
    input[type="text"],
    input[type="number"],
    textarea {
        width: 80%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 16px;
    }
    h1 {
        text-align: center;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }



</style>
<center>
    <h1>Edit Product</h1>
    <form action="<?=BURL;?>product/update/<?= $products->id;?>" method="post" enctype="multipart/form-data">
        <input type="text"  name="name" value="<?= $products->name;?>"><br>
        <input type="number"  name="price" step="1" value="<?= $products->price;?>" ><br>
        <textarea name="description"  ><?= $products->description;?></textarea><br>
        <input type="number"  name="quantity" step="1" value="<?= $products->quantity;?>"<br>
        <input type="submit" name="submit" value="Edit Product">
        </div>
    </form>
</center>






<?php include ('footer.php');?>
