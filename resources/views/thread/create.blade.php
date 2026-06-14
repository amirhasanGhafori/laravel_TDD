@component('welcome')
    <div class="max-w-5xl mx-auto mt-10 bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">ایجاد موضوع جدید</h2>

        <form action="/threads" method="POST">
            @csrf

            <!-- Title Field -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">عنوان موضوع:</label>
                <input type="text" name="title" id="title"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 @error('title') border-red-500 @enderror"
                    placeholder="عنوان را اینجا بنویسید..." value="{{ old('title') }}" required>

                @error('title')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>



            <select name="channels" id="">
                @foreach ($channels as $channel)
                    <option value="{{ $channel->id }}">{{ $channel->name }}</option>
                @endforeach
            </select>


            <!-- Body Field -->
            <div class="mb-6">
                <label for="body" class="block text-gray-700 text-sm font-bold mb-2">متن موضوع:</label>
                <textarea name="body" id="body" rows="5"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 @error('body') border-red-500 @enderror"
                    placeholder="توضیحات خود را اینجا بنویسید..." required>{{ old('body') }}</textarea>

                @error('body')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-between w-full">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                    انتشار Thread
                </button>

            </div>
        </form>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endcomponent
