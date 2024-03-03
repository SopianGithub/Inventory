<div
    x-data="wireui_datetime_picker({
        model:  <?php
    if (is_object($attributes->wire('model')) || is_array($attributes->wire('model'))) {
        echo "JSON.parse(atob('".base64_encode(json_encode($attributes->wire('model')))."'))";
    } elseif (is_string($attributes->wire('model'))) {
        echo "'".str_replace("'", "\'", $attributes->wire('model'))."'";
    } else {
        echo json_encode($attributes->wire('model'));
    }
?> ,
    })"
    x-props="{
        config: {
            interval: 10,
            is12H:    true,
            readonly: false,
            disabled: false,
            min: null,
            max: null,
            minTime: 0,
            maxTime: 24,
        },
        withoutTimezone: false,
        timezone:      'UTC',
        userTimezone:  '',
        parseFormat:   '',
        displayFormat: '',
        weekDays:      ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        monthNames:    ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        withoutTime:   false,
    }"
    wire:key="datepicker::normalPicker" class="relative"
>
    <div class="">
            <div class="flex justify-between items-end mb-1">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-400" for="6317d7d909d15fe7496827bea31d74ca">
    Appointment Date
</label>
            
                    </div>
    
    <div class="relative rounded-md  shadow-sm ">
        
        <input type="text" autocomplete="off" class="placeholder-secondary-400 dark:bg-secondary-800 dark:text-secondary-400 dark:placeholder-secondary-500 border border-secondary-300 focus:ring-primary-500 focus:border-primary-500 dark:border-secondary-600 form-input block w-full sm:text-sm rounded-md transition ease-in-out duration-100 focus:outline-none shadow-sm" readonly="readonly" x-on:click="toggle" x-bind:value="model ? getDisplayValue() : null" placeholder="Appointment Date" name="normalPicker" id="6317d7d909d15fe7496827bea31d74ca" />

                    <div class="absolute inset-y-0 right-3 z-5 flex items-center justify-center">
                    <div class="flex items-center gap-x-2 my-auto
                        text-secondary-400">

                                                    <svg class="cursor-pointer w-4 h-4 hover:text-negative-500 transition-colors ease-in-out duration-150" x-cloak="x-cloak" x-show="model" x-on:click="clearDate()" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
</svg>
                        
                        <svg class="cursor-pointer w-5 h-5" x-on:click="toggle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
</svg>
                    </div>
                </div>
            </div>

    
                </div>

    <div class="fixed inset-0 z-20 flex items-end sm:z-10 sm:absolute sm:inset-auto transition-all ease-linear duration-150 "
    style="display: none"
    x-cloak
    x-show="popover"
    x-ref="popover"
    x-on:click.outside="close"
    x-on:keydown.escape.window="handleEscape">
    <div class="fixed inset-0 transition-opacity bg-secondary-400 bg-opacity-60 sm:hidden dark:bg-secondary-700 dark:bg-opacity-60"
        x-show="popover"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-on:click="close"
        aria-hidden="true">
    </div>

    <div
        class="w-full rounded-t-md sm:rounded-xl border border-secondary-200 bg-white shadow-lg dark:bg-secondary-800 dark:border-secondary-600 transition-all relative overflow-hidden max-h-96 overflow-y-auto p-3 sm:w-72"
        x-show="popover"
        tabindex="-1"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
        <div x-show="tab === 'date'" class="space-y-5">
                            <div class="grid grid-cols-3 gap-x-2 text-center text-secondary-600">
                    <button wire:loading.attr="disabled" wire:loading.class="!cursor-wait" type="button" class="outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm disabled:opacity-80 disabled:cursor-not-allowed rounded gap-x-2 text-sm px-4 py-2     border text-slate-500 hover:bg-slate-100 ring-slate-200
    dark:ring-slate-600 dark:border-slate-500 dark:hover:bg-slate-700
    dark:ring-offset-slate-800 dark:text-slate-400 bg-secondary-100 border-none dark:bg-secondary-800" x-on:click="selectYesterday">
    
    Yesterday

    
    </button>

                    <button wire:loading.attr="disabled" wire:loading.class="!cursor-wait" type="button" class="outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm disabled:opacity-80 disabled:cursor-not-allowed rounded gap-x-2 text-sm px-4 py-2     border text-slate-500 hover:bg-slate-100 ring-slate-200
    dark:ring-slate-600 dark:border-slate-500 dark:hover:bg-slate-700
    dark:ring-offset-slate-800 dark:text-slate-400 bg-secondary-100 border-none dark:bg-secondary-800" x-on:click="selectToday">
    
    Today

    
    </button>

                    <button wire:loading.attr="disabled" wire:loading.class="!cursor-wait" type="button" class="outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm disabled:opacity-80 disabled:cursor-not-allowed rounded gap-x-2 text-sm px-4 py-2     border text-slate-500 hover:bg-slate-100 ring-slate-200
    dark:ring-slate-600 dark:border-slate-500 dark:hover:bg-slate-700
    dark:ring-offset-slate-800 dark:text-slate-400 bg-secondary-100 border-none dark:bg-secondary-800" x-on:click="selectTomorrow">
    
    Tomorrow

    
    </button>
                </div>
            
            <div class="flex items-center justify-between">
                <button wire:loading.attr="disabled" wire:loading.class="!cursor-wait" type="button" class="outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm disabled:opacity-80 disabled:cursor-not-allowed rounded gap-x-2 text-sm px-4 py-2     text-slate-500 hover:bg-slate-100 ring-slate-200 dark:text-slate-400
    dark:hover:bg-slate-700 dark:ring-slate-600 dark:ring-offset-slate-700 rounded-lg shrink-0" x-show="!monthsPicker" x-on:click="previousMonth">
            <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
