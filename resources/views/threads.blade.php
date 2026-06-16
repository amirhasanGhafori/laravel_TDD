@component('welcome')
    <div class="max-w-3xl mx-auto mt-10 rounded-2xl bg-white p-6 shadow-md border border-gray-200">
        <h1 class="mb-6 text-2xl font-bold text-gray-800 border-b pb-3">
            Threads
        </h1>

        <div class="space-y-3">
            @foreach ($threads as $item)
                <div class="rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 hover:bg-gray-100 transition">
                    <a href="{{ $item->path() }}" class="text-lg font-medium text-gray-700">
                        {{ $item->title }}
                    </a>

                    <span>{{ $item->replies_count }}</span>
                    
                </div>
            @endforeach
        </div>
    </div>
@endcomponent
