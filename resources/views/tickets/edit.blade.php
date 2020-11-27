<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Ticket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" id="errors_form_update" style="display: none"></div>
        <div class="alert alert-success" id="success_form_update" style="display: none"></div>
        <form action="{{ url('tickets/'.$ticket->id) }}" method="PUT" id="updated_form">

          <div class="row">
            <div class="col-6 ">
              <label for="">Titulo</label>
              <input type="text" name="titulo" class="form-control" placeholder="titulo del ticket" value="{{$ticket->titulo}}">
            </div>
            <div class="col-6 ">
              <label for="">Usuario o email</label>
              <input type="text" name="user" class="form-control" placeholder="Ingrese a quien se le asignara" value="{{$ticket->apertura}}" readonly="">
            </div>
          </div>
          <hr>
          <div class="row mt-2">
            <div class="col-12">
                <label for="exampleFormControlSelect1">Categorias </label>
                <select class="form-control change_select" id="change_select_updated"  data-live-search="true" data-two="on">
                  <option value="">Seleccionar Categoria.</option>

                  @foreach($categorias as $p)
                    <option value="{{$p->nombre}}" data-id="{{$p->id}}">{{$p->nombre}}</option>
                  @endforeach
                </select>
            </div>
          </div>
          <div class="row">
            <div class="col-12 " >
              <div class="row  justify-content-center" id="options_select_updated">
                @foreach($ticket->categorias as $c)
                  <span class="item_select" id="item_update{{$c->id}}"><input type="hidden" name="categorias[]" value="{{$c->id}}"><i class="fab fa-adn"></i> {{$c->nombre}} <a href="#" class="delete_select text-white" data-id="{{$c->id}}"><i class="far fa-trash-alt"></i></a></span>
                @endforeach
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-12 ">
              <label for="">Descripcion</label>
              <br>
              <textarea name="descripcion" id=""  class="form-control">{{$ticket->descripcion}}</textarea>
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