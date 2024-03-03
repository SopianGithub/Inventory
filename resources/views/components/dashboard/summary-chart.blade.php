<div id="'{{$name}}'" class="flex flex-col gap-2 justify-center items-center">
    <div id="'icon-{{$icon}}'">
        <x-dashboard.icon-list :name="$icon" />
    </div>
    <div class="flex flex-row flex-wrap gap-2 justify-center text-gray-900 dark:text-white">
        <span>{{ $result }}</span>
        <span class="text-sm font-semibold flex justify-center">{{ $name }}</span>    
    </div>
</div>