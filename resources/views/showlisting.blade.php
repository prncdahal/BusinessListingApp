@extends('layouts.app')



@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                {{$listing->name}}
                </div>

                <div class="card-body">
                <ul class="list-group">
                  <li class="list-group-item">
                    Address: {{$listing->address}}
                  </li>
                  <li class="list-group-item">
                    Website: {{$listing->website}}
                  </li>
                  <li class="list-group-item">
                    Email: {{$listing->email}}
                  </li>
                  <li class="list-group-item">
                    Phone: {{$listing->phone}}
                  </li>
                </ul>

                </div>
            </div>
            <div class="card  mt-4">
  <div class="card-header">
    Bio
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>{{$listing->bio}}</p>

    </blockquote>
  </div>
</div>
        </div>
    </div>

@endsection
