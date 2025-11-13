<x-site-layout title="Categories">
    <ul>
        @foreach($categories as $category)
            <li>
                <a href="/categories/{{$category->id}}">{{ $category->name }}</a>
                <a href="/categories/{{$category->id}}/edit">EDIT</a>
            </li>
        @endforeach
    </ul>

</x-site-layout>

