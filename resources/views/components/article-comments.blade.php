<div>
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

    <form action="/articles/add-comment" method="post" class="bg-gray-100 p-4 rounded-lg mt-4">

        @csrf
        <input type="hidden" name="article_id" value="{{$article->id}}">
        <x-form-text-area name="content" label="Comment" />

        <button type="submit" class="p-2 bg-teal-700 text-teal-50">Post comment</button>

    </form>
</div>
