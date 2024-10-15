<x-layout>
<ul class="bg-white shadow overflow-hidden sm:rounded-md max-w-sm mx-auto mt-16">
    @foreach($searchResults as $searchResult)
    <li class="border-t border-gray-200">
        <div class="px-4 py-5 sm:px-6">
            <div class="flex items-center justify-between">
                <h3 class="text-lg leading-6 font-medium text-gray-900">{{$searchResult->nome}}</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">{{$searchResult->ano}}</p>
            </div>
            <div class="mt-4 flex items-center justify-between">
                <p class="text-sm font-medium text-gray-500">Curso: <span class="text-red-600">{{$searchResult->curso->nome}}</span></p>
            </div>
        </div>
    </li>
    @endforeach
</ul>
    {{ $searchResults->links() }}
</x-layout>