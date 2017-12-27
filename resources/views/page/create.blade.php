@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Create page
            <a href="{{route('page.create')}}" class="btn btn-primary float-right"><i class="fa fa-fw fa-plus"></i>&nbsp;Add page</a>
        </div>
        <div class="card-body">
            {!! Form::open(array('route' => 'page.store')) !!}
                @include('extensions.form.text')             
                <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus"></i>&nbsp;Add</button>
            {!! Form::close() !!}
        </div>
    </div>
@endsection