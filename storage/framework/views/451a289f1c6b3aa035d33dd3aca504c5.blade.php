<div class="">
            <div class="flex justify-between items-end mb-1">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-400" for="search.normalPicker">
    Select time
</label>
            
                    </div>
    
    <div class="relative rounded-md  shadow-sm ">
        
        <input type="text" autocomplete="off" class="placeholder-secondary-400 dark:bg-secondary-800 dark:text-secondary-400 dark:placeholder-secondary-500 border border-secondary-300 focus:ring-primary-500 focus:border-primary-500 dark:border-secondary-600 form-input block w-full sm:text-sm rounded-md transition ease-in-out duration-100 focus:outline-none shadow-sm" id="search.normalPicker" x-model="searchTime" x-bind:placeholder="getSearchPlaceholder" x-ref="searchTime" x-on:input.debounce.150ms="onSearchTime($event.target.value)" />

            </div>

    
    </div>
