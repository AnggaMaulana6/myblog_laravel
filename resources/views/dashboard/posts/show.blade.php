@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success">Back To My Posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"> 
                Edit 
            </a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" type="submit" onclick="return confirm('Kamu yakin ingin menghapus data?')">Delete</button>
                </form>


            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top mt-3" alt="{{ $post->category->name }}">
            </div>
            @else
            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="{{ $post->category->name }}">
            @endif

            <article class="my-3 fs-5">
                <p>{!! $post->body !!}</p>  
            </article>

        </div>
    </div>
</div>

@endsection