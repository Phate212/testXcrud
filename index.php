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
    <?php echo Xcrud::load_css(); ?>
</head>
 
<body>
 
<?php
    echo $xcrud->render();
?>

<hr />

<?php
    echo $xcrud2->render('create'); // default view is the CREATE interface
?>
 
<hr />

<?php
    echo $xcrud2->where('customerNumber =', 103); // see only the row that have CustomerNumber == 103
?>

<?php echo Xcrud::load_js(); ?>
</body>
</html>