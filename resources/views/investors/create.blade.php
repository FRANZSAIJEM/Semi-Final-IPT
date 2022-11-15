@extends('base')

@section('content')
<a href="{{url('/')}}" class="btn btn-secondary mb-3"> <i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp; Back</a>
    <h1>Create Investor</h1>

    <div class="row">
        <div class="col-md-5">
        {!! Form::open(['url'=>'/investors/create', 'method'=>'post']) !!}

            <div class="form-group">
                {{Form::label('name')}}
                {{Form::text('name', null, ['class'=>'form-control'] )}}
            </div>

            <div class="form-group">
                {{Form::label('address')}}
                {{Form::text('address', null, ['class'=>'form-control'] )}}
            </div>

            <div class="form-group">
                {{Form::label('phone')}}
                {{Form::text('phone', null, ['class'=>'form-control'] )}}
            </div>

            <div class="form-group">
                {{Form::label('investment')}}
                {{Form::text('investment', null, ['class'=>'form-control'] )}}
            </div>

            <div class="form-group">
                <button class="btn btn-success float-right mt-3">
                    <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Create Investor
                </button>
            </div>

    {!! Form::close() !!}
        </div>

        <div class="col-md-7">
            @if (count($errors)>0)


                <div class="card">
                    <div class="card-body bg-danger text-warning">
                        <ul>
                            @foreach ($errors->all() as $err)
                                <li>{{$err}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            @endif
        </div>
    </div>
@endsection
