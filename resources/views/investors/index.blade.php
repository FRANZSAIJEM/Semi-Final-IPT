@extends('base')


@section('content')

@if ($info = Session::get('info'))



@endif
<div class="showInfo">
    <div class="info">
        <h4> {{$info}} </h4>
    </div>

</div>

<style>
    h4{
        margin-top: 10px;
    }
    .showInfo{
        display: grid;
        place-content: center;
    }
    .info{
        text-align: center;
        background-color: rgba(71, 150, 71, 0.726);
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        color: white;
        width: 500px;
    }
</style>



<div class="container">
    <div class="float-end">
        <a href="{{url('/investors/create')}}" class="btn btn-primary">
            <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Add Investor
        </a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr class="">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Investment</th>
                        <th>Action</th>
                    </tr>
                    <style>
                        .table{
                            box-shadow: 10px 10px 20px 1px rgba(0, 0, 0, 0.199);
                            background-color: rgb(215, 210, 255);
                        }
                    </style>
                </thead>
                <tbody>

                    <?php foreach($investors as $inv): ?>

                        <tr>
                            <td><?=$inv->id ?></td>
                            <td><?=$inv->name ?></td>
                            <td><?=$inv->address ?></td>
                            <td><?=$inv->phone ?></td>
                            <td><?=$inv->investment ?></td>
                            <td>
                                <div class="form-group" style="display: inline-flex; ">
                                    <a href="{{url('/edit-inv/' . $inv->id)}}" class="btn btn-success m-1" style="width: 100px;"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> &nbsp; Edit</a>
                                    <a href="{{url('/delete-confirm/' . $inv->id)}}" class="btn btn-danger m-1" style="width: 100px;"> <i class="fa fa-trash-o" aria-hidden="true"></i> &nbsp; Delete</a>
                                </div>


                            </td>

                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


@stop
