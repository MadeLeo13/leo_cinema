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
            <?php echo e(__('Tambah Film Baru')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-8">
                <form action="<?php echo e(route('film.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-lg font-bold border-b border-gray-700 pb-2 mb-4 text-red-500">Detail Film</h3>
                            
                            <div class="mb-4">
                                <label for="judul" class="block text-sm font-medium text-gray-300">Judul Film:</label>
                                <input type="text" name="judul" id="judul" class="mt-1 block w-full rounded-md border-gray-600 bg-gray-700 text-white shadow-sm" required value="<?php echo e(old('judul')); ?>">
                                <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-4">
                                <label for="tahun_rilis" class="block text-sm font-medium text-gray-300">Tahun Rilis:</label>
                                <input type="number" name="tahun_rilis" id="tahun_rilis" class="mt-1 block w-full rounded-md border-gray-600 bg-gray-700 text-white shadow-sm" required value="<?php echo e(old('tahun_rilis')); ?>">
                                <?php $__errorArgs = ['tahun_rilis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            
                            <div class="mb-4">
                                <label for="genre" class="block text-sm font-medium text-gray-300">Genre:</label>
                                <input type="text" name="genre" id="genre" class="mt-1 block w-full rounded-md border-gray-600 bg-gray-700 text-white shadow-sm" value="<?php echo e(old('genre')); ?>">
                                <?php $__errorArgs = ['genre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-bold border-b border-gray-700 pb-2 mb-4 text-red-500">Sinopsis & Poster</h3>
                            
                            <div class="mb-4">
                                <label for="sinopsis" class="block text-sm font-medium text-gray-300">Sinopsis:</label>
                                <textarea name="sinopsis" id="sinopsis" rows="6" class="mt-1 block w-full rounded-md border-gray-600 bg-gray-700 text-white shadow-sm" required><?php echo e(old('sinopsis')); ?></textarea>
                                <?php $__errorArgs = ['sinopsis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-4">
                                <label for="poster" class="block text-sm font-medium text-gray-300">Poster Film:</label>
                                <input type="file" name="poster" id="poster" class="mt-1 block w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-bold file:bg-red-900 file:text-red-300 hover:file:bg-red-800">
                                <?php $__errorArgs = ['poster'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-end mt-8 pt-4 border-t border-gray-700">
                        <a href="<?php echo e(route('film.index')); ?>" class="mr-3 text-sm text-gray-400 hover:text-white">Batal</a>
                        <button type="submit" class="px-6 py-2 bg-red-600 text-white font-bold rounded-lg shadow-md hover:bg-red-700 transition duration-150">Simpan Film</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\Users\USER\leo_cinema\resources\views/film/create.blade.php ENDPATH**/ ?>