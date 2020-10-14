<?php

$message = "";
if (isset($argv[1]))
{
    for($i=1; $i<$argc; $i++){
        $message .= $argv[$i] . " ";
    }
    $message = trim($message);
}

$filename = $argv[0];


function displayTextInBox(string $message): void {
    if (empty($message))
    {
        global $filename;
        echo "USAGE: $filename MESSAGE\n";
        return;
    }
    $strlength = strlen($message);
    $boxLength = $strlength + 4; 

    drawLine($boxLength, "up");
    echo "| " . $message . " |\n";
    drawLine($boxLength, "down");
}

displayTextInBox($message);

function drawLine(int $length, string $position) : void
{
    if ($position !== "up" && $position !== "down")
        return;

    $border = str_repeat("─", $length - 2);

    if ($position === "up")
        echo "┌" . $border . "┐\n";
    else
        echo "└" . $border . "┘\n";
}

//printf("| %s |", $message);
