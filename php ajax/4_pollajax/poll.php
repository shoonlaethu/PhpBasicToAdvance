<?php
$vote = $_REQUEST['vote'];

// Get content of the text file
$filename = "poll_result.txt";
$content = file($filename);

// Put content in an array
$array = explode("||", $content[0]);
$single = $array[0];
$relationship = $array[1];

if ($vote == 'single') {
    $single = $single + 1;
} elseif ($vote == 'relationship') {
    $relationship = $relationship + 1;
}

// Insert votes into the text file
$insertvote = $single . "||" . $relationship;
$fp = fopen($filename, "w");
fputs($fp, $insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table>
    <tr>
        <td>Single:</td>
        <td>
            <img src="poll.gif" width='<?php echo(100 * round($single / ($single + $relationship), 2)); ?>'
                height='20'>
            <?php echo(100 * round($single / ($single + $relationship), 2)); ?>%
        </td>
    </tr>
    <tr>
        <td>Relationship:</td>
        <td>
            <img src="poll.gif"
                width='<?php echo(100 * round($relationship / ($single + $relationship), 2)); ?>'
                height='20'>
            <?php echo(100 * round($relationship / ($single + $relationship), 2)); ?>%
        </td>
    </tr>
</table>
