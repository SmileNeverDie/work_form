<?php
if(isset($_POST["collection_location"]) && isset($_POST["delivery_location"]))
{
    $collection_location = htmlentities($_POST["collection_location"]);
    $delivery_location = htmlentities($_POST["delivery_location"]);
    $output ="
    <html>
    <head>
    <title>данные</title>
    </head>
    <body>
    Collection Location: $collection_location<br />
    Delivery Location: $delivery_location<br />
    <ul>";
    $output.="</ul></body></html>";
    echo $output;
}
else
{
    echo "Введенные данные некорректны";
}
?>