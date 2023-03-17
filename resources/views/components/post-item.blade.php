<article class="bg-white    flex flex-col shadow my-4">
    <!-- Article Image -->
    <a href="{{route('view', $post)}}" class="hover:opacity-75">
        <img src="{{$post->getThumbnail()}}">
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        <div class="flex gap-4">
            @foreach($post->categories as $category)
                <a href="#" class="text-amber-700 text-sm font-bold uppercase pb-4">
                    {{$category->title}}
                </a>
            @endforeach
        </div>
        <a href="{{route('view', $post)}}" class="text-3xl font-bold hover:text-amber-700 pb-4">
            {{$post->title}}
        </a>
        <p href="#" class="text-sm pb-3">
            By Mr. <a href="#" class="font-semibold hover:text-amber-800 love">{{$post->user->name}} NDIAYE</a>, Published on
            {{$post->getFormattedDate()}}
        </p>
        <a href="{{route('view', $post)}}" class="pb-6">
            {{$post->shortBody()}}
        </a>
        <style>
                .love{
                   color:#b92b27;
                   font-weight: bold;
                  }
            </style>
        <a href="{{route('view', $post)}}" class="uppercase text-amber-800 hover:text-black love">Keep Reading <i
                class="fas fa-arrow-right"></i></a>
    </div>
</article>
