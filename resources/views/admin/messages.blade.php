@extends('layouts.admin', ['pageHeader' => 'Appointments'])
@section('content')
@include('includes.messages')
    <div class="row">
        <!-- [ stiped-table ] start -->

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header ">
                <div class="row d-flex align-items-center justify-content-between">
                <div class="col-md-6"> <h5>Messages</h5></div>
                 <div class="col-md-6">

                 <div class="input-group">
                         <label for="inputState" class="mt-3 mr-4 badge badge-pill badge-warning ">Status</label>
                         <div class="input-group-append" style="width:300px;">
                          <select id="inputState" class="form-control">
                                        <option disabled selected>Please select...</option>
                                          <option value="0">Send</option>
                                         <option value="1">Sent</option>
                                    </select>
                         </div>
                       </div>
                 </div>
                </div>
                </div>
                <div class="card-body table-border-style">
                    @if(count($messages))
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center">Actions</th>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($messages as $message)
                                    <tr>
                                        <td class="text-center">
                                            <a href="{{route('admin-messages-show', ['id' => $message->id])}}" role="button" class="btn btn-outline-info btn-sm">Show</a>
                                        {{--     &nbsp;
                                            <a href="{{route('admin-appointments-edit', ['id' => $appointment->id])}}" role="button" class="btn btn-outline-primary btn-sm">Edit</a> --}}
                                            &nbsp;
                                            <a
                                            @if($message->status)
                                            style="pointer-events: none;cursor: default;"
                                            class="btn btn-outline-dark btn-sm"
                                            @else
                                              class="btn btn-outline-danger btn-sm"
                                            @endif                                      
                                            href="{{route('admin-messages-email', ['id' => $message->id])}}"
                                             role="button" 
                                             
                                        onclick="if(!confirm('Are you sure, you want to send this ?')){ event.preventDefault();}"
                                             >
                                             {{($message->status) ? 'Sent' : 'Send'}}
                                             </a>

                                                  &nbsp;
                                            <a 
                                            href="{{route('admin-messages-delete', ['id' => $message->id])}}"
                                             role="button" 
                                             class="btn btn-outline-danger btn-sm"
                                        onclick="if(!confirm('Are you sure, you want to delete this ?')){ event.preventDefault();}"
                                             >Delete</a>
                                   

                                        </td>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$message->name}}</td>              
                                        <td>{{$message->email}}</td>
                                        <td>{{$message->subject}}</td>
                                        <td>{{$message->message}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-secondary" role="alert">
                            <h4 class="alert-heading text-center">No Messages</h4>
                        </div>
                    @endif

                </div>
            </div>
        </div>
        <!-- [ stiped-table ] end -->
    </div>

    <script src="{{asset('drcare/js/jquery.min.js')}}"></script>

@endsection
