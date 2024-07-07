<x-admin::layouts>

    <!-- Title of the page -->
    <x-slot:title>
        Product Enquiries
    </x-slot>

    <div class="flex items-center justify-between gap-4 max-sm:flex-wrap pt-2">
        <!-- Title -->
        <p class="text-xl font-bold text-gray-800 dark:text-white">
            Product Enquiries
        </p>
    </div>
    <!-- Page Content -->
    <div class="page-content">
        <x-admin::datagrid :src="route('admin.bagistoProductEnquiries.index')" />
    </div>

</x-admin::layouts>
