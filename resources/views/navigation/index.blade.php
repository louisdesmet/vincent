@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Navigations
            <a href="{{route('navigation.create')}}" class="btn btn-primary float-right"><i class="fa fa-fw fa-plus"></i>&nbsp;Add Navigation</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th class="float-right">Actions</th>
                </tr>
                @foreach ($navigations as $navigation)
                    <tr>
                        <td>{{ $navigation->id }}</td>
                        <td>{{ $navigation->name }}</td>
                        <td>
                            {!! Form::open(['route' => ['navigation.destroy', $navigation->id], 'method' => 'delete', 'class' => 'd-inline-block float-right']) !!}
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i>&nbsp;Delete</button>
                            {!! Form::close() !!}
                            <a href="{{route('navigation.edit', ['id' => $navigation->id])}}" class="btn btn-sm btn-primary float-right mr-2"><i class="fa fa-fw fa-pencil"></i>&nbsp;Edit</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection