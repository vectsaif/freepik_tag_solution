<!DOCTYPE html>
<html>
<body>

<?php 

$str = "Banner banner Pattern Poster Label Cover Texture Paper Beauty Typography Layout Packaging Luxury Art Text Advertising Sign Silver Makeup Elegant Golden Branding Product Clean Symbol Skin Brand Care Healthcare Cream Elements Container Solution Shiny Facial Skin care Collection Commercial Hygiene Treatment";

$lowerCaseString = strtolower($str);

$str_toa = array_unique(explode(" ", $lowerCaseString));  

echo implode(", ",$str_toa);
 

?>

</body>
</html>
