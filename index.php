<?php 

include('./xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('base_fields');
$xcrud->language('en');

$xcrud2 = Xcrud::get_instance();
$xcrud2->table('customers');
$xcrud2->language('en');
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Some page title</title>
</head>
 
<body>
 
<?php
    echo $xcrud->render();
?>

<hr />

<?php
    echo $xcrud2->render('create'); // default view is the CREATE interface
?>
 
 
</body>
</html>