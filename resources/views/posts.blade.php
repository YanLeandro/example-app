<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="bg-white">
<x-layout>
@foreach($posts as $post)
        <article class="border-1  style=" width: 200px;>
            <h1 class="h3 container-fluid ">
                <a class="text-secondary" href="/posts/{{ $post->slug }}">
                    {!! $post->title !!}
                </a>
            </h1>
            <div class="container-fluid">
                {!! $post->excerpt !!}
            </div>
        </article>
        @endforeach
</x-layout>
</div>