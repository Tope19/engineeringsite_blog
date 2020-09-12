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
                                <h4 class="header-title">Blog Posts 
                                    <span class="pull-right">
                                    <button type="button" class="btn btn-primary  mb-2" data-toggle="modal" data-target="#newmodal">New post</button>
                                    </span>
                                </h4> 
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th></th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Views</th>
                                                <th>Likes</th>
                                                <th>Post Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($posts as $post)
                                            <tr>
                                                <td><a href="" data-toggle="modal" data-target="#edit-{{$post->id}}">Edit</a></td>
                                                <td>{{$post->title}}</td>
                                                <td>{{$post->description}}</td>
                                                <td>
                                                    <a href="{{ asset('post_images/'.$post->image) }}">
                                                        <img src="{{ asset('post_images/'.$post->image) }}" class="img" style="width:100px" alt="{{$post->title}}" title="Post image">
                                                    </a>
                                                </td>
                                                <td>{{$post->status}}</td>
                                                <td>{{$post->views}}</td>
                                                <td>{{$post->likes}}</td>
                                                <td>{{date('D , d M Y',strtotime($post->created_at)) }}</td>
                                                <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                             <!-- Edit post -->
                                                <div class="modal fade" id="edit-{{$post->id}}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Post </h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('posts.update',$post->id)}}" method="post" enctype="multipart/form-data">{{csrf_field()}} {{method_field('PATCH')}}
                                                                    <div class="form-group" >
                                                                        <label for="">Title</label>
                                                                        <input type="text" name="title" maxlength="50" id="" class="form-control" required autofocus value="{{$post->title}}">
                                                                    </div>
                                                                    <div class="form-group" >
                                                                        <label for="">Description</label>
                                                                        <textarea rows="4" name="description" id="" class="form-control summernote" required value="">{{$post->description}}</textarea>
                                                                    </div>
                                                                    <div class="form-group" >
                                                                        <label for="">Publication Status</label>
                                                                        <select type="text" name="status"  id="" class="form-control" required autofocus >
                                                                            <option value="1"{{$post->status == 'Published' ? 'selected' : ''}}>Published</option>
                                                                            <option value="0"{{$post->status == 'Unpublished' ? 'selected' : ''}}>Unpublished</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group" >
                                                                        <label for="">Image</label>
                                                                        <input type="file" name="image" id="" class="form-control" style="width: 200px" >
                                                                        <p>Current Image</p>
                                                                            <img src="{{ asset('post_images/'.$post->image) }}" class="img" style="width:100px" alt="{{$post->title}}" title="Post image">
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
                                                                <h5 class="modal-title text-red">Are your sure you want to delete? All information related to this post would be deleted. This action can`t be revoked!</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <form action="{{route('posts.destroy',$post->id)}}" method="post">{{csrf_field()}} {{method_field('DELETE')}}
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
                                                <h5 class="modal-title">New post </h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">{{csrf_field()}}
                                                    <div class="form-group" >
                                                        <label for="">Title</label>
                                                        <input type="text" name="title" maxlength="50" id="" class="form-control" required autofocus value="{{old('title')}}">
                                                    </div>
                                                    <div class="form-group" >
                                                        <label for="">Description</label>
                                                        <textarea rows="4" name="description" id="" class="form-control summernote" required value="">{{old('description')}}</textarea>
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