<div class="p-4 bg-white rounded-lg shadow-md" wire:poll.750ms>
    <ul class="space-y-4">
        @forelse($sources as $source)
        <li class="pb-4 border-b">
            <a href="{{ $source['url'] }}" target="_blank"
                class="text-lg font-semibold text-blue-500 hover:underline">{{ $source['title'] }}</a>
            <p class="mt-2 text-gray-700">{{ $source['description'] }}</p>
            <small class="text-gray-500">Type: {{ $source['type'] }}</small>
            <p class="mt-1 text-gray-500">URL: <a href="{{ $source['url'] }}" target="_blank"
                    class="text-blue-500 hover:underline">{{ $source['url'] }}</a></p>
            <div class="mt-2">
                @php $color=match ($source['status']) { 'crawled'=> 'green',
                'failed' => 'red',
                'pending' => 'yellow',
                'processing' => 'blue',
                default => 'gray',
                }
                @endphp
                <span class="inline-block px-2 py-1 text-xs font-semibold text-white bg-{{ $color }}-500 rounded-full">
                    {{ $source['status'] }}
                </span>
                @if($source['status'] == 'crawled')
                <a href="{{ asset('storage/articles/'. parse_url($source['url'], PHP_URL_HOST) . '.txt')}}" download
                    class="ml-2 text-blue-500 hover:underline">Download File</a>
                @endif
            </div>
        </li>
        @empty
        <li class="text-gray-500">No sources found</li>
        @endforelse
    </ul>
</div>