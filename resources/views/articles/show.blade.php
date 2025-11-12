<x-site-layout title="{{$article->title}}">

    {{$article->content}}

    <h2 class="font-bold mb-2 mt-8">Comments</h2>
    <ul class="list-disc pl-4">

    @foreach($article->comments as $comment)
        <li>{{$comment->content}}</li>
    @endforeach
    </ul>

</x-site-layout>
