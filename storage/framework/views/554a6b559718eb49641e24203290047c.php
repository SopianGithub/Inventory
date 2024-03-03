<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
		<div
			id="main-content"
			class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900 min-h-screen"
		>
            <div id="SalesOverview">
                <div class="flex lg:flex-row flex-col gap-4 m-5">
                    <div class="lg:w-2/3 w-full p-4 bg-white border border-gray-200 shadow rounded-md dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-4 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Sales Overview</h5>
                        <div class="grid grid-cols-4 gap-2 divide-x-2">
                            <?php if (isset($component)) { $__componentOriginalde22508cbf6baea8699553d907f62e7d = $component; } ?>
<?php $component = App\View\Components\Dashboard\SummaryChart::resolve(['name' => 'Sales','result' => '999','icon' => 'sales'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.summary-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\SummaryChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde22508cbf6baea8699553d907f62e7d)): ?>
<?php $component = $__componentOriginalde22508cbf6baea8699553d907f62e7d; ?>
<?php unset($__componentOriginalde22508cbf6baea8699553d907f62e7d); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalde22508cbf6baea8699553d907f62e7d = $component; } ?>
<?php $component = App\View\Components\Dashboard\SummaryChart::resolve(['name' => 'Revenue','result' => '999','icon' => 'revenue'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.summary-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\SummaryChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde22508cbf6baea8699553d907f62e7d)): ?>
<?php $component = $__componentOriginalde22508cbf6baea8699553d907f62e7d; ?>
<?php unset($__componentOriginalde22508cbf6baea8699553d907f62e7d); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalde22508cbf6baea8699553d907f62e7d = $component; } ?>
<?php $component = App\View\Components\Dashboard\SummaryChart::resolve(['name' => 'Profit','result' => '999','icon' => 'profit'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.summary-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\SummaryChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde22508cbf6baea8699553d907f62e7d)): ?>
<?php $component = $__componentOriginalde22508cbf6baea8699553d907f62e7d; ?>
<?php unset($__componentOriginalde22508cbf6baea8699553d907f62e7d); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalde22508cbf6baea8699553d907f62e7d = $component; } ?>
<?php $component = App\View\Components\Dashboard\SummaryChart::resolve(['name' => 'Cost','result' => '999','icon' => 'cost'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.summary-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\SummaryChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde22508cbf6baea8699553d907f62e7d)): ?>
<?php $component = $__componentOriginalde22508cbf6baea8699553d907f62e7d; ?>
<?php unset($__componentOriginalde22508cbf6baea8699553d907f62e7d); ?>
<?php endif; ?>
                        </div>
                    </div>
                    <div class="lg:w-1/3 w-full p-6 bg-white border border-gray-200 shadow rounded-md dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Inventory Summary</h5>
                        <div class="grid grid-cols-2 gap-2 divide-x-2">
                            <?php if (isset($component)) { $__componentOriginalde22508cbf6baea8699553d907f62e7d = $component; } ?>
<?php $component = App\View\Components\Dashboard\SummaryChart::resolve(['name' => 'Quantity In Hand','result' => '999','icon' => 'quantity in hand'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.summary-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\SummaryChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde22508cbf6baea8699553d907f62e7d)): ?>
<?php $component = $__componentOriginalde22508cbf6baea8699553d907f62e7d; ?>
<?php unset($__componentOriginalde22508cbf6baea8699553d907f62e7d); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalde22508cbf6baea8699553d907f62e7d = $component; } ?>
<?php $component = App\View\Components\Dashboard\SummaryChart::resolve(['name' => 'To Be Received','result' => '999','icon' => 'to be received'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.summary-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\SummaryChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde22508cbf6baea8699553d907f62e7d)): ?>
<?php $component = $__componentOriginalde22508cbf6baea8699553d907f62e7d; ?>
<?php unset($__componentOriginalde22508cbf6baea8699553d907f62e7d); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div id="PurchaseOverview">
                <div class="flex lg:flex-row flex-col gap-4 m-5">
                    <div class="lg:w-2/3 w-full p-4 bg-white border border-gray-200 shadow rounded-md dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-4 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Sales Overview</h5>
                        <div class="grid grid-cols-4 gap-2 divide-x-2">
                            <?php if (isset($component)) { $__componentOriginalde22508cbf6baea8699553d907f62e7d = $component; } ?>
