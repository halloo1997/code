<?php
if(isset($_POST['clr']))
    $selected_color= $_POST['clr'];

// To show Hexadecimal code of the selected color
echo "Color code is:  " . $selected_color;