</svg>
    
    

    
    </button>

                <div class="w-full flex items-center justify-center gap-x-2 text-secondary-600 dark:text-secondary-500">
                    <button class="focus:outline-none focus:underline"
                            x-text="monthNames[month]"
                            x-on:click="monthsPicker = !monthsPicker"
                            type="button">
                    </button>
                    <input class="w-14 appearance-none p-0 ring-0 border-none focus:ring-0 focus:outline-none dark:bg-secondary-800"
                           x-model="year"
                           x-on:input.debounce.500ms="fillPickerDates"
                           type="number"
                    />
                </div>

                <button wire:loading.attr="disabled" wire:loading.class="!cursor-wait" type="button" class="outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm disabled:opacity-80 disabled:cursor-not-allowed rounded gap-x-2 text-sm px-4 py-2     text-slate-500 hover:bg-slate-100 ring-slate-200 dark:text-slate-400
    dark:hover:bg-slate-700 dark:ring-slate-600 dark:ring-offset-slate-700 rounded-lg shrink-0" x-show="!monthsPicker" x-on:click="nextMonth">
            <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
</svg>
    
    

    
    </button>
            </div>

            <div class="relative">
                <div class="absolute inset-0 bg-white dark:bg-secondary-800 grid grid-cols-3 gap-3"
                     x-show="monthsPicker"
                     x-transition>
                    <template x-for="(monthName, index) in monthNames" :key="`month.${monthName}`">
                        <button wire:loading.attr="disabled" wire:loading.class="!cursor-wait" type="button" class="outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm disabled:opacity-80 disabled:cursor-not-allowed rounded gap-x-1 text-xs px-2.5 py-1.5     border text-slate-500 hover:bg-slate-100 ring-slate-200
    dark:ring-slate-600 dark:border-slate-500 dark:hover:bg-slate-700
    dark:ring-offset-slate-800 dark:text-slate-400 text-secondary-400 dark:border-0 dark:hover:bg-secondary-700 uppercase" x-on:click="selectMonth(index)" x-text="monthName">
    
    

    
    </button>
                    </template>
                </div>

                <div class="grid grid-cols-7 gap-2">
                    <template x-for="day in weekDays" :key="`week-day.${day}`">
                        <span class="text-secondary-400 text-3xs text-center uppercase pointer-events-none"
                            x-text="day">
                        </span>
                    </template>

                    <template
                        x-for="date in dates"
                        :key="`date.${date.day}.${date.month}`"
                    >
                        <div class="flex justify-center picker-days">
                            <button class="text-sm w-7 h-6 focus:outline-none rounded-md focus:ring-2 focus:ring-ofsset-2 focus:ring-primary-600
                                         hover:bg-primary-100 dark:hover:bg-secondary-700 dark:focus:ring-secondary-400
                                          disabled:cursor-not-allowed"
                                :class="{
                                    'text-secondary-600 dark:text-secondary-400': !date.isDisabled && !date.isSelected && date.month === month,
                                    'text-secondary-400 dark:text-secondary-600': date.isDisabled || date.month !== month,
                                    'text-primary-600 border border-primary-600 dark:border-gray-400': date.isToday && !date.isSelected,
                                    'disabled:text-primary-400 disabled:border-primary-400': date.isToday && !date.isSelected,
                                    '!text-white bg-primary-600 font-semibold border border-primary-600': date.isSelected,
                                    'disabled:bg-primary-400 disabled:border-primary-400': date.isSelected,
                                    'hover:bg-primary-600 dark:bg-secondary-700 dark:border-secondary-400': date.isSelected,
                                }"
                                :disabled="date.isDisabled"
                                x-on:click="selectDate(date)"
                                x-text="date.day"
                                type="button">
                            </button>
                        </div>
                    </template>
                </div>
            </div>
        </div>

        <div x-show="tab === 'time'" x-transition>
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

            <div x-ref="timesContainer"
                 class="mt-1 w-full max-h-52 pb-1 pt-2 overflow-y-auto flex flex-col picker-times">
                <template x-for="time in filteredTimes" :key="time.value">
                    <button class="group rounded-md focus:outline-none focus:bg-primary-100 dark:focus:bg-secondary-700
                                   relative py-2 pl-2 pr-9 text-left transition-colors ease-in-out duration-100 cursor-pointer select-none
                                   hover:text-white hover:bg-primary-600 dark:hover:bg-secondary-700 dark:text-secondary-400"
                            :class="{
                            'text-primary-600': modelTime === time.value,
                            'text-secondary-700': modelTime !== time.value,
                        }"
                        :name="`times.${time.value}`"
                        type="button"
                        x-on:click="selectTime(time)">
                        <span x-text="time.label"></span>
                        <span class="text-primary-600 dark:text-secondary-400 group-hover:text-white
                                     absolute inset-y-0 right-0 flex items-center pr-4"
                              x-show="modelTime === time.value">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
</svg>
                        </span>
                    </button>
                </template>
            </div>
        </div>
    </div>
</div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/inventory/storage/framework/views/5a0f38426c8c30805484b595dc8355b9.blade.php ENDPATH**/ ?>