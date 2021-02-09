<!DOCTYPE html>
<html>
<body>

<?php
$l = array("Kazakh", "Russian", "Turkish", "English");
echo "Hello! I know 4 languages. Let me show them using for loop.";
for($i=0; $i<count($l); $i++){
    echo "I know ".$l[$i]." language.<br>";
}
?>

</body>
</html>