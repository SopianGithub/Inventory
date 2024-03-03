<div id="'<?php echo e($name); ?>'" class="flex flex-col gap-2 justify-center items-center">
    <div id="'icon-<?php echo e($icon); ?>'">
        <?php if (isset($component)) { $__componentOriginal945c94e4d933de00fde2fded18f0e658 = $component; } ?>
<?php $component = App\View\Components\Dashboard\IconList::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.icon-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\IconList::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal945c94e4d933de00fde2fded18f0e658)): ?>
<?php $component = $__componentOriginal945c94e4d933de00fde2fded18f0e658; ?>
<?php unset($__componentOriginal945c94e4d933de00fde2fded18f0e658); ?>
<?php endif; ?>
    </div>
    <div class="flex flex-row flex-wrap gap-2 justify-center text-gray-900 dark:text-white">
        <span><?php echo e($result); ?></span>
        <span class="text-sm font-semibold flex justify-center"><?php echo e($name); ?></span>    
    </div>
</div><?php /**PATH /Applications/MAMP/htdocs/inventory/resources/views/components/dashboard/summary-chart.blade.php ENDPATH**/ ?>