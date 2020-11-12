<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>practica</title>
</head>
<body>
    <header class="p-3 mb-2 bg-success text-white">
        <h1><?php echo e($title); ?></h1>
    </header>
    <nav class="navbar navbar-light bg-light">
       <a class="navbar-brand" href="#">
       <img src="/images/stickerToledo.jpg" width="30" height="30" class="d-inline-block align-top" alt="img no found" loading="lazy">
    Baeza Garcia Bryan Andrés 5°E
       </a>
    </nav>
    <main>
        <?php $__currentLoopData = $array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $z): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($c); ?>  
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <h3><?php echo e($x); ?> x <?php echo e($c); ?>: <?php echo e($a); ?></h3> <br>
    </main>
    <footer class="p-3 mb-2 bg-success text-white">
        Derechos Reservados - <?php echo e(date('y')); ?>

    </footer>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>