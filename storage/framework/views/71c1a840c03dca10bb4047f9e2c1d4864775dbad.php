<!-- ====== Portfolio Section Start -->
<section
  id="portfolio"
  x-data="
        {
          selectedTab: 'all',
          activeClasses: 'bg-primary text-white',
          inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
        }
      "
  class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px]"
  style="background-color: #000000;"
>
  <div class="container">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full px-4">
        <div class="text-center mx-auto mb-[60px] max-w-[510px]">
          <h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-white dark:text-white-300 mb-4" class=>
            Projects Saya 
          </h2>
          <p class="text-base text-white-color">
            Beberapa projrect  yang pernah saya kerjakan
          </p>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap justify-center -mx-4">
      <div class="w-full px-4">
        <ul class="flex flex-wrap justify-center mb-12 space-x-1">
          <li class="mb-1">
            <button
              @click="selectedTab = 'all' "
              :class="selectedTab == 'all' ? activeClasses : inactiveClasses "
              class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition "
            >
              All Projects
            </button>
          </li>
          <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="mb-1">
            <button
              @click="selectedTab = '<?php echo e($tab); ?>' "
              :class="selectedTab === '<?php echo e($tab); ?>' ? activeClasses : inactiveClasses "
              class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition ">
              <?php echo e($tab); ?>

            </button>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    </div>
    <div class="flex flex-wrap -mx-4">
      <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginal25a11d3ed85cd2ee3f4263867bbe3852409fd688 = $component; } ?>
<?php $component = App\View\Components\PortfolioItem::resolve(['title' => $item['title'],'categories' => $item['category'],'image' => $item['image'],'github' => $item['github']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('portfolio-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PortfolioItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25a11d3ed85cd2ee3f4263867bbe3852409fd688)): ?>
<?php $component = $__componentOriginal25a11d3ed85cd2ee3f4263867bbe3852409fd688; ?>
<?php unset($__componentOriginal25a11d3ed85cd2ee3f4263867bbe3852409fd688); ?>
<?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>
<!-- ====== Portfolio Section End --><?php /**PATH C:\xampp\htdocs\Portofolioogustiarno\resources\views/components/home/portfolio.blade.php ENDPATH**/ ?>