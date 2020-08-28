@extends('goods.base')
@section('action-content')
    <!-- Main content -->
    <section class="content">
      <div class="box">
        @include('flash_message')
  <div class="box-header">
    <div class="row">
      <div class="col-sm-8">
        <h3 class="box-title" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif">List of Goods</h3>
      </div>
        <div class="col-sm-4">
          
                  <a href="{{ route('goods.create') }}"" type="button" class="btn btn-info pull-right">Create Goods</a>

        </div>

    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
     
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table class="table table-bordered table-dark">
            <thead>
              <tr role="row">
                <th width="5%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="city: activate to sort column ascending"> Track Code</th>
                <th width="10%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="state: activate to sort column ascending">Sender</th>
                <th width="10%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="state: activate to sort column ascending">Receiver</th>
                 <th width="8%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="state: activate to sort column ascending">Date</th>

                 <th width="5%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="state: activate to sort column ascending">Time</th>

                  <th width="10%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="state: activate to sort column ascending">Item</th>
                  <th width="5%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="state: activate to sort column ascending">Quantity</th>
                  <th width="10%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="state: activate to sort column ascending">Status</th>



                <th width="20%" tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Action</th>
              </tr>
            </thead>
            <tbody>
            
            @foreach ($good as $good)
                <tr role="row" class="odd">
                  <td>{{ $good->code }}</td>
                  <td>{{ $good->customers_name}}</td>
                  <td>{{ $good->destination }}</td>
                  <td>{{ $good->date }}</td>
                   <td>{{ $good->time }}</td>
                  <td>{{ $good->item }}</td>
                  <td>{{ $good->quantity }}</td>
                  <td>{{ $good->statuses_title }}</td>


                  <td>
                    <form class="row" method="POST" action="{{ route('goods.destroy', $good->id) }}" onsubmit = "return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('goods.edit', $good->id) }}" title="Edit City" class="btn btn-info col-sm-1 col-xs-5 btn-margin">
                        <i class="fa fa-edit fa-lg"></i>
                        </a>
                        
                        <button type="submit" title="Delete City" class="btn btn-danger col-sm-1 col-xs-5 btn-margin">
                          <i class="fa fa-trash fa-lg"></i>
                        </button>
                    </form>
                  </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite"></div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>
    </section>
    <!-- /.content -->
  {{-- </div> --}}
@endsection