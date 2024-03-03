<div class="">
    
    <div class="relative rounded-md  shadow-sm ">
                    <div :class="{
                    'pointer-events-none': config.readonly,
                    'cursor-pointer': !config.readonly,
                }">
                    <template x-if="!config.multiselect">
                        <div class="absolute left-0 inset-y-0 w-[calc(100%-3.5rem)] flex items-center pl-3.5"
                            x-on:click="toggle">
                            
                            <span
                                class="truncate text-secondary-700 dark:text-secondary-400 text-sm"
                                x-show="!isEmpty()"
                                x-html="getSelectedDisplayText()">
                            </span>
                        </div>
                    </template>

                    <template x-if="config.multiselect">
                        <div class="absolute left-0 inset-y-0 pl-3 pr-14 w-full flex items-center overflow-hidden" x-on:click="toggle">
                            <div class="flex items-center gap-2 overflow-x-auto hide-scrollbar">
                                
                                                                    <span
                                        class="inline-flex text-secondary-700 dark:text-secondary-400 text-sm"
                                        x-show="selectedOptions.length"
                                        x-text="selectedOptions.length">
                                    </span>
                                
                                <div wire:ignore class="flex flex-nowrap items-center gap-1">
                                    <template x-for="(option, index) in selectedOptions" :key="`selected.${index}`">
                                        <span class="
                                                inline-flex items-center py-0.5 pl-2 pr-0.5 rounded-full text-xs font-medium
                                                border border-secondary-200 shadow-sm bg-secondary-100 text-secondary-700
                                                dark:bg-secondary-700 dark:text-secondary-400 dark:border-none
                                            ">
                                            <span style="max-width: 5rem" class="truncate" x-text="option.label"></span>

                                            <button
                                                class="shrink-0 h-4 w-4 flex items-center text-secondary-400 justify-center hover:text-secondary-500"
                                                x-on:click.stop="unSelect(option)"
                                                tabindex="-1"
                                                type="button">
                                                <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
</svg>
                                            </button>
                                        </span>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
        
        <input type="text" autocomplete="disabled" class="placeholder-secondary-400 dark:bg-secondary-800 dark:text-secondary-400 dark:placeholder-secondary-500 border border-secondary-300 focus:ring-primary-500 focus:border-primary-500 dark:border-secondary-600 form-input block w-full sm:text-sm rounded-md transition ease-in-out duration-100 focus:outline-none shadow-sm cursor-pointer overflow-hidden !text-transparent !dark:text-transparent selection:bg-transparent" x-ref="input" x-on:click="toggle" x-on:focus="open" x-on:blur.debounce.750ms="closeIfNotFocused" x-on:keydown.enter.stop.prevent="toggle" x-on:keydown.space.stop.prevent="toggle" x-on:keydown.arrow-down.prevent="$event.shiftKey || getNextFocusable().focus()" x-on:keydown.arrow-up.prevent="getPrevFocusable().focus()" x-bind:placeholder="getPlaceholder" x-bind:value="getSelectedValue" inputmode="none" name="category" id="c4ef352f74e502ef5e7bc98e6f4e493d" />

                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 gap-x-2">
                                            <button
                            x-show="!isEmpty()"
                            x-on:click="clear"
                            tabindex="-1"
                            type="button"
                            x-cloak>
                            <svg class="w-4 h-4 text-secondary-400 hover:text-negative-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
</svg>
                        </button>
                    
                    <button tabindex="-1" x-on:click="toggle" type="button">
                        <svg class="w-5 h-5
                            text-secondary-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
</svg>
                    </button>
                </div>
            </div>

    
                </div>
<?php /**PATH /Applications/MAMP/htdocs/inventory/storage/framework/views/a7fec8579d0ef1a967745429d097a8b7.blade.php ENDPATH**/ ?>