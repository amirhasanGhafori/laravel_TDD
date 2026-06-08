@component('welcome')
    <div class="max-w-3xl mx-auto mt-10 space-y-6">
        {{-- Thread Card --}}
        <div class="rounded-2xl bg-slate-800 p-6 shadow-lg border border-slate-700">
            <h1 class="text-2xl font-bold text-white leading-relaxed">
                {{ $thread->title }}
            </h1>
        </div>

        {{-- Replies Section --}}
        <div class="rounded-2xl bg-white p-6 shadow-lg border border-gray-200">
            <div class="mb-5 flex items-center justify-between border-b border-gray-200 pb-3">
                <h2 class="text-xl font-semibold text-gray-800">
                    پاسخ‌ها
                </h2>
                <span class="rounded-full bg-blue-100 px-3 py-1 text-sm font-medium text-blue-700">
                    {{ $thread->replies->count() }} پاسخ
                </span>
            </div>

            <div class="space-y-4">
                @foreach ($thread->replies as $reply)
                    @include('thread.reply')
                @endforeach
            </div>


            @if (auth()->check())
                <div class="space-y-4">
                    <form action="{{ $thread->path() . '/replies' }}" method="post">
                        @csrf
                        <textarea class="bg-gray-500 w-full border rounded-lg my-2" name="body" id="body" cols="20" rows="4"></textarea>


                        <button class="bg-red-400 p-2 rounded-xl cursor-pointer">Save</button>
                    </form>
                </div>
            @endif
        </div>
    </div>
@endcomponent
