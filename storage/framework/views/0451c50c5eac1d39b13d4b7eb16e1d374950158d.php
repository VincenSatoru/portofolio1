<!-- ====== Contact Section Start -->
<section id="contact" class="bg-white dark:bg-primary py-20 lg:py-[120px] overflow-hidden relative z-10" style="background-color: #044965;">
  <div class="container">
  <div class="container">
    <div class="flex flex-wrap lg:justify-between -mx-4">
      <div class="w-full lg:w-1/2 xl:w-6/12 px-4">
        <div class="max-w-[570px] mb-12 lg:mb-0">
          <h2 class="text-dark dark:text-gray-100 mb-6 uppercase font-bold text-[32px] sm:text-[40px] lg:text-[36px] xl:text-[40px]">
            FOR BUSINESS 
          </h2>
          <p class="text-base text-body-color dark:text-gray-200 leading-relaxed mb-9">
            Jika Anda merasa pengalaman dan keterampilan saya sesuai dengan kebutuhan Anda, jangan ragu untuk menghubungi saya.
          </p>
          <div class="flex mb-8 max-w-[370px] w-full">
            <div
              class="
                 max-w-[60px]
                 sm:max-w-[70px]
                 w-full
                 h-[60px]
                 sm:h-[70px]
                 flex
                 items-center
                 justify-center
                 mr-6
                 overflow-hidden
                 bg-primary bg-opacity-5
                 text-primary
                 dark:text-gray-300
                 rounded
                 "
            >
              <svg
                width="28"
                height="19"
                viewBox="0 0 28 19"
                class="fill-current"
              >
                <path
                  d="M25.3636 0H2.63636C1.18182 0 0 1.16785 0 2.6052V16.3948C0 17.8322 1.18182 19 2.63636 19H25.3636C26.8182 19 28 17.8322 28 16.3948V2.6052C28 1.16785 26.8182 0 25.3636 0ZM25.3636 1.5721C25.5909 1.5721 25.7727 1.61702 25.9545 1.75177L14.6364 8.53428C14.2273 8.75886 13.7727 8.75886 13.3636 8.53428L2.04545 1.75177C2.22727 1.66194 2.40909 1.5721 2.63636 1.5721H25.3636ZM25.3636 17.383H2.63636C2.09091 17.383 1.59091 16.9338 1.59091 16.3499V3.32388L12.5 9.8818C12.9545 10.1513 13.4545 10.2861 13.9545 10.2861C14.4545 10.2861 14.9545 10.1513 15.4091 9.8818L26.3182 3.32388V16.3499C26.4091 16.9338 25.9091 17.383 25.3636 17.383Z"
                />
              </svg>
            </div>
            <div class="w-full">
              <h4 class="font-bold text-dark dark:text-gray-200 text-xl mb-1">
                Email Saya
              </h4>
              <p class="text-base text-body-color dark:text-gray-300">gustiarno81@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
        <div class="bg-white dark:bg-slate-900 relative rounded-lg p-8 sm:p-12 shadow-lg">
          <form action="/contact/submit" method="POST" x-data="
          {
              formData: {
                name: '',
                email: '',
                message: '',
              },
              errors: {},
              successMessage: '',

              submitForm(event) {
                this.successMessage = '';
                this.errors = {};
                  fetch(`/contact/submit`, {
                    method: 'POST',
                    headers: {
                      'Content-Type': 'application/json',
                      'X-Requested-With': 'XMLHttpRequest',
                      'X-CSRF-TOKEN': document.querySelector(`meta[name='csrf-token']`).getAttribute('content')
                    },
                    body: JSON.stringify(this.formData)
                  })
                  .then(response => {
                    if (response.status === 200) {
                      return response.json();
                    }
                    throw response;
                  })
                  .then(result => {
                    this.formData = {
                      name: '',
                      email: '',
                      message: '',
                    };
                    this.successMessage = 'Thanks for your contact request. I will get back to you shortly.';
                  })
                  .catch(res => {
                    if (res.status === 422) {
                      this.errors = result.errors;
                    }
                    console.log(res);
                  })
              }
          }
          " x-on:submit.prevent="submitForm">
            <template x-if="successMessage">
              <div x-text="successMessage" class="py-4 px-6 bg-green-600 text-gray-100 mb-4"></div>
            </template>
            <?php echo csrf_field(); ?>
            <div class="mb-6">
              <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input','data' => ['placeholder' => 'Nama ','name' => 'name','xModel' => 'formData.name',':class' => 'errors.name ? \'border-red-500 focus:border-red-500\' : \'\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Nama ','name' => 'name','x-model' => 'formData.name',':class' => 'errors.name ? \'border-red-500 focus:border-red-500\' : \'\'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
              <template x-if="errors.name">
                <div x-text="errors.name[0]" class="text-red-500"></div>
              </template>
            </div>
            <div class="mb-6">
              <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input','data' => ['type' => 'email','placeholder' => 'Email','name' => 'email','xModel' => 'formData.email',':class' => 'errors.email ? \'border-red-500 focus:border-red-500\' : \'\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'email','placeholder' => 'Email','name' => 'email','x-model' => 'formData.email',':class' => 'errors.email ? \'border-red-500 focus:border-red-500\' : \'\'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
              <template x-if="errors.email">
                <div x-text="errors.email[0]" class="text-red-500"></div>
              </template>
            </div>
            <div class="mb-6">
              <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.textarea','data' => ['placeholder' => 'Pesan','name' => 'message','rows' => '6','xModel' => 'formData.message',':class' => 'errors.message ? \'border-red-500 focus:border-red-500\' : \'\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Pesan','name' => 'message','rows' => '6','x-model' => 'formData.message',':class' => 'errors.message ? \'border-red-500 focus:border-red-500\' : \'\'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
              <template x-if="errors.message">
                <div x-text="errors.message[0]" class="text-red-500"></div>
              </template>
            </div>
            <div>
              <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = App\View\Components\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full']); ?>
                Kirim
               <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940)): ?>
<?php $component = $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940; ?>
<?php unset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940); ?>
<?php endif; ?>
            </div>
          </form>
          <div>
            <span class="absolute -top-10 -right-9 z-[-1]">
               <svg
                 width="100"
                 height="100"
                 viewBox="0 0 100 100"
                 fill="none"
                 xmlns="http://www.w3.org/2000/svg"
               >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
                    fill="#3056D3"
                  />
               </svg>
            </span>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact-dots-top','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('contact-dots-top'); ?>
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
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact-dots-bottom','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('contact-dots-bottom'); ?>
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
    </div>
  </div>
</section>
<!-- ====== Contact Section End -->
<?php /**PATH C:\xampp\htdocs\Portofolioogustiarno\resources\views/components/home/contact.blade.php ENDPATH**/ ?>