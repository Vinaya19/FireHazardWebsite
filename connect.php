<?php
 
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if(!empty(username)){

}
else{
 echo "Username shouldn't be empty";
 die();
}
?>