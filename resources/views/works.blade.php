@extends('web.layouts.worksapp')
@section('title')
Our Works
@endsection
@section('content')
    <section class="section section-gallery section-gallery--2">
        <div class="container-fluid">
            <div class="row">
                @foreach($works as $work)
                <div class="col-lg-4" onclick="openModal();currentSlide({{$work->id}})">
                    <img src="{{ asset('work_images/'.$work->image) }}" alt="work-bg">
                    <div class="pj__content">
                        <a href="#">
                            <h3>{{$work->title}}</h3>
                            <p>{{$work->caption}}</p>
                            <a href="#" class="btn btn--gradient" onclick="openModal();currentSlide({{$work->id}})">View <i
                                    class="fal fa-eye"></i></a>
                        </a>
                    </div>
                </div>
                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <div class="mySlides">
                            <img src="{{ asset('work_images/'.$work->image) }}">
                        </div>


                        <a class="prev" onclick="plusSlides(-{{$work->id}})">&#10094;</a>
                        <a class="next" onclick="plusSlides({{$work->id}})">&#10095;</a>

                        <div class="caption-container">
                            <p id="caption">{{$work->caption}}</p>
                        </div>
                
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>

   
@endsection    