<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Ticket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" id="errors_form" style="display: none"></div>
        <div class="alert alert-success" id="success_form" style="display: none"></div>
        <form action="{{ url('tickets') }}" method="POST" id="submit_form">

          <div class="row">
  
            <div class="col-6 ">
              <label for="">Titulo</label>
              <input type="text" name="titulo" class="form-control" placeholder="titulo del ticket">
            </div>
            <div class="col-6">
          		<search-tickets></search-tickets>
          	</div>
          </div>
          <hr>
          <div class="row mt-2">
            <div class="col-6">
                <label for="exampleFormControlSelect1">Categorias </label>
                <select class="form-control change_select" id="change_select"  data-live-search="true" >
                  <option value="">Seleccionar Categoria.</option>

                  @foreach($categorias as $p)
                    @foreach($cat_user as $cc)
                      @if($p->nombre == $cc->nombre)
                        <option value="{{$p->nombre}}" data-id="{{$p->id}}">{{$p->nombre}}</option>
                      @endif
                    @endforeach
                  @endforeach
                </select>
            </div>
            <div class="col-6">
              <label for="">Caducidad</label>
              <input type="text" class="form-control datetimepicker-input datetimepicker" id="datetimepicker" data-toggle="datetimepicker" data-target="#datetimepicker5" name="fecha_caducidad" />
            </div>
          </div>
          <div class="row">
            <div class="col-12 " >
              <div class="row  justify-content-center" id="options_select">
                
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-12 ">
              <label for="">Descripcion</label>
              <br>
              <textarea name="descripcion" id=""  class="form-control"></textarea>
            </div>

          </div>
          <hr>
          <div class="row mt-2">
            <div class="col-12 text-center">
              <button class="btn btn-primary">Guardar</button>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>