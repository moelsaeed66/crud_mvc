<?php include ('header.php');?>

<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">


            <?php if(isset($success)): ?>
                <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
            <?php endif; ?>
            <?php if(isset($errors)): ?>
                <h3 class="alert alert-danger text-center"><?php  echo $errors; ?></h3>
            <?php endif; ?>

        </div>
    </div>
</div>



<?php include ('footer.php');?>
