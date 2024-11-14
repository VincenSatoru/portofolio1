<!-- ====== Navbar Section Start -->
<header
  x-data="{navbarOpen: false}"
  class="fixed left-0 top-0 z-50 bg-primary w-full flex items-center shadow-md dark:bg-slate-900 h-24"
>
  <div class="container">
    <div class="flex -mx-4 items-center justify-between relative">
      <div class="pr-4 w-60 max-w-full">
        <a href="/" class="w-full flex items-center py-2">
          <img
            src="<?php echo e(url('/img/logo.png')); ?>"
            alt="logo"
            class="w-[48px] lg:w-[64px] inline-block dark:hidden"
          />
          <img
            src="<?php echo e(url('/img/61ae6a7d-e807-4ef1-8f60-39b550f49a96.jpg')); ?>"
            alt="logo"
            class="w-[48px] lg:w-[64px] hidden dark:inline-block"
          />
          <span class="text-xl xl:text-2xl font-bold text-[#0c7187] dark:text-white">MyPortofolio</span>
        </a>
      </div>
      <div class="flex px-4 justify-end items-center w-full">
        <div>
          <?php if (isset($component)) { $__componentOriginal71f59a806f9262ba0b3ed9e4355806fb7fb0ba1c = $component; } ?>
<?php $component = App\View\Components\Layout\NavbarHamburger::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.navbar-hamburger'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layout\NavbarHamburger::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'navbarOpen = !navbarOpen','x-bind:class' => 'navbarOpen && \'navbarTogglerActive\'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71f59a806f9262ba0b3ed9e4355806fb7fb0ba1c)): ?>
<?php $component = $__componentOriginal71f59a806f9262ba0b3ed9e4355806fb7fb0ba1c; ?>
<?php unset($__componentOriginal71f59a806f9262ba0b3ed9e4355806fb7fb0ba1c); ?>
<?php endif; ?>
          <nav
            :class="!navbarOpen && 'hidden' "
            id="navbarCollapse"
            class="absolute right-0 top-full bg-white py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-slate-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none"
          >
            <ul class="block lg:flex lg:items-center">
              <?php $__currentLoopData = $navigationItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginale2b14926e48dcb2e5b189dcd32feb128ac4c120f = $component; } ?>
<?php $component = App\View\Components\Layout\NavbarItem::resolve(['href' => $item['href']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.navbar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layout\NavbarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e($item['label']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale2b14926e48dcb2e5b189dcd32feb128ac4c120f)): ?>
<?php $component = $__componentOriginale2b14926e48dcb2e5b189dcd32feb128ac4c120f; ?>
<?php unset($__componentOriginale2b14926e48dcb2e5b189dcd32feb128ac4c120f); ?>
<?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <div class="ml-0 lg:ml-10 xl:ml-16 relative top-1">
                <div class="g-ytsubscribe" data-channelid="UCYxp5aRiV8ucTFTor7qrMoQ" data-layout="default"
                     data-count="default"></div>
              </div>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- ====== Navbar Section End -->
<?php /**PATH C:\xampp\htdocs\Portofolioogustiarno\resources\views/layout/navbar.blade.php ENDPATH**/ ?>