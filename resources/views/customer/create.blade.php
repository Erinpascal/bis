@extends('customer.base')
@section('action-content')



        <div class="modal-body">
            <div class="panel panel-default">
                
                <div class="modal-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="modal-title" id="exampleModalLongTitle" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif; color:red"> New customer Portal</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('customers.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-row">


                             <div class="col-md-4">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder=" name">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        

                          <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus placeholder=" phone">
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                        </div>

                        

                       

                     
                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder=" email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                                                <br><br><br>



                          <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus placeholder=" address">
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                        </div>
                        

                           
                        <br><br> <br>
                           
                          
                               
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="sumbit" class="btn btn-primary">Save Customer</button>
        </div>
    </form>
      </div>
    </div>
  </div>


@endsection