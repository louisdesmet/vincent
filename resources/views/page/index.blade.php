@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Pages
            <a href="{{route('page.create')}}" class="btn btn-primary float-right"><i class="fa fa-fw fa-plus"></i>&nbsp;Add page</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>Name</th>
                    <th class="float-right">Actions</th>
                </tr>
                @foreach ($pages as $page)
                    <tr>
                        <td>{{ $page->name }}</td>
                        <td>
                            {!! Form::open(['route' => ['page.destroy', $page->id], 'method' => 'delete', 'class' => 'd-inline-block float-right']) !!}
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i>&nbsp;Delete</button>
                            {!! Form::close() !!}
                            <a href="{{route('page.edit', ['id' => $page->id])}}" class="btn btn-sm btn-primary float-right mr-2"><i class="fa fa-fw fa-pencil"></i>&nbsp;Edit</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection