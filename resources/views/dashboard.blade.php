@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  Dashboard <a href="/listings/create" class="btn btn-info">Add Listing</a>
                 </div>
                <div class="card-body">
                  <h3>Your Listings</h3>
                  @if(count($listings))
                    <table class="table table-striped">
                      <tr>
                        <th>Company</th>
                        <th> </th>
                        <th></th>
                      </tr>
                      @foreach($listings as $listing)
                        <tr>
                          <td>{{$listing->name}}</td>
                          <td><a href="/listings/{{$listing->id}}/edit" class="btn btn-dark">Edit</a></td>
                          <td>
                            {!!Form::open(['action'=>['ListingsController@destroy',$listing->id],'method'=>'POST','onsubmit'=>'return confirm("Are you sure?")'])!!}
                              {{Form::hidden('_method','DELETE')}}
                              {{Form::bsSubmit('Delete',['class'=>'btn btn-danger'])}}

                            {!! Form::close() !!}
                          </td>
                        </tr>
                      @endforeach
                    </table>
                  @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
