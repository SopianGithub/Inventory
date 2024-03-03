<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['name' => 'dashboard', 'link' => '/dashboard', 'icon' => 'dashboard']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['name' => 'dashboard', 'link' => '/dashboard', 'icon' => 'dashboard']); ?>
<?php foreach (array_filter((['name' => 'dashboard', 'link' => '/dashboard', 'icon' => 'dashboard']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<a
    href="<?php echo e($link); ?>"
    class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700"
    >
    <?php if (isset($component)) { $__componentOriginalf6f391f4b73d919c5e2ee031fd396d41 = $component; } ?>
<?php $component = App\View\Components\Theme\IconLink::resolve(['name' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('theme.icon-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Theme\IconLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6f391f4b73d919c5e2ee031fd396d41)): ?>
<?php $component = $__componentOriginalf6f391f4b73d919c5e2ee031fd396d41; ?>
<?php unset($__componentOriginalf6f391f4b73d919c5e2ee031fd396d41); ?>
<?php endif; ?>
    <span class="ml-3" sidebar-toggle-item><?php echo e($name); ?></span>
</a><?php /**PATH /Applications/MAMP/htdocs/inventory/resources/views/components/theme/nav-link.blade.php ENDPATH**/ ?>