
<?php

 if(count($errors)>0){
    show($errors);
 }

?>

<form method="POST">
    <input type="text" name="firstname" placeholder="firstname"> <br><br>
    <input type="text" name="lastname" placeholder="lastname"> <br><br>
    <input type="text" name="email" placeholder="email"> <br><br>
    <input type="password" name="password" placeholder="password"> <br><br>
    <input type="password" name="cpassword" placeholder="Comfirm password"> <br><br>
    <input type="submit" value="Submit">
</form>