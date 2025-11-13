<x-site-layout title="{{$article->title}}">

    <div>written by {{$article->author->name}}</div>

    <div class="mb-4">
        @foreach($article->categories as $category)
            <span class="bg-yellow-400 rounded-full px-2">{{$category->name}}</span>
        @endforeach
    </div>

    {{$article->content}}

    <h2 class="font-bold mb-2 mt-8">Comments</h2>
    @if($article->comments->isNotEmpty())
        <ul class="list-disc pl-4">
            @foreach($article->comments as $comment)
                <li>{{$comment->content}}</li>
            @endforeach
        </ul>
    @else
        No comments yet
    @endif

</x-site-layout>
