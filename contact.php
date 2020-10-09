<?php
//variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message= $_REQUEST['Message'];

//check input fields
if(empty($name) ││ empty($email) ││ empty($message))
{
    eco "Please fill all the fields";
}
else
{
    mail("mayurjagtap648@gmail.com", Webtech Message", $message, "From: $name< $email>");
    echo "<scrpt type='text/javascript'>alert('your message sent succesfully');
    window.history.log(-1);
    </script>
}
?>