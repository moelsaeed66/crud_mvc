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
        width: 100%;
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
    <h1>Add Product</h1>
    <?php if(isset($success)): ?>
        <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
    <?php endif; ?>
    <?php if(isset($errors)): ?>
        <h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
    <?php endif; ?>
    <form action="<?=BURL;?>product/store" method="post" >

            <input type="text"  name="name" required placeholder="enter name"><br>
            <input type="number"  name="price" step="1" required placeholder="enter price"><br>
            <textarea name="description" required placeholder="enter description"></textarea><br>
            <input type="number"  name="quantity" step="1" required placeholder="enter quantity"><br>
            <input type="submit" name="submit" value="Add Product">
        </div>
    </form>
</center>






<?php include ('footer.php');?>

