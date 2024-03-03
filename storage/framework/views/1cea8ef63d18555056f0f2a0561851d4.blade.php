<div class="relative"
    x-data="wireui_select({
                    wireModel: window.Livewire.find('').entangle('category').defer,
            })"
    x-props="{
        asyncData:    JSON.parse(atob('eyJhcGkiOm51bGwsIm1ldGhvZCI6IkdFVCIsInBhcmFtcyI6W10sImFsd2F5c0ZldGNoIjpmYWxzZX0=')),
        optionValue:  null,
        optionLabel:  null,
        optionDescription: null,
        hasSlot:     false,
        multiselect: false,
        searchable:  true,
        clearable:   true,
        readonly:    false,
        placeholder: 'Select one status',
        template:    null,
    }">
    <div hidden x-ref="json">JSON.parse(atob('W3sibGFiZWwiOiJBY3RpdmUiLCJ2YWx1ZSI6IkFjdGl2ZSJ9LHsibGFiZWwiOiJQZW5kaW5nIiwidmFsdWUiOiJQZW5kaW5nIn0seyJsYWJlbCI6IlN0dWNrIiwidmFsdWUiOiJTdHVjayJ9LHsibGFiZWwiOiJEb25lIiwidmFsdWUiOiJEb25lIn1d'))</div>
    <div hidden x-ref="slot"></div>

    
    <div class="relative">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-400 mb-1" x-on:click="toggle" wire:key="select.label.category">
    Select Status
</label>
        
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

            </div>

    <div class="fixed inset-0 z-20 flex items-end sm:z-10 sm:absolute sm:inset-auto transition-all ease-linear duration-150 sm:w-full"
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
        class="w-full rounded-t-md sm:rounded-xl border border-secondary-200 bg-white shadow-lg dark:bg-secondary-800 dark:border-secondary-600 transition-all relative overflow-hidden"
        x-show="popover"
        tabindex="-1"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
        <template x-if="asyncData.api || (config.searchable && options.length >= 11)">
            <div class="px-2 my-2" wire:key="search.options.category">
                <x-dynamic-component
                    :component="WireUi::component('input')"
                    class="bg-slate-100"
                    x-ref="search"
                    x-model.debounce.750ms="search"
                    x-on:keydown.arrow-down.prevent="$event.shiftKey || getNextFocusable().focus()"
                    x-on:keydown.arrow-up.prevent="getPrevFocusable().focus()"
                    shadowless
                    right-icon="search"
                    :placeholder="trans('wireui::messages.searchHere')"
                />
            </div>
        </template>

        <div class="max-h-64 sm:max-h-60 overflow-y-auto overscroll-contain soft-scrollbar select-none"
            tabindex="-1"
            x-ref="optionsContainer"
            name="wireui.select.options.category"
            x-on:keydown.tab.prevent="$event.shiftKey || getNextFocusable().focus()"
            x-on:keydown.arrow-down.prevent="$event.shiftKey || getNextFocusable().focus()"
            x-on:keydown.shift.tab.prevent="getPrevFocusable().focus()"
            x-on:keydown.arrow-up.prevent="getPrevFocusable().focus()">
            <div class="w-full h-0.5 rounded-full relative overflow-hidden"
                :class="{
                    'bg-gray-200 dark:bg-gray-700': asyncData.fetching
                }">
                <div class="bg-primary-500 h-0.5 rounded-full absolute animate-linear-progress"
                    style="width: 30%"
                    x-show="asyncData.fetching">
                </div>
            </div>

            
            <ul x-ref="listing" wire:ignore>
                <template x-for="(option, index) in displayOptions" :key="`${index}.${option.value}`">
                    <li tabindex="-1" :index="index">
                        <div class="px-2 py-0.5">
                            <div class="h-8 w-full animate-pulse bg-slate-200 dark:bg-slate-600 rounded"></div>
                        </div>
                    </li>
                </template>
            </ul>

                            <div class="py-12 px-3 sm:py-2 sm:px-3 text-center sm:text-left text-secondary-500 cursor-pointer"
                    x-show="displayOptions.length === 0"
                    x-on:click="close">
                    Empty Options
                </div>
            
                    </div>
    </div>
</div>
</div>
