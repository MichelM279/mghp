<?php
$recipient = "info@mangold-global.com";
$fmtResponse= implode("", file("formresponse.htt"));
$fmtMail= implode("", file("formmail.htt"));
foreach($_POST as $key=> $val) {
$fmtResponse= str_replace("<$key>", $val, $fmtResponse);
$fmtMail= str_replace("<$key>", $val, $fmtMail);
}
if ($_POST["access"] == "kontakt-secret-easy") {
mail($recipient, $_POST["subject"], $fmtMail);
}
echo $fmtResponse;
?>