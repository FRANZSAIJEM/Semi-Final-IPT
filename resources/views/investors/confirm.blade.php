@extends('base')

@section('content')

    <h1>Delete this Investor?</h1>

    <div class="row w-50">
        <div class="col md-5 ">
            {!! Form::model($investor, ['url'=>'/edit-inv/' . $investor->id]) !!}
            <div class="infos">
            <div class="mb-3">
                {!! Form::label('name') !!}
                {{ Form::text('name', null, ['class' => 'form-control', 'readonly' => 'true']) }}
            </div>

            <div class="mb-3">
                {!! Form::label('address') !!}
                {{ Form::text('address', null, ['class' => 'form-control', 'readonly' => 'true']) }}
            </div>

            <div class="mb-3">
                {!! Form::label('phone') !!}
                {{ Form::text('phone', null, ['class' => 'form-control', 'readonly' => 'true']) }}
            </div>

            <div class="mb-3">
                {!! Form::label('investment') !!}
                {{ Form::text('investment', null, ['class' => 'form-control', 'readonly' => 'true']) }}
            </div>

        </div>

            </div>

            {!! Form::close() !!}

            <form action="{{url('/delete-inv/'.$investor->id)}}" method="post">
                {{ method_field('DELETE')}}
                {{ csrf_field()}}
                <div class="form-group float-end">
                    <button href="" class="btn btn-success m-1" type="submit"> <i class="fa fa-check" aria-hidden="true"></i> &nbsp; Yes</button>
                    <a href="/" class="btn btn-warning m-1"> <i class="fa fa-times" aria-hidden="true"></i> &nbsp; No</a>
                </div>

            </form>

        </div>
    </div>
@endsection
