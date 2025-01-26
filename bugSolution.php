```php
<?php
function incrementArray(array $arr) : array {
  $newArray = [];
  foreach ($arr as $value) {
    $newArray[] = $value + 1;
  }
  return $newArray;
}

$numbers = [1, 2, 3];
$incrementedNumbers = incrementArray($numbers);
print_r($numbers); // Output: [1, 2, 3] (original array unchanged)
print_r($incrementedNumbers); // Output: [2, 3, 4] (new array with incremented values)
?>
```