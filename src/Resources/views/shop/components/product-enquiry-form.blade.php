<form method="POST" action="{{ route('shop.bagistoProductEnquiries.store') }}">
    <div class="flex flex-col gap-4">
        <div>
            <label for="product_id">Product</label>
            <input type="text" class="block w-full px-4 py-3.5 border border-['#E3E3E3'] rounded-xl text-gray-900"
                name="product_name" value="{{ optional($product)->name }}" placeholder="Product" required readonly
                disabled>
            <input type='hidden' name="product_id" value="{{ optional($product)->id }}">
        </div>
        <div>
            <label for="name">Name</label>
            <input type="text" class="block w-full px-4 py-3.5 border border-['#E3E3E3'] rounded-xl text-gray-900"
                name="name" id="name" placeholder="Name" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" class="block w-full px-4 py-3.5 border border-['#E3E3E3'] rounded-xl text-gray-900"
                name="email" id="email" placeholder="Email" required>
        </div>
        <div>
            <label for="phone">Phone</label>
            <input type="text" class="block w-full px-4 py-3.5 border border-['#E3E3E3'] rounded-xl text-gray-900"
                name="phone" id="phone" placeholder="Phone" required>
        </div>
        <div>
            <label for="message">Message</label>
            <textarea class="block w-full px-4 py-3.5 border border-['#E3E3E3'] rounded-xl text-gray-900" name="message"
                id="message" placeholder="Message" required></textarea>
        </div>
        <div>
            @csrf
            <button class="primary-button">Submit</button>
        </div>
    </div>
</form>
