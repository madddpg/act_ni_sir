<?php
$user_id = $_REQUEST["id"];

$user_id;

include("connections.php");

$record = mysqli_query($connections, "SELECT * FROM mytbl WHERE id='$user_id'");

while ($edit = mysqli_fetch_assoc($record)){

     $db_name = $edit["name"];
     $db_address = $edit["address"];
     $db_email = $edit["email"];

}
?>

<form method="POST" action="Update_record.php">

<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
<input type="text" name="new_name" value="<?php echo $db_name; ?>">
<Br>
<input type="text" name="new_address" value="<?php echo $db_address; ?>">
<Br>
<input type="text" name="new_email" value="<?php echo $db_email; ?>">
<Br>


<input type="submit" value="Update">
</form>