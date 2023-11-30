@if(session()->has('success'))

    <div x-data="{ show: true }" 
        x-init="setTimeout(() => show = false, 4000)" 
        x-show="show"
        class="fixed bottom-10 bg-blue-500 text-white py-2 px-4 right-0 rounded-xl"
    >
        {{ session()->get('success') }}

    </div>
    
@endif