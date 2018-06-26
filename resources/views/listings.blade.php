@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  Latest business listing
                 </div>
                <div class="card-body">
                  @if(count($listings))
                    <ul class="list-group">
                      @foreach($listings as $listing)
                        <li class="list-group-item">
                          <a href="/listings/{{$listing->id}}">{{$listing->name}}</a>
                        </li>
                      @endforeach
                    </ul>
                  @else
                  <h3>No Listings found</h3>
                  @endif




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
