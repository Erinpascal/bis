@extends('goods.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="box-title" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif; color:red">Update city</h3>
                    </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route("goods.update", [$good->id]) }}">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="destination" value="{{ $good->destination }}" required autofocus>

                                @if ($errors->has('destination'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('destination') }}</strong>
                                    </span>
                                @endif
                            </div>

                               <div class="col-md-4">
                                <select class="form-control" name="customer_id">
                                    @foreach ($customer as $customer)
                                        <option value="{{$customer->id}}" {{$customer->id == $good->customer ? 'selected' : ''}}>{{$customer->name}}</option>
                                    @endforeach
                                </select>
                        </div>

                             <div class="col-md-4">
                                <input id="name" type="time" class="form-control" name="time" value="{{ $good->time }}" required autofocus>

                                @if ($errors->has('time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br><br><br>

                             <div class="col-md-4">
                                <input id="name" type="date" class="form-control" name="date" value="{{ $good->date }}" required autofocus>

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>


                             <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="reciever" value="{{ $good->reciever }}" required autofocus>

                                @if ($errors->has('reciever'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reciever') }}</strong>
                                    </span>
                                @endif
                            </div>

                              <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="item" value="{{ $good->item }}" required autofocus>

                                @if ($errors->has('item'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('item') }}</strong>
                                    </span>
                                @endif
                            </div>
                                                        <br><br><br>


                             <div class="col-md-4">
                                <input id="name" type="number" class="form-control" name="quantity" value="{{ $good->quantity }}" required autofocus>

                                @if ($errors->has('quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                            </div>

                             

                            <div class="col-md-4">
                                <select class="form-control" name="status_id">
                                    @foreach ($status as $status)
                                        <option value="{{$status->id}}" {{$status->id == $good->status ? 'selected' : ''}}>{{$status->title}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group pull-right">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary">
                                   <i class="fa fa-refresh"></i> Update City
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
