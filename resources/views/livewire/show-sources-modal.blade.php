<div class="p-4 bg-white rounded-lg shadow-md">
    <ul class="space-y-4">
        @foreach($sources as $source)
        <li class="pb-4 border-b">
            <a href="{{ $source['url'] }}" target="_blank"
                class="text-lg font-semibold text-blue-500 hover:underline">{{ $source['title'] }}</a>
            <p class="mt-2 text-gray-700">{{ $source['description'] }}</p>
            <small class="text-gray-500">Type: {{ $source['type'] }}</small>
            <p class="mt-1 text-gray-500">URL: <a href="{{ $source['url'] }}" target="_blank"
                    class="text-blue-500 hover:underline">{{ $source['url'] }}</a></p>
        </li>
        @endforeach
    </ul>
</div>