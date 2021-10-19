@props(['category'])
<div class="grid grid-cols-4 p-4">
    <div>
        <p class="mb-3 text-lg font-bold text-center text-gray-500">Subcategorias</p>
        <ul>
            @foreach ($category->subcategories as $subcategory)
                <li>
                    <a href="" class="inline-block py-1 font-semibold text-gray-500 px4 hover:text-red-300">
                        {{$subcategory->name}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="col-span-3">
        <img src="{{Storage::url($category->image)}}" alt="" class="object-cover object-center w-full h-64">
    </div>
</div>
