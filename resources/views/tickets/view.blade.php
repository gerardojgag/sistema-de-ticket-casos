@extends('layouts.app')

@section('content')
 <div class="content-wrapper">

    <!-- Main content -->
    <div class="content mt-2">
      <div class="container-fluid">
      @if (session('message_success'))
        <div class="row" id="message_success">
          <div class="col-12 alert alert-success ">
            <b>{{ session('message_success') }}</b>
          </div>
        </div>        
      @endif
        <div class="row">
            <div class="col-12">

            
                         <!-- DIRECT CHAT -->

              <ticket :id_ticket="{{$id}}" :ticket="{{$ticket}}" :role_user="'{{$rol_user}}'" :status="{{$status}}" :mensaje_count="{{$mensaje_count}}"></ticket>

      
            <!--/.direct-chat -->
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<div id="response_edit"></div>
@endsection
