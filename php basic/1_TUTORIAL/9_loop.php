<?php
// Example 1: while Loop
echo "Example 1: while Loop\n";
$count = 1;
while ($count <= 5) {
    echo $count . " ";
    $count++;
}
echo "\n";

// Example 2: do-while Loop
echo "\nExample 2: do-while Loop\n";
$count = 1;
do {
    echo $count . " ";
    $count++;
} while ($count <= 5);
echo "\n";

// Example 3: for Loop
echo "\nExample 3: for Loop\n";
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
echo "\n";

// Example 4: foreach Loop
echo "\nExample 4: foreach Loop\n";
$items = array("Apple", "Banana", "Orange");
foreach ($items as $item) {
    echo $item . " ";
}
echo "\n";

// Example 5: break Statement
echo "\nExample 5: break Statement\n";
$num = 1;
while (true) {
    echo $num . " ";
    if ($num == 5) {
        break;
    }
    $num++;
}
echo "\n";

// Example 6: continue Statement
echo "\nExample 6: continue Statement\n";
$num = 0;
while ($num < 5) {
    $num++;
    if ($num == 3) {
        continue;
    }
    echo $num . " ";
}
echo "\n";
?>
