<div class="container mx-auto p-4">
    <h1 class="text-xl font-bold mb-4">Select a Page Template</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <!-- Option 1: Services Page -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-lg font-semibold">Services Page</h2>
            <p>A page to display the services your company offers.</p>
            <button wire:click="selectTemplate('services')" class="bg-blue-500 text-white p-2 rounded mt-2 w-full">
                Select Template
            </button>
        </div>

        <!-- Option 2: About Us Page -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-lg font-semibold">About Us Page</h2>
            <p>A page to display company information and team details.</p>
            <button wire:click="selectTemplate('about')" class="bg-blue-500 text-white p-2 rounded mt-2 w-full">
                Select Template
            </button>
        </div>

        <!-- Option 3: Contact Page -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-lg font-semibold">Contact Page</h2>
            <p>A page with a contact form and contact details.</p>
            <button wire:click="selectTemplate('contact')" class="bg-blue-500 text-white p-2 rounded mt-2 w-full">
                Select Template
            </button>
        </div>
    </div>

    <!-- Display the selected template (just for demonstration) -->
    @if (session()->has('template'))
        <div class="mt-6 p-4 bg-green-100 rounded-md">
            <h3 class="text-lg font-semibold">You selected: {{ session('template') }}</h3>
        </div>
    @endif
</div>
