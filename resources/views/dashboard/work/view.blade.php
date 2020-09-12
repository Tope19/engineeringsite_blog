@extends('dashboard.layout.app')

@section('content')
       
            
            <!-- Dark table start -->
            <div class="col-12 mt-5">
                        @if (Session::has('flash_message_error'))
                            <h5><font color="red">
                                <button type="button" class="close" data-dismiss="alert"></button>
                                    <strong>{!! session('flash_message_error') !!}</strong>
                            </font></h5>        
                        @endif
                        @if (Session::has('flash_message_success'))
                            <h5><font color-"green">
                                <button type="button" class="close" data-dismiss="alert"></button>
                                    <strong>{!! session('flash_message_success') !!}</strong>
                            </font></h5>       
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Projects 
                                    <span class="pull-right">
                                    <button type="button" class="btn btn-primary  mb-2" data-toggle="modal" data-target="#newmodal">New Project</button>
                                    </span>
                                </h4> 
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th></th>
                                                <th>Title</th>
                                                <th>Caption</th>
                                                <th>Image</th>
                                                <th>Uploaded by</th>
                                                <th>Post Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($works as $work)
                                            <tr>
                                                <td><a href="" data-toggle="modal" data-target="#edit-{{$work->id}}">Edit</a></td>
                                                <td>{{$work->title}}</td>
                                                <td>{{$work->caption}}</td>
                                                <td>
                                                    <a href="{{ asset('work_images/'.$work->image) }}">
                                                        <img src="{{ asset('work_images/'.$work->image) }}" class="img" style="width:100px" alt="{{$work->title}}" title="Post image">
                                                    </a>
                                                </td>
                                                <td>{{$work->user->name}}</td>
                                                <td>{{date('D , d M Y',strtotime($work->created_at)) }}</td>
                                                <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                             <!-- Edit post -->
                                                <div class="modal fade" id="edit-{{$work->id}}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Project </h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('works.update',$work->id)}}" method="post" enctype="multipart/form-data">{{csrf_field()}} {{method_field('PATCH')}}
                                                                    <div class="form-group" >
                                                                        <label for="">Title</label>
                                                                        <input type="text" name="title" maxlength="50" id="" class="form-control" required autofocus value="{{$work->title}}">
                                                                    </div>
                                                                    <div class="form-group" >
                                                                        <label for="">Caption</label>
                                                                        <textarea rows="4" name="caption" id="" class="form-control summernote" required value="">{{$work->caption}}</textarea>
                                                                    </div>
                                                                   
                                                                    <div class="form-group" >
                                                                        <label for="">Image</label>
                                                                        <input type="file" name="image" id="" class="form-control" style="width: 200px" >
                                                                        <p>Current Image</p>
                                                                            <img src="{{ asset('work_images/'.$work->image) }}" class="img" style="width:100px" alt="{{$work->title}}" title="Post image">
                                                                    </div>
                                                                    
                                                                
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                            </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <!-- Delete post -->
                                                <div class="modal fade" id="delete">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-red">Are your sure you want to delete? This action can`t be revoked!</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <form action="{{route('posts.destroy',$work->id)}}" method="post">{{csrf_field()}} {{method_field('DELETE')}}
                                                                <button type="submit" class="btn btn-warning">Proceed</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dark table end -->

                                <!-- New post -->
                                <div class="modal fade" id="newmodal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">New Project </h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('works.store')}}" method="post" enctype="multipart/form-data">{{csrf_field()}}
                                                    <div class="form-group" >
                                                        <label for="">Title</label>
                                                        <input type="text" name="title" maxlength="50" id="" class="form-control" required autofocus value="{{old('title')}}">
                                                    </div>
                                                    <div class="form-group" >
                                                        <label for="">Caption</label>
                                                        <textarea rows="4" name="caption" id="" class="form-control summernote" required value="">{{old('caption')}}</textarea>
                                                    </div>
                                                    <div class="form-group" >
                                                        <label for="">Image</label>
                                                        <input type="file" name="image" id="" class="form-control" required>
                                                    </div>
                                                    
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>

                                     <!-- main content area end -->

<script>
$(document).ready(function() {
    $('.summernote').summernote();
});
</script>
@endsection