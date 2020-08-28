@extends('goods.base')
@section('action-content')



        <div class="modal-body">
            <div class="panel panel-default">
                
                <div class="modal-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="modal-title" id="exampleModalLongTitle" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif; color:red"> New goods Portal</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('goods.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-row">


                             <div class="col-md-4">
                                <input type="text" class="form-control" name="destination" value="{{ old('destination') }}" required autofocus placeholder=" destination">
                                @if ($errors->has('destination'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('destination') }}</strong>
                                    </span>
                                @endif
                        </div>

                         <div class="col-md-4">
                                <select class="form-control js-cities" name="customer_id" >
                                    <option value="-1" selected disabled>Please select your Sender</option>
                                    @foreach($customer as $customer)
                  <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                  @endforeach
                                </select>
                        </div>

                          <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="reciever" value="{{ old('reciever') }}" required autofocus placeholder=" Receiver">
                                @if ($errors->has('reciever'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reciever') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <br><br><br>

                          <div class="col-md-4">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ old('date') }}" name="date" class="form-control pull-right" id="hiredDate" required placeholder="Date">
                                </div>
                        </div>


                        
                            <div class="col-md-4">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="time" value="{{ old('time') }}" name="time" class="form-control"  required placeholder="Time" >
                                </div>
                        </div>

                     
                            <div class="col-md-4">
                                <input id="item" type="text" class="form-control" name="item" value="{{ old('item') }}" required autofocus placeholder=" Item">
                                @if ($errors->has('item'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('item') }}</strong>
                                    </span>
                                @endif
                        </div>

                                                <br><br><br>



                          <div class="col-md-4">
                                <input id="name" type="number" class="form-control" name="quantity" value="{{ old('quantity') }}" required autofocus placeholder=" quantity">
                                @if ($errors->has('quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                        </div>
                        

                         <div class="col-md-4">
                                <select class="form-control js-cities" name="status_id" >
                                    <option value="-1" selected disabled>Please select your Status</option>
                                    @foreach($status as $status)
                  <option value="{{ $status->id }}">{{ $status->title }}</option>
                  @endforeach
                                </select>
                        </div>

                           
                        <br><br> <br>
                           
                          
                               
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="sumbit" class="btn btn-primary">Save City</button>
        </div>
    </form>
      </div>
    </div>
  </div>


@endsection