<div
  x-data="{categories: <?php echo e(json_encode($categories)); ?> }"
  :class="selectedTab == 'all' || categories.includes(selectedTab) ? 'block' : 'hidden' "
  class="w-full md:w-1/2 xl:w-1/3 px-4"
>
  <div class="relative mb-12">
    <a href="<?php echo e($github); ?>" target="_blank">
      <div class="rounded-lg overflow-hidden ease-in duration-100 hover:scale-105">
        <img
          src="<?php echo e($image); ?>"
          alt="portfolio"
          class="w-full h-[260px] object-cover"
        />
      </div>
    </a>
    <div
      class="text-center bg-white dark:bg-slate-800 relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-4 h-[260px]">
      <span class="text-sm text-primary font-semibold block mb-2">
        <?php echo e(implode(", ", $categories)); ?>

      </span>
      <h3 class="font-bold text-lg text-dark dark:text-gray-300 mb-4">
        <?php echo e($title); ?>

      </h3>
      <?php if (isset($component)) { $__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794 = $component; } ?>
<?php $component = App\View\Components\ButtonLink::resolve(['href' => $github,'variant' => 'outline-primary'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ButtonLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>View Details <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794)): ?>
<?php $component = $__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794; ?>
<?php unset($__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794); ?>
<?php endif; ?>
    </div>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\Portofolioogustiarno\resources\views/components/portfolio-item.blade.php ENDPATH**/ ?>