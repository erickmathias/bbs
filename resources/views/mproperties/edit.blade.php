@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mproperty
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mproperty, ['route' => ['mproperties.update', $mproperty->id], 'method' => 'patch']) !!}

                        @include('mproperties.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection