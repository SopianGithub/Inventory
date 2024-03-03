<div class="">
    
    <div class="relative rounded-md ">
        
        <input type="text" autocomplete="off" class="placeholder-secondary-400 dark:bg-secondary-800 dark:text-secondary-400 dark:placeholder-secondary-500 border border-secondary-300 focus:ring-primary-500 focus:border-primary-500 dark:border-secondary-600 form-input block w-full sm:text-sm rounded-md transition ease-in-out duration-100 focus:outline-none pr-8 bg-slate-100" x-ref="search" x-model.debounce.750ms="search" x-on:keydown.arrow-down.prevent="$event.shiftKey || getNextFocusable().focus()" x-on:keydown.arrow-up.prevent="getPrevFocusable().focus()" placeholder="Search here" />

                    <div class="absolute inset-y-0 right-0 pr-2.5 flex items-center pointer-events-none
                text-secondary-400">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
</svg>
                            </div>
            </div>

    
    </div>
