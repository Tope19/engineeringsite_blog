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
                                <h4 class="header-title">Contact Messages 
                                   
                                </h4> 
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Title</th>
                                                <th>Message</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($contacts as $contact)
                                            <tr>
                                                <td><a href="" data-toggle="modal" data-target="#reply-{{$contact->id}}">Reply</a></td>
                                                <td>{{$contact->name}}</td>
                                                <td>{{$contact->email}}</td>
                                                <td>{{$contact->phone}}</td>
                                                <td>{{$contact->title}}</td>
                                                <td>{{$contact->message}}</td>
                                                <td>{{date('D , d M Y',strtotime($contact->created_at)) }}</td>
                                                <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                             <!-- Reply contact -->
                                                <div class="modal fade" id="edit-{{$contact->id}}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Send a reply! </h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('posts.update',$contact->id)}}" method="conta$contact" enctype="multipart/form-data">{{csrf_field()}} {{method_field('PATCH')}}
                                                                    <div class="form-group" >
                                                                        <label for="">Title</label>
                                                                        <input type="text" name="title" maxlength="100" id="" class="form-control" required autofocus value="Reply #{{$contact->id}} - {{$contact->title}}">
                                                                    </div>
                                                                    <div class="form-group" >
                                                                        <label for="">Message</label>
                                                                        <textarea rows="4" name="description" id="" class="form-control summernote" required value=""></textarea>
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

                                                
                                                <!-- Delete contact -->
                                                <div class="modal fade" id="delete">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-red">Are your sure you want to delete? All information related to this conta$contact would be deleted. This action can`t be revoked!</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <form action="{{route('posts.destroy',$contact->id)}}" method="conta$contact">{{csrf_field()}} {{method_field('DELETE')}}
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

                                     <!-- main content area end -->

<script>
$(document).ready(function() {
    $('.summernote').summernote();
    alert('hello');
});
</script>
@endsection