@extends('base')

@section('content')

    <h1>Edit Investor</h1>

    <div class="row w-50">
        <div class="col md-5">
            {!! Form::model($investor, ['url'=>'/edit-inv/' . $investor->id, 'method'=>'put']) !!}

            <div class="mb-3">
                {!! Form::label('name') !!}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>

            <div class="mb-3">
                {!! Form::label('address') !!}
                {{ Form::text('address', null, ['class' => 'form-control']) }}
            </div>

            <div class="mb-3">
                {!! Form::label('phone') !!}
                {{ Form::text('phone', null, ['class' => 'form-control']) }}
            </div>

            <div class="mb-3">
                {!! Form::label('investment') !!}
                {{ Form::text('investment', null, ['class' => 'form-control']) }}
            </div>


            <div class="form-group float-end">
                <button class="btn btn-primary m-1" type="submit">
                    <i class="fa fa-pencil" aria-hidden="true"></i> &nbsp; Update
                </button>
                <a href="{{url('/')}}" class="btn btn-warning m-1"> <i class="fa fa-ban" aria-hidden="true"></i> &nbsp; Cancel</a>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
