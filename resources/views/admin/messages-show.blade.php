@extends('layouts.admin', ['pageHeader' => 'Message / Details'])
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Message Details</h5>
                </div>
                <div class="card-body table-border-style d-flex justify-content-center align-items-center">
                    <div class="col-10">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th>Name</th>
                                <td>{{$message->name}}</td>
                            </tr>
                            <tr>
                                  <th>Email</th>
                                 <td>{{$message->email}}</td>
                            </tr>
                           
                            <tr>
                                <th>Subject</th>
                                 <td>{{$message->subject}}</td>
                            </tr>
                            <tr>
                                  <th>Message</th>
                                 <td class="text-wrap">
                                 {{$message->message}}
                                 </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="2">
                                    <div class="d-flex align-items-center justify-content-center mt-3">
                                        <a href="{{route('admin-messages-index')}}" role="button"
                                           class="btn btn-outline-secondary btn-sm">Back</a>
                                     
                                   
                                           
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
