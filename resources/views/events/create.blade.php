@extends('layouts.master')

@section('content')
    <div class="container">
    
    <div class="card-header text-center'">
        <h1 >
           Add New Work Plan or Event
        </h1>
  
    </div>
    <div class="card-body">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'events.store']) !!}

                        @include('events.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    
    
    </div>
@endsection
