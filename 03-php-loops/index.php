
<!DOCTYPE html>
<html>
<body>

<?php  
for ($x = 1; $x <= 100; $x++) {
  echo "The number is: $x <br>";
}
 


$i = 0;

while ($i <100) {
  $i+=5;
  echo "$i<br>";
}

$numbers = array("1", "2", "3", "4");

foreach ($numbers as $x) :
  echo "$x <br>";
endforeach;
?> 

</body>
</html