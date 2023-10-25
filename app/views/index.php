<?php include ('header.php');?>
<?php $i=1; ?>
<?php foreach($products as $row):  ?>


    <div class="container">
    <div class="product">
        <?php if(isset($success)): ?>
            <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
        <?php endif; ?>
        <?php if(isset($errors)): ?>
            <h3 class="alert alert-danger text-center"><?php  echo $errors; ?></h3>
        <?php endif; ?>
        <h2>Product<?=$i; $i++;?></h2>
        <p>Name: <?=$row->name;?></p>
        <p>Price: <?=$row->price;?></p>
        <p>Description: <?=$row->description;?></p>
        <p>Quantity: <?=$row->quantity;?></p>
        <a href='<?php url('product/delete/'.$row->id) ?>' class='btn btn-danger'>Delete</a>
        <a href='<?php url('product/edit/'.$row->id) ?>' class='btn btn-primary'>Update</a>

    </div>

  

    <!-- Add more product rows here -->

</div>

<?php endforeach;?>




<?php include ('footer.php');?>