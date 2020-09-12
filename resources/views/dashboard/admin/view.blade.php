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
                                <h4 class="header-title">Admin List 
                                    <span class="pull-right">
                                    <button type="button" class="btn btn-primary  mb-2" data-toggle="modal" data-target="#exampleLongModalLong2">New Admin</button>
                                    </span>
                                </h4> 
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Status</th>
                                                <th>Reg Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($admins as $admin)
                                            <tr>
                                                <td><a href="" data-toggle="modal" data-target="#edit-{{$admin->id}}">Edit</a></td>
                                                <td>{{$admin->name}}</td>
                                                <td>{{$admin->email}}</td>
                                                <td>{{$admin->phone}}</td>
                                                <td>{{$admin->role}}</td>
                                                <td>{{date('D , d M Y',strtotime($admin->created_at)) }}</td>
                                                <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                             <!-- Edit Admin -->
                                                <div class="modal fade" id="edit-{{$admin->id}}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Admin </h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('admins.update', $admin->id)}}" method="post">{{csrf_field()}} {{method_field('PATCH')}}
                                                                    <div class="form-group" >
                                                                        <label for="">Admin Name</label>
                                                                        <input type="text" name="name" id="" class="form-control" required autofocus value="{{$admin->name}}">
                                                                    </div>
                                                                    <div class="form-group" >
                                                                        <label for="">Email</label>
                                                                        <input type="email" name="email" id="" class="form-control" required value="{{$admin->email}}">
                                                                    </div>
                                                                    <div class="form-group" >
                                                                        <label for="">Admin Status</label>
                                                                        <select type="text" name="role"  id="" class="form-control" required autofocus >
                                                                            <option value="admin"{{$admin->role == 'Active' ? 'selected' : ''}}>Active</option>
                                                                            <option value="user"{{$admin->role == 'Inactive' ? 'selected' : ''}}>Inactive</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group" >
                                                                        <label for="">Phone</label>
                                                                        <input type="number" name="phone" id="" class="form-control" required value="{{$admin->phone}}">
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

                                                
                                                <!-- Delete Admin -->
                                                <div class="modal fade" id="delete">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-red">Are your sure you want to delete this admin? All posts uploaded by this admin would also be deleted.  This action can`t be revoked!</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <form action="{{route('admins.destroy',$admin->id)}}" method="post">{{csrf_field()}} {{method_field('DELETE')}}
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

                                <!-- New Admin -->
                                <div class="modal fade" id="exampleLongModalLong2">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">New Admin </h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('admins.store')}}" method="post">{{csrf_field()}}
                                                    <div class="form-group" >
                                                        <label for="">Admin Name</label>
                                                        <input type="text" name="name" id="" class="form-control" required autofocus>
                                                    </div>
                                                    <div class="form-group" >
                                                        <label for="">Email</label>
                                                        <input type="email" name="email" id="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group" >
                                                        <label for="">Phone</label>
                                                        <input type="number" name="phone" id="" class="form-control" required>
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


@endsection