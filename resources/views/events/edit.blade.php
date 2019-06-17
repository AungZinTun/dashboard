@extends('layouts.master')

@section('content')

<div class="container">
    <div class="card-header">
        <h1>
            Edit Work Plan/Event
        </h1>
   </div>
   <div class="card-body">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($event, ['route' => ['events.update', $event->id], 'method' => 'patch']) !!}
                   
                        @include('events.fields') 
             
                    {!! Form::close() !!}

               </div>
           </div>
  

                {!! Form::open(['route' => ['events.destroy', $event->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
              
                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}

       </div>
   </div>

</div>


@endsection