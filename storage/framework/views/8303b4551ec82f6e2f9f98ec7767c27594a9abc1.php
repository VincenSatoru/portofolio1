<!-- ====== Hero Section Start -->
<div class="relative pt-[60px] lg:pt-[80px] pb-[110px]" style="background-color: #000000;">
  <div class="container">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full lg:w-5/12 px-4">
        <div class="hero-content">
          <h1
            class="text-white dark:text-black-200 font-bold text-4xl sm:text-[42px] lg:text-[40px] xl:text-[42px] leading-snug mb-6"
          >
            My Name is Gustiarno <br/>
            <span class="rounded-md text-black"></span>
          </h1>
          <p class="text-white mb-8 max-w-[520px]">
            I am a programmer and web designer. <br/>
            Sekarang saya kuliah di Politeknik Negeri Sambas
            <a
              class="text-black font-bold no-underline hover:underline underline-offset-2 decoration-2 decoration-black"
              href="https://youtube.com/@vincen5646?si=auibGtO73P8xGc65" target="_blank">YouTube Channel</a>. <br>
          </p>
          <ul class="flex flex-wrap items-center">
            <li>
              <?php if (isset($component)) { $__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794 = $component; } ?>
<?php $component = App\View\Components\ButtonLink::resolve(['href' => '#portfolio','variant' => 'primary'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ButtonLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'rounded-lg text-black']); ?>
                My Projects
               <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794)): ?>
<?php $component = $__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794; ?>
<?php unset($__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794); ?>
<?php endif; ?>
            </li>
          </ul>
          <div class="clients pt-16">
            <h6 class="font-normal text-xs flex items-center text-body-color dark:text-white-300 mb-4">
              Follow me on social media
              <span class="w-8 h-[1px] bg-black inline-block ml-2"></span>
            </h6>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.social-icons','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('social-icons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
          </div>
        </div>
      </div>
      <div class="hidden lg:block lg:w-1/12 px-4"></div>
      <div class="w-full lg:w-5/12 px-4">
        <div class="lg:text-right lg:ml-auto">
          <div class="relative inline-block z-10 pt-11 lg:pt-0">
            <img
              src="<?php echo e(url('/img/foto1.png')); ?>"
              alt="hero"
              class="max-w-full lg:ml-auto"
            />
            <span class="absolute -left-8 -bottom-8 z-[-1]">
              <svg
                width="93"
                height="93"
                viewBox="0 0 93 93"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <circle cx="2.5" cy="2.5" r="2.5" fill="#000"/>
                <circle cx="2.5" cy="24.5" r="2.5" fill="#000"/>
                <circle cx="2.5" cy="46.5" r="2.5" fill="#000"/>
                <circle cx="2.5" cy="68.5" r="2.5" fill="#000"/>
                <circle cx="2.5" cy="90.5" r="2.5" fill="#000"/>
                <circle cx="24.5" cy="2.5" r="2.5" fill="#000"/>
                <circle cx="24.5" cy="24.5" r="2.5" fill="#000"/>
                <circle cx="24.5" cy="46.5" r="2.5" fill="#000"/>
                <circle cx="24.5" cy="68.5" r="2.5" fill="#000"/>
                <circle cx="24.5" cy="90.5" r="2.5" fill="#000"/>
                <circle cx="46.5" cy="2.5" r="2.5" fill="#000"/>
                <circle cx="46.5" cy="24.5" r="2.5" fill="#000"/>
                <circle cx="46.5" cy="46.5" r="2.5" fill="#000"/>
                <circle cx="46.5" cy="68.5" r="2.5" fill="#000"/>
                <circle cx="46.5" cy="90.5" r="2.5" fill="#000"/>
                <circle cx="68.5" cy="2.5" r="2.5" fill="#000"/>
                <circle cx="68.5" cy="24.5" r="2.5" fill="#000"/>
                <circle cx="68.5" cy="46.5" r="2.5" fill="#000"/>
                <circle cx="68.5" cy="68.5" r="2.5" fill="#000"/>
                <circle cx="68.5" cy="90.5" r="2.5" fill="#000"/>
                <circle cx="90.5" cy="2.5" r="2.5" fill="#000"/>
                <circle cx="90.5" cy="24.5" r="2.5" fill="#000"/>
                <circle cx="90.5" cy="46.5" r="2.5" fill="#000"/>
                <circle cx="90.5" cy="68.5" r="2.5" fill="#000"/>
                <circle cx="90.5" cy="90.5" r="2.5" fill="#000"/>
              </svg>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ====== Hero Section End -->
<?php /**PATH C:\xampp\htdocs\Portofolioogustiarno\resources\views/components/home/hero.blade.php ENDPATH**/ ?>