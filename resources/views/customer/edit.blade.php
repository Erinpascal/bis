@extends('customer.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="box-title" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif; color:red">Update customer information</h3>
                    </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route("customers.update", [$customer->id]) }}">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $customer->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control" name="phone" value="{{ $customer->phone }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
<br><br><br>


                            <div class="col-md-6">
                                <input id="name" type="email" class="form-control" name="email" value="{{ $customer->email }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="address" value="{{ $customer->address }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>

                           
                        <br><br><br>
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
