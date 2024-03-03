<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inventory</title>

        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
        <?php echo \Livewire\Livewire::styles(); ?>

    </head>
    <body class="antialiased">
        <div class="h-screen w-full flex justify-center items-center bg-gray-800">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('counter')->html();
} elseif ($_instance->childHasBeenRendered('aavZNHx')) {
    $componentId = $_instance->getRenderedChildComponentId('aavZNHx');
    $componentTag = $_instance->getRenderedChildComponentTagName('aavZNHx');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('aavZNHx');
} else {
    $response = \Livewire\Livewire::mount('counter');
    $html = $response->html();
    $_instance->logRenderedChild('aavZNHx', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>

        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/inventory/resources/views/welcome.blade.php ENDPATH**/ ?>