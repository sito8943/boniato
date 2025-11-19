<x-site-layout title="{{$article->title}}">

    <div>written by {{$article->author->name}}</div>

    <img src="/storage/{{$article->photo_path}}" alt="article main image">

    <div class="mb-4">
        @foreach($article->categories as $category)
            <a href="/categories/{{$category->id}}" class="bg-yellow-400 rounded-full px-2">{{$category->name}}</a>
        @endforeach
    </div>

    {{$article->content}}

    <x-article-comments :article="$article" />

</x-site-layout>
