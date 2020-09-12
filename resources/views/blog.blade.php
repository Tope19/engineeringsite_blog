@extends('web.layouts.blogapp')
@section('title')
Blog
@endsection
@section('content')
    <sectuion class="section-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach($posts as $post)
                    <div class="blog__content">
                        <div class="blog__bg">
                            <div class="move"></div>
                            <img src="{{ asset('post_images/'.$post->image) }}" alt="{{$post->title}}" class="blog__img">
                        </div>
                        <h1 class="blog__header">
                            <div class="move"></div> <span>{{$post->title}}</span>
                        </h1>
                        <div class="blog__details">
                            <div class="move"></div>
                            <ul>
                                <li><i class="fal fa-clock"></i> Posted by {{$post->user->name}}</li>
                                <li><i class="fal fa-heart"></i>{{$post->likes}}</li>
                                <li><i class="fal fa-eye"></i>{{$post->views}}</li>
                            </ul>
                            <p class="blog__text">
                                {!! Illuminate\Support\Str::limit($post->description,40) !!}
                            </p>
                            
                        </div>
                        <a href="blog-content.html" class="btn btn--gradient">Read more <i
                                class="fa fa-arrow-right"></i></a>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-4">


                    <div class="blog__content blog__content--2">
                        <div class="blog__date">
                            <h1>Most Popular</h1>
                    @foreach($mostpopular as $post)
                            <ul>
                                <li>{{date('D, d M Y',strtotime($post->created_at))}}</li>
                            </ul>
                        </div>
                        <a href="#">
                            <div class="blog__bg">
                                <div class="move"></div>
                                <img src="{{ asset('post_images/'.$post->image) }}" alt="{{$post->title}}" class="blog__img blog__img--2">
                            </div>
                            <div class="blog__details blog__details--2">
                                <div class="move"></div>
                                <h3>{{$post->title}}</h3>
                                <p>{!! Illuminate\Support\Str::limit($post->description,40) !!}</p>
                                <p><a href="#"><i class="fal fa-eye"></i> {{$post->views}} people have viewed this. Join them! <i
                                            class="fal fa-arrow-right"></i></a></p>
                            </div>
                        </a>
                    </div>
                    @endforeach

                   
                </div>
            </div>
        </div>
    </sectuion>
@endsection
