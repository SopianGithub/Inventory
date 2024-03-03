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
            <div id="overviewInventory">
                <div class="flex gap-4 m-5">
                    <div class="w-full p-4 bg-white border border-gray-200 shadow rounded-md dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-4 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Inventory Overview</h5>
                        <div class="grid grid-cols-4 gap-2 divide-x-2">
                            <div id="categories" class="flex flex-col gap-2 px-2">
                                <h3 class="text-md font-bold text-blue-600">Categories</h3>
                                <label class="text-md text-gray-900 dark:text-white">14</label>
                                <span class="text-sm font-thin text-gray-900 dark:text-white">last 7 Days</span>
                            </div>
                            <div id="product" class="flex flex-col gap-2 pl-6">
                                <h3 class="text-md font-bold text-orange-500">Total Product</h3>
                                <div class="grid grid-cols-2 mt-1">
                                    <div class="flex flex-col">
                                        <label class="flex justify-between text-md text-gray-900 dark:text-white">14</label>
                                        <span class="flex justify-between text-sm font-thin text-gray-900 dark:text-white">last 7 Days</span>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="flex justify-between text-md text-gray-900 dark:text-white">999</label>
                                        <span class="flex justify-between text-sm font-thin text-gray-900 dark:text-white">Revenue</span>
                                    </div>
                                </div>
                            </div>
                            <div id="selling" class="flex flex-col gap-2 pl-6">
                                <h3 class="text-md font-bold text-purple-700">Top Selling</h3>
                                <div class="grid grid-cols-2 mt-1">
                                    <div class="flex flex-col">
                                        <label class="flex justify-between text-md text-gray-900 dark:text-white">14</label>
                                        <span class="flex justify-between text-sm font-thin text-gray-900 dark:text-white">last 7 Days</span>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="flex justify-between text-md text-gray-900 dark:text-white">999</label>
                                        <span class="flex justify-between text-sm font-thin text-gray-900 dark:text-white">Cost</span>
                                    </div>
                                </div>
                            </div>
                            <div id="stock" class="flex flex-col gap-2 pl-6">
                                <h3 class="text-md font-bold text-red-800">Low Stock</h3>
                                <div class="grid grid-cols-2 mt-1">
                                    <div class="flex flex-col">
                                        <label class="flex justify-between text-md text-gray-900 dark:text-white">14</label>
                                        <span class="flex justify-between text-sm font-thin text-gray-900 dark:text-white">Ordered</span>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="flex justify-between text-md text-gray-900 dark:text-white">999</label>
                                        <span class="flex justify-between text-sm font-thin text-gray-900 dark:text-white">Not In Stock</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="dataInventory">
                <div class="flex m-5">
                    <div class="w-full p-4 bg-white border border-gray-200 shadow rounded-md dark:bg-gray-800 dark:border-gray-700">
                        <h1 class="text-lg font-semibold text-gray-900 sm:text-md dark:text-white">
                            Product
                        </h1>
                        <div class="sm:flex">
                            <div class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                                <form class="lg:pr-3" action="#" method="GET">
                                    <label for="product-search" class="sr-only">Search</label>
                                    <div class="relative mt-1 lg:w-64 xl:w-96">
                                        <input
                                            type="text"
                                            name="email"
                                            id="product-search"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Search for product"
                                        />
                                    </div>
                                </form>
                                <div class="flex pl-0 mt-3 space-x-1 sm:pl-2 sm:mt-0">
                                    <a href="#"
                                       class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        <svg
                                            class="w-6 h-6"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                            ><path
                                                fill-rule="evenodd"
                                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                    <a
                                        href="#"
                                        class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    >
                                        <svg
                                            class="w-6 h-6"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                            ><path
                                                fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                    <a
                                        href="#"
                                        class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    >
                                        <svg
                                            class="w-6 h-6"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                            ><path
                                                fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                    <a
                                        href="#"
                                        class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    >
                                        <svg
                                            class="w-6 h-6"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                            ><path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                                <button
                                    type="button"
                                    data-modal-toggle="add-product-modal"
                                    class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white sm:text-md rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                >
                                    <svg
                                        class="w-5 h-5 mr-2 -ml-1"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                        ><path
                                            fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Add Product
                                </button>
                                <a
                                    href="#"
                                    class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white sm:text-md rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                >
                                    <svg
                                        class="w-5 h-5 mr-2 -ml-1"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                        ><path
                                            fill-rule="evenodd"
                                            d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Export
                                </a>
                            </div>
                        </div>

                        <div class="flex flex-col mt-2">
                            <div class="overflow-x-auto">
                                <div class="inline-block min-w-full align-middle">
                                    <div class="overflow-hidden shadow">
                                        <table
                                            class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600"
                                        >
                                            <thead class="bg-gray-100 dark:bg-gray-700">
                                                <tr>
                                                    <th scope="col" class="p-4">
                                                        <div class="flex items-center">
                                                            <input
                                                                id="checkbox-all"
                                                                aria-describedby="checkbox-1"
                                                                type="checkbox"
                                                                class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600"
                                                            />
                                                            <label for="checkbox-all" class="sr-only">checkbox</label>
                                                        </div>
                                                    </th>
                                                    <th
                                                        scope="col"
                                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400"
                                                    >
                                                        Product
                                                    </th>
                                                    <th
                                                        scope="col"
                                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400"
                                                    >
                                                        Buying Price
                                                    </th>
                                                    <th
                                                        scope="col"
                                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400"
                                                    >
                                                        Quantitty
                                                    </th>
                                                    <th
                                                        scope="col"
                                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400"
                                                    >
                                                        Thershold Value
                                                    </th>
                                                    <th
                                                        scope="col"
                                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400"
                                                    >
                                                        Expired Date
                                                    </th>
                                                    <th
                                                        scope="col"
                                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400"
                                                    >
                                                        Avaibility
                                                    </th>
                                                    <th
                                                        scope="col"
                                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400"
                                                    >
                                                        View
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody
                                                class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700"
                                            >
                                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                    <td class="w-4 p-4">
                                                        <div class="flex items-center">
                                                            <input
                                                                id="checkbox-1"
                                                                aria-describedby="checkbox-1"
                                                                type="checkbox"
                                                                class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600"
                                                            />
                                                            <label for="checkbox-1" class="sr-only">
                                                                checkbox
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                                        Maggi
                                                    </td>
                                                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                                        Rp420
                                                    </td>
                                                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                                        43 Packets
                                                    </td>
                                                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                                        12 Packets
                                                    </td>
                                                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                                        11/12/2024
                                                    </td>
                                                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                                        In Stock
                                                    </td>
                                                    <td class="p-4 space-x-2 whitespace-nowrap">
                                                        <button
                                                            type="button"
                                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                        >
                                                            <svg
                                                                class="w-4 h-4 mr-2"
                                                                fill="currentColor"
                                                                viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <>
                                                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                        clip-rule="evenodd"
                                                                    />
                                                                </>
                                                            </svg>
                                                            Overview
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <nav-pagination
                                            class="block sticky bottom-0 right-0 items-center w-full p-4 bg-white border-t border-gray-200 sm:flex sm:justify-between dark:bg-gray-800 dark:border-gray-700"
                                        >
                                            <div class="flex items-center mb-4 sm:mb-0">
                                                <a
                                                    href="#"
                                                    class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                                >
                                                    <svg
                                                        class="w-7 h-7"
                                                        fill="currentColor"
                                                        viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        ><path
                                                            fill-rule="evenodd"
                                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                                <a
                                                    href="#"
                                                    class="inline-flex justify-center p-1 mr-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                                >
                                                    <svg
                                                        class="w-7 h-7"
                                                        fill="currentColor"
                                                        viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        ><path
                                                            fill-rule="evenodd"
                                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                                <span class="text-sm font-normal text-gray-500 dark:text-gray-400"
                                                    >Showing <span class="font-semibold text-gray-900 dark:text-white"
                                                        >1-20</span
                                                    > of <span class="font-semibold text-gray-900 dark:text-white">2290</span
                                                    ></span
                                                >
                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <a
                                                    href="#"
                                                    class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                >
                                                    <svg
                                                        class="w-5 h-5 mr-1 -ml-1"
                                                        fill="currentColor"
                                                        viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        ><path
                                                            fill-rule="evenodd"
                                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    Previous
                                                </a>
                                                <a
                                                    href="#"
                                                    class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                >
                                                    Next
                                                    <svg
                                                        class="w-5 h-5 ml-1 -mr-1"
                                                        fill="currentColor"
                                                        viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        ><path
                                                            fill-rule="evenodd"
                                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </nav-pagination>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Product Modal -->
	<div
		class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
		id="add-product-modal"
	>
		<div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
			<!-- Modal content -->
			<div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
				<!-- Modal header -->
				<div
					class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700"
				>
					<h3 class="text-xl font-semibold dark:text-white">New Product</h3>
					<button
						type="button"
						class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
						data-modal-toggle="add-product-modal"
					>
						<svg
							class="w-5 h-5"
							fill="currentColor"
							viewBox="0 0 20 20"
							xmlns="http://www.w3.org/2000/svg"
							><path
								fill-rule="evenodd"
								d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
								clip-rule="evenodd"></path>
                        </svg>
					</button>
				</div>
				<!-- Modal body -->
				<div class="p-6 space-y-6">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('form.new-product', [])->html();
} elseif ($_instance->childHasBeenRendered('FB4PKtb')) {
    $componentId = $_instance->getRenderedChildComponentId('FB4PKtb');
    $componentTag = $_instance->getRenderedChildComponentTagName('FB4PKtb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('FB4PKtb');
} else {
    $response = \Livewire\Livewire::mount('form.new-product', []);
    $html = $response->html();
    $_instance->logRenderedChild('FB4PKtb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
					<!-- Modal footer -->
					
				</div>
			</div>
		</div>
	</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /Applications/MAMP/htdocs/inventory/resources/views/inventory.blade.php ENDPATH**/ ?>