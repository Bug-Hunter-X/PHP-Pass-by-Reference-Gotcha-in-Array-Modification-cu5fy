```php
<?php
function incrementArray(&$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$numbers = [1, 2, 3];
incrementArray($numbers);
print_r($numbers); // Output: [2, 3, 4]

function modifyArray(array $arr) : array {
  foreach ($arr as &$value) {
    $value++;
  }
  return $arr;
}

$numbers = [1, 2, 3];
$numbers = modifyArray($numbers);
print_r($numbers); //Output: [2, 3, 4]

?>
```