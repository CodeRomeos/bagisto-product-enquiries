<x-shop::layouts>

    <!-- Title of the page -->
    <x-slot:title>
        Product Enquiry
    </x-slot>

    <div class="main">
        <div class="container mt-[100px] px-[60px] max-lg:px-[30px]">
            <div style="max-width: 600px;" class="m-auto w-full flex flex-col gap-4">
                <br />
                <h1 style="font-size: 24px;">Product Enquiry</h1>
                @if (session()->has('flash_message'))
                    <div class="alert alert-success"
                        style="background-color: rgb(70, 171, 70); color: white; padding: 5px 10px; border-radius: 5px; margin-bottom: 10px; text-align: center">
                        {{ session()->get('flash_message') }}
                    </div>
                @endif


                <x-bagistoProductEnquiries::product-enquiry-form :product="$product" />
            </div>
        </div>
    </div>
</x-shop::layouts>
