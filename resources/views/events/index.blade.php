@extends('layouts.master')

@section('content')

  
       
      
  <div class="container-fluid">
  
        @include('flash::message')

  
      
        <div class="card">
          <div class="card-header">
          <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('events.create') !!}">Add New</a>
          </div>

        </div>
            
   @include('events.calendar')
  
  
  </div>

@endsection

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



