<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-bold text-xl text-gray-100 leading-tight">
            <?php echo e(__('Detail Film: ') . $film->judul); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-2xl sm:rounded-lg">
                <div class="p-8 bg-gray-800 border-b border-gray-700">
                    <div class="md:flex md:space-x-10">
                        <div class="md:w-1/4 mb-6 md:mb-0 flex-shrink-0">
                            <h3 class="text-xl font-bold mb-3 text-red-500">Poster</h3>
                            <?php if($film->poster): ?>
                                <img src="<?php echo e(asset('storage/film_posters/' . $film->poster)); ?>" alt="<?php echo e($film->judul); ?>" class="w-full h-auto object-cover rounded-lg shadow-2xl border-2 border-red-500">
                            <?php else: ?>
                                <div class="bg-gray-700 h-96 flex items-center justify-center rounded-lg text-gray-500">
                                    No Poster Available
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="md:w-3/4">
                            <h1 class="text-5xl font-extrabold mb-4 text-white tracking-wider"><?php echo e($film->judul); ?></h1>
                            <p class="text-xl font-semibold mb-6 text-red-500"><?php echo e($film->genre); ?> (<?php echo e($film->tahun_rilis); ?>)</p>

                            <div class="space-y-6">
                                <div>
                                    <p class="text-sm font-medium text-gray-400 uppercase">Sinopsis:</p>
                                    <p class="text-gray-300 leading-relaxed"><?php echo e($film->sinopsis); ?></p>
                                </div>
                                
                                <hr class="border-gray-700">

                                <div>
                                    <p class="text-sm font-medium text-gray-400 uppercase">Rating:</p>
                                    <p class="text-3xl font-extrabold text-yellow-400">★★★★☆</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-10 pt-6 border-t border-gray-700 flex space-x-4">
                        <a href="<?php echo e(route('film.index')); ?>" class="px-6 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition duration-150">
                            &larr; Kembali ke Daftar
                        </a>
                        <a href="<?php echo e(route('film.edit', $film->id)); ?>" class="px-6 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition duration-150">
                            Edit Film
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\Users\USER\leo_cinema\resources\views/film/show.blade.php ENDPATH**/ ?>