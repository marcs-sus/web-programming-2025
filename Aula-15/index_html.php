<?php
require_once 'lib/html/html_table.php';
require_once 'lib/html/html_input.php';

$table = new htmlTable();
$table->setData(
    array(
        0 => array(
            0 => 'John Doe',
            1 => 'john@email.com'
        ),
        1 => array(
            0 => 'Rick',
            1 => 'rick@email.com'
        )
    )
);

echo $table->renderHtml();

echo "<br><br>";

$input = new htmlInput();
$input->setTitle("Field");
echo $input->renderHtml();
