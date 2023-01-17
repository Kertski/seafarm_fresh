@extends('layouts.front')

@section('title', "Blogs")

@section('content')


@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row pt-5">
                <div class="">
                    <h2 class="blog_title categories_page_name mb-2">Blogs</h2>
                </div>
                @foreach ($blog as $item)
            
                    <div class="col-md-3 mb-3">
                        <a href="{{ url('blog/'.$item->slug) }}">
                            <div class="card h-100">
                                <img src="{{ asset('assets/uploads/blog/'.$item->image) }}" alt="Product Image">
                                <div class="card-body">
                                    <h5>{{ $item->title }}</h5>
                                    <p>
                                        {{ $item->small_description}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection