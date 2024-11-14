<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portofolio Gustiarno</title>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link href="<?php echo e(asset('/css/app.css')); ?>" rel="stylesheet">
    <script src="https://apis.google.com/js/platform.js"></script>
</head>
<body class="text-gray-800 dark:text-gray-200 ">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
    <?php if (isset($component)) { $__componentOriginalde5be1b07ecba636fefe72889fa78f2d1c8ad0a0 = $component; } ?>
<?php $component = App\View\Components\Layout\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layout\Navbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde5be1b07ecba636fefe72889fa78f2d1c8ad0a0)): ?>
<?php $component = $__componentOriginalde5be1b07ecba636fefe72889fa78f2d1c8ad0a0; ?>
<?php unset($__componentOriginalde5be1b07ecba636fefe72889fa78f2d1c8ad0a0); ?>
<?php endif; ?>
    <?php echo e($slot); ?>

    <?php if (isset($component)) { $__componentOriginal8d1df6f099156bed20d9c14a96b2b4c60c5786aa = $component; } ?>
<?php $component = App\View\Components\Layout\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layout\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8d1df6f099156bed20d9c14a96b2b4c60c5786aa)): ?>
<?php $component = $__componentOriginal8d1df6f099156bed20d9c14a96b2b4c60c5786aa; ?>
<?php unset($__componentOriginal8d1df6f099156bed20d9c14a96b2b4c60c5786aa); ?>
<?php endif; ?>
</div>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Portofolioogustiarno\resources\views/layout/app.blade.php ENDPATH**/ ?>