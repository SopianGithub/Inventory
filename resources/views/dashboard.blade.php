<x-app-layout>
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
                            <x-dashboard.summary-chart :name="'Sales'" :result="'999'" :icon="'sales'" />
                            <x-dashboard.summary-chart :name="'Revenue'" :result="'999'" :icon="'revenue'" />
                            <x-dashboard.summary-chart :name="'Profit'" :result="'999'" :icon="'profit'" />
                            <x-dashboard.summary-chart :name="'Cost'" :result="'999'" :icon="'cost'" />
                        </div>
                    </div>
                    <div class="lg:w-1/3 w-full p-6 bg-white border border-gray-200 shadow rounded-md dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Inventory Summary</h5>
                        <div class="grid grid-cols-2 gap-2 divide-x-2">
                            <x-dashboard.summary-chart :name="'Quantity In Hand'" :result="'999'" :icon="'quantity in hand'" />
                            <x-dashboard.summary-chart :name="'To Be Received'" :result="'999'" :icon="'to be received'" />
                        </div>
                    </div>
                </div>
            </div>

            <div id="PurchaseOverview">
                <div class="flex lg:flex-row flex-col gap-4 m-5">
                    <div class="lg:w-2/3 w-full p-4 bg-white border border-gray-200 shadow rounded-md dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-4 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Sales Overview</h5>
                        <div class="grid grid-cols-4 gap-2 divide-x-2">
                            <x-dashboard.summary-chart :name="'Purchase'" :result="'999'" :icon="'purchase'" />
                            <x-dashboard.summary-chart :name="'Cost'" :result="'999'" :icon="'cost'" />
                            <x-dashboard.summary-chart :name="'Cancel'" :result="'999'" :icon="'cancel order'" />
                            <x-dashboard.summary-chart :name="'Return'" :result="'999'" :icon="'revenue'" />
                        </div>
                    </div>
                    <div class="lg:w-1/3 w-full p-6 bg-white border border-gray-200 shadow rounded-md dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Inventory Summary</h5>
                        <div class="grid grid-cols-2 gap-2 divide-x-2">
                            <x-dashboard.summary-chart :name="'Number Of Suppliers'" :result="'999'" :icon="'suppliers'" />
                            <x-dashboard.summary-chart :name="'Number Of Categories'" :result="'999'" :icon="'number of categories'" />
                        </div>
                    </div>
                </div>
            </div>

            <div id="salPurChart">
                <div class="flex lg:flex-row flex-col gap-4 m-5">
                    <div class="lg:w-2/3 w-full p-4 bg-white border border-gray-200 shadow rounded-md dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-4 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Sales & Purchase</h5>
                        <livewire:dashboard.sales-purchase />
                    </div>

                    <div class="lg:w-1/3 w-full p-4 bg-white border border-gray-200 shadow rounded-md dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-4 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Order Summary</h5>
                        <livewire:dashboard.order-summary />
                    </div>
                </div>
            </div>

            <div id="Topper">
                <div class="flex lg:flex-row flex-col gap-4 m-5">
                    <div class="lg:w-2/3 w-full p-4 bg-white border border-gray-200 shadow rounded-md dark:bg-gray-800 dark:border-gray-700">
                        <livewire:dashboard.top-selling-stock />
                    </div>

                    <div class="lg:w-1/3 w-full p-4 bg-white border border-gray-200 shadow rounded-md dark:bg-gray-800 dark:border-gray-700">
                        <livewire:dashboard.low-quantity-stock />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-template.footer-sidebar />
</x-app-layout>