<?php $component = App\View\Components\Dashboard\SummaryChart::resolve(['name' => 'Purchase','result' => '999','icon' => 'purchase'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.summary-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\SummaryChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde22508cbf6baea8699553d907f62e7d)): ?>
<?php $component = $__componentOriginalde22508cbf6baea8699553d907f62e7d; ?>
<?php unset($__componentOriginalde22508cbf6baea8699553d907f62e7d); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalde22508cbf6baea8699553d907f62e7d = $component; } ?>
<?php $component = App\View\Components\Dashboard\SummaryChart::resolve(['name' => 'Cost','result' => '999','icon' => 'cost'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.summary-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\SummaryChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde22508cbf6baea8699553d907f62e7d)): ?>
<?php $component = $__componentOriginalde22508cbf6baea8699553d907f62e7d; ?>
<?php unset($__componentOriginalde22508cbf6baea8699553d907f62e7d); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalde22508cbf6baea8699553d907f62e7d = $component; } ?>
<?php $component = App\View\Components\Dashboard\SummaryChart::resolve(['name' => 'Cancel','result' => '999','icon' => 'cancel order'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.summary-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\SummaryChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde22508cbf6baea8699553d907f62e7d)): ?>
<?php $component = $__componentOriginalde22508cbf6baea8699553d907f62e7d; ?>
<?php unset($__componentOriginalde22508cbf6baea8699553d907f62e7d); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalde22508cbf6baea8699553d907f62e7d = $component; } ?>
<?php $component = App\View\Components\Dashboard\SummaryChart::resolve(['name' => 'Return','result' => '999','icon' => 'revenue'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.summary-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\SummaryChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde22508cbf6baea8699553d907f62e7d)): ?>
<?php $component = $__componentOriginalde22508cbf6baea8699553d907f62e7d; ?>
<?php unset($__componentOriginalde22508cbf6baea8699553d907f62e7d); ?>
<?php endif; ?>
                        </div>
                    </div>
                    <div class="lg:w-1/3 w-full p-6 bg-white border border-gray-200 shadow rounded-md dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Inventory Summary</h5>
                        <div class="grid grid-cols-2 gap-2 divide-x-2">
                            <?php if (isset($component)) { $__componentOriginalde22508cbf6baea8699553d907f62e7d = $component; } ?>
<?php $component = App\View\Components\Dashboard\SummaryChart::resolve(['name' => 'Number Of Suppliers','result' => '999','icon' => 'suppliers'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.summary-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\SummaryChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde22508cbf6baea8699553d907f62e7d)): ?>
<?php $component = $__componentOriginalde22508cbf6baea8699553d907f62e7d; ?>
<?php unset($__componentOriginalde22508cbf6baea8699553d907f62e7d); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalde22508cbf6baea8699553d907f62e7d = $component; } ?>
<?php $component = App\View\Components\Dashboard\SummaryChart::resolve(['name' => 'Number Of Categories','result' => '999','icon' => 'number of categories'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.summary-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\SummaryChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde22508cbf6baea8699553d907f62e7d)): ?>
<?php $component = $__componentOriginalde22508cbf6baea8699553d907f62e7d; ?>
<?php unset($__componentOriginalde22508cbf6baea8699553d907f62e7d); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div id="salPurChart">
                <div class="flex lg:flex-row flex-col gap-4 m-5">
                    <div class="lg:w-2/3 w-full p-4 bg-white border border-gray-200 shadow rounded-md dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-4 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Sales & Purchase</h5>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.sales-purchase', [])->html();
} elseif ($_instance->childHasBeenRendered('DyLoBPo')) {
    $componentId = $_instance->getRenderedChildComponentId('DyLoBPo');
    $componentTag = $_instance->getRenderedChildComponentTagName('DyLoBPo');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('DyLoBPo');
} else {
    $response = \Livewire\Livewire::mount('dashboard.sales-purchase', []);
    $html = $response->html();
    $_instance->logRenderedChild('DyLoBPo', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>

                    <div class="lg:w-1/3 w-full p-4 bg-white border border-gray-200 shadow rounded-md dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-4 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Order Summary</h5>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.order-summary', [])->html();
} elseif ($_instance->childHasBeenRendered('7OExqAm')) {
    $componentId = $_instance->getRenderedChildComponentId('7OExqAm');
    $componentTag = $_instance->getRenderedChildComponentTagName('7OExqAm');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('7OExqAm');
} else {
    $response = \Livewire\Livewire::mount('dashboard.order-summary', []);
    $html = $response->html();
    $_instance->logRenderedChild('7OExqAm', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                </div>
            </div>

            <div id="Topper">
                <div class="flex lg:flex-row flex-col gap-4 m-5">
                    <div class="lg:w-2/3 w-full p-4 bg-white border border-gray-200 shadow rounded-md dark:bg-gray-800 dark:border-gray-700">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.top-selling-stock', [])->html();
} elseif ($_instance->childHasBeenRendered('eXTYB5X')) {
    $componentId = $_instance->getRenderedChildComponentId('eXTYB5X');
    $componentTag = $_instance->getRenderedChildComponentTagName('eXTYB5X');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('eXTYB5X');
} else {
    $response = \Livewire\Livewire::mount('dashboard.top-selling-stock', []);
    $html = $response->html();
    $_instance->logRenderedChild('eXTYB5X', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>

                    <div class="lg:w-1/3 w-full p-4 bg-white border border-gray-200 shadow rounded-md dark:bg-gray-800 dark:border-gray-700">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.low-quantity-stock', [])->html();
} elseif ($_instance->childHasBeenRendered('vCK29lS')) {
    $componentId = $_instance->getRenderedChildComponentId('vCK29lS');
    $componentTag = $_instance->getRenderedChildComponentTagName('vCK29lS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vCK29lS');
} else {
    $response = \Livewire\Livewire::mount('dashboard.low-quantity-stock', []);
    $html = $response->html();
    $_instance->logRenderedChild('vCK29lS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if (isset($component)) { $__componentOriginala1145debf508bcd80d914733dcff7f09 = $component; } ?>
<?php $component = App\View\Components\Template\FooterSidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('template.footer-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Template\FooterSidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala1145debf508bcd80d914733dcff7f09)): ?>
<?php $component = $__componentOriginala1145debf508bcd80d914733dcff7f09; ?>
<?php unset($__componentOriginala1145debf508bcd80d914733dcff7f09); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /Applications/MAMP/htdocs/inventory/resources/views/dashboard.blade.php ENDPATH**/ ?>