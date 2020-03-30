<?php
$b_id = $_GET ['bud_id'];
$name = $_GET ['name'];
?>

<div class="form-style-10">
        <h1>Are you sure to Delete <i><?php echo "$name"?>?</i></h1>

            <form action = "deletebudget_confirm.php?bud_id=<?php echo $b_id?>" method = "POST">
                    <input type ="submit" name = "submit" value = "Delete">
            </form>
            <a href = "index.php?page=budget">
                <input type ="submit" name = "submit" value = "Cancel">
            </a>

</div>