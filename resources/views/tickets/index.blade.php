@extends('layouts.app')

@section('content')
 <div class="content-wrapper">

    <!-- Main content -->
    <div class="content mt-2">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                   <i class="fas fa-atom"></i> Tickets
                </div>
                <div class="card-body">
                  <button  class="btn btn-primary mb-2" data-toggle="modal" data-target="#createModal"><i class="fas fa-folder-plus"></i> Agregar</button>
                  <div class="row">
                    <div class="col-12 text-center">
                      <a href="{{url('tickets')}}" class="btn btn-outline-primary text-capitalize" mt-2><i class="fas fa-ticket-alt"></i> All</a>
                      @foreach($categorias as $c)
                        <a href="{{url('tickets_filter/'.$c->id)}}" class="btn btn-outline-primary text-capitalize" mt-2><i class="fas fa-ticket-alt"></i> {{$c->nombre}}</a> 
                      @endforeach
                    </div>
                  </div>
                  <hr>
                    <!--TABLA REALIZADA CON VUEJS Y DATATABLES LE PASAMOS LAS COLUMNAS Y HEAD PARA QUE SEA DINAMICA PARA CUALQUIER VISTA-->
                    <table-vue :columns="{{ json_encode($columns) }}" :head="{{ json_encode($head) }}" tipe="all" ></table-vue>
                </div>
              </div>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    @include('tickets.add')
    @include('tickets.edit')

</div>

@endsection
@section('scripts_before_init')
  <script>
    const base_url_http = "{{ url('datatables/tickets')}}";
    document.addEventListener('DOMContentLoaded', function(event) {
      $('select').selectpicker();
      $('.datetimepicker').datetimepicker({
        format: 'YYYY-MM-DD HH:mm',
        sideBySide: true,
        Default: false,
        locate: 'it'
      });
    });

  </script>

@endsection