@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Create navigation
            <a href="{{route('navigation.create')}}" class="btn btn-primary float-right"><i class="fa fa-fw fa-plus"></i>&nbsp;Add navigation</a>
        </div>
        <div class="card-body">
            {!! Form::open(array('route' => 'navigation.store')) !!}
                {{ Form::bootstrapSelect('page', $pages) }} 
                
                <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus"></i>&nbsp;Add</button>
            {!! Form::close() !!}
        </div>
    </div>
@endsection