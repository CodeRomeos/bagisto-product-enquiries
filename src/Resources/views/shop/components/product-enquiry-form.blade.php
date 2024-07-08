<x-shop::form method="POST" action="{{ route('shop.bagistoProductEnquiries.store') }}">
    <div class="flex flex-col gap-4">
        <x-shop::form.control-group>
            <x-shop::form.control-group.label for="product_name">
                Product
            </x-shop::form.control-group.label>

            @if ($product)
                <x-shop::form.control-group.control id="product_name" type="text" name="product_name"
                    value="{{ optional($product)->name }}" label="Product" placeholder="Product" required readonly />
            @else
                <x-shop::form.control-group.control id="product_name" type="text" name="product_name"
                    label="Product Name" placeholder="Product name" rules="required" />
                <x-shop::form.control-group.error control-name="product_name" />
            @endif
            <input type='hidden' name="product_id" value="{{ optional($product)->id }}">
        </x-shop::form.control-group>
        <x-shop::form.control-group>
            <x-shop::form.control-group.label for="name">
                Name
            </x-shop::form.control-group.label>

            <x-shop::form.control-group.control id="name" type="text" name="name" rules="required"
                label="Name" placeholder="Enter your name" />

            <x-shop::form.control-group.error control-name="name" />
        </x-shop::form.control-group>
        <x-shop::form.control-group>
            <x-shop::form.control-group.label for="email">
                Email
            </x-shop::form.control-group.label>

            <x-shop::form.control-group.control type="email" name="email" id="email" label="Email"
                placeholder="email@example.com" />

            <x-shop::form.control-group.error control-name="email" />
        </x-shop::form.control-group>
        <x-shop::form.control-group>
            <x-shop::form.control-group.label for="phone">
                Phone
            </x-shop::form.control-group.label>
            <x-shop::form.control-group.control id="phone" type="text" name="phone" rules="required"
                label="Phone" placeholder="Enter your phone" />
            <x-shop::form.control-group.error control-name="phone" />
        </x-shop::form.control-group>
        <x-shop::form.control-group>
            <x-shop::form.control-group.label id="message">
                Message
            </x-shop::form.control-group.label>

            <x-shop::form.control-group.control type="textarea" class="description" name="message" label="message"
                placeholder="Enter your message" />

            <x-shop::form.control-group.error control-name="message" />
        </x-shop::form.control-group>
        <x-shop::form.control-group>
            @csrf
            <button class="primary-button">Submit</button>
        </x-shop::form.control-group>
    </div>
</x-shop::form>
