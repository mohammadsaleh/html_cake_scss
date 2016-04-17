<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <base href="<?= \Cake\Routing\Router::url('/', true) ?>"/>
    <title><?=$title?></title>
    <link rel="stylesheet" href="css/bootstrap-3.3.6.css"/>
    <link rel="stylesheet" href="css/font-awesome-4.5.0.css"/>
    <link rel="stylesheet" href="css/base.css"/>
    <?= $this->fetch('css');?>

</head>
<body>

    <?= $this->fetch('content'); ?>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/scripts.js"></script>
    <?= $this->fetch('js');?>

</body>

</html>