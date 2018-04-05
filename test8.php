<!DOCTYPE html>
<html>
<body>

<?php
$str = "Jane & 'Tarzan'";
echo htmlspecialchars($str, ENT_COMPAT); // Will only convert double quotes
echo "<br>";
echo htmlspecialchars($str, ENT_QUOTES); // Converts double and single quotes
echo "<br>";
echo htmlspecialchars($str); // Does not convert any quotes
?>

</body>
</html>
