<?php
$exp_id = $_GET ['id'];
$name = $_GET ['name'];
?>

<div class="form-style-10">
        <h1>Are you sure to Delete <i><?php echo "$name"?>?</i></h1>
    
        <form action = "deleteexpense_confirm.php?id=<?php echo $exp_id?>" method = "POST">
            <input type ="submit" name = "submit" value = "Delete">
        </form>
        <a href = "index.php?page=expense">
            <input type ="submit" name = "submit" value = "Cancel">
        </a>
</div>