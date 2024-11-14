<!-- ====== About Section Start -->
<section id="about" style="background-color: #000; color: #fff;" class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">

  <div class="container">
    <div class="flex flex-wrap justify-between items-center -mx-4">
      <div class="w-full lg:w-6/12 px-4">
        <div class="flex items-center -mx-3 sm:-mx-4">
          <div class="w-full xl:w-12/12 px-3 sm:px-4">
            <div class="py-4 sm:py-4">
              <img
                src="<?php echo e(url('/img/foto2.png')); ?>"
                alt=""
                class="rounded-2xl w-full"
              />
            </div>
          </div>
         
        </div>
      </div>
      <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
        <div class="mt-10 lg:mt-0">
          <span class="font-semibold text-lg text-primary mb-2 block">
             <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
                 "Segala sesuatu dapat dicapai dengan kerja keras dan doa"
             </blockquote>
          </span>
          <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
            About Me
          </h2>
          <p class="text-base dark:text-gray-400 mb-8">
            Saya adalah mahasiswa program studi Manajemen Informatika di Politeknik Negeri Sambas, yang sangat antusias dalam mengembangkan kemampuan di pemrograman danWeb desain.. Saat ini, saya sedang memfokuskan diri pada proyek-proyek yang berkaitan dengan Mendasain Web <br />
          </p>
          <p class="text-base dark:text-gray-400 mb-8">
            Saya percaya bahwa belajar melalui pengalaman nyata adalah cara terbaik untuk berkembang. Oleh karena itu, saya aktif mengerjakan proyek-proyek praktis baik di dalam maupun di luar kelas. Saya bersemangat untuk menerapkan pengetahuan saya guna memberikan solusi kreatif dan bermanfaat bagi masyarakat.
            <span class="text-amber-500 font-bold"></span> <span class="text-amber-500 font-bold"></span>
            <br />
             <br />
          </p>
          <?php if (isset($component)) { $__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794 = $component; } ?>
<?php $component = App\View\Components\ButtonLink::resolve(['href' => 'https://youtube.com/@vincen5646?si=auibGtO73P8xGc65','variant' => 'red','target' => '_blank'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ButtonLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            View my channel
           <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794)): ?>
<?php $component = $__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794; ?>
<?php unset($__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794); ?>
<?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== About Section End -->
<?php /**PATH C:\xampp\htdocs\Portofolioogustiarno\resources\views/components/home/about.blade.php ENDPATH**/ ?>