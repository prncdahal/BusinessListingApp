@extends('layouts.app')



@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">{{ __('Create Listing') }}
<a href="/dashboard" class="btn btn-info">Go back</a>
                </div>

                <div class="card-body">

                  {!!Form::open(['action'=>'ListingsController@store','method'=>'POST'])!!}
                    {{Form::bsText('name','',['placeholder'=>'Company Name'])}}
                      {{Form::bsText('website','',['placeholder'=>'Website'])}}
                    {{Form::bsText('email','',['placeholder'=>'Company Email'])}}

                    {{Form::bsText('phone','',['placeholder'=>'Contact Phone'])}}
                    {{Form::bsText('address','',['placeholder'=>'Business Address'])}}
                    {{Form::bsTextArea('bio','',['placeholder'=>'About the Business'])}}
                    {{Form::bsSubmit('Submit',['class'=>'btn btn-primary'])}}

                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
