<?php // Här startar php
$target_path = "/var/www/upload/"; // Absolut sökväg i datorn till foldern dit det ska laddas upp
// Sökvägen och filnamnet
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);

// "echo" skriver ut information på klientens webbsida
echo "Source=" .        $_FILES['uploadedfile']['name'] . "<br />";
echo "Destination=" .   $destination_path . "<br />";
echo "Target path=" .   $target_path . "<br />";
echo "Size=" .          $_FILES['uploadedfile']['size'] . "<br />";

// Felhantering. I fall det inte funkar får klinten ett felmeddelande
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
echo "The file ".  basename( $_FILES['uploadedfile']['name']).
" has been uploaded";
} else{
echo "There was an error uploading the file, please try again!";
}
?>
