
<form wire:submit.prevent="saveProduct" id="formNewProduct" method="POST" enctype="multipart/form-data">
    @csrf

    <div x-data="{ isUploading: false, progress: 0 }"
            x-on:livewire-upload-start="isUploading = true"
            x-on:livewire-upload-finish="isUploading = false"
            x-on:livewire-upload-error="isUploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress">
        @if ($photo)
            <div class="flex flex-col justify-center items-center w-full">
                <img src="{{ $photo->temporaryUrl() }}" alt="Photo Upload" class="w-32">
                <label>{{ $photo->getClientOriginalName() }}</label>
            </div>
        @endif
        <div class="flex items-center justify-center w-full">
            <label for="dropzone-file" class="flex flex-col items-center justify-center w-1/2 h-18 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-1 pb-2">
                    <svg aria-hidden="true" class="w-5 h-5 mb-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                </div>
                <input type="file" wire:model="photo" class="hidden" id="dropzone-file" />
            </label>
        </div>
        <!-- Progress Bar -->
        <div x-show="isUploading">
            <progress max="100" x-bind:value="progress"></progress>
        </div>

        @error('photo') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="grid grid-cols-6 gap-6 mt-2">
        <div class="col-span-6 sm:col-span-3">
            <x-input wire:model="productName" label="Product Name" placeholder="Input Product Name" required />
        </div>
        <div class="col-span-6 sm:col-span-3">
            <x-input wire:model="productId" label="Product ID" placeholder="Input Product ID" required />
        </div>
        <div class="col-span-6 sm:col-span-3">
            <!-- <x-select
                label="Category"
                placeholder="Select one category"
                :options="['Alat Tulis', 'Buku & Kertas', 'Akessoris Sekolah', 'Aksesoris Kantor']"
                wire:model.defer="category"
            /> -->
            <!-- <x-native-select
                label="Select Status"
                placeholder="Select one status"
                :options="['Active', 'Pending', 'Stuck', 'Done']"
                wire:model="category"
            /> -->
        </div>
        <div class="col-span-6 sm:col-span-3">
            <label
                for="buyingprice"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Buying Price</label
            >
            <input
                type="text"
                name="buyingprice"
                id="buyingprice"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Input Buying Price"
                required
            />
        </div>
        <!-- <div class="col-span-6">
            <label
                for="biography"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Quantity</label
            >
            <textarea
                id="biography"
                rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="👨‍💻Full-stack web developer. Open-source contributor."
            ></textarea>
        </div> -->
        <div class="col-span-6 sm:col-span-3">
            <label
                for="quantity"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Quantity</label
            >
            <input
                type="text"
                name="quantity"
                id="quantity"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="quantity"
                required
            />
        </div>
        <div class="col-span-6 sm:col-span-3">
            <label
                for="expireddate"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Expired Date</label
            >
            <x-datetime-picker
                label="Appointment Date"
                placeholder="Appointment Date"
                wire:model.defer="normalPicker"
            />
        </div>
        <div class="col-span-6 sm:col-span-3">
            <label
                for="thresholdValue"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Threshold Value</label
            >
            <input
                type="text"
                name="thresholdValue"
                id="thresholdValue"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Thereshold Value"
                required
            />
        </div>
    </div>

    <div
        class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700"
    >
        <button
            class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
            type="button" data-modal-toggle="add-product-modal">Discard</button
        >
        <button
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
            type="submit">Add Product</button
        >
    </div>
</form>