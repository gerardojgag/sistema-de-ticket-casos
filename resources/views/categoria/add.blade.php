<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" id="errors_form" style="display: none"></div>
        <div class="alert alert-success" id="success_form" style="display: none"></div>
        <form action="{{ url('categorias') }}" method="POST" id="submit_form">

          <div class="row">
            <div class="col-6 ">
              <label for="">Nombre</label>
              <input type="text" name="nombre" class="form-control">
            </div>
            <div class="col-6 ">
              <label for="">Fecha</label>
              <input type="text" class="form-control datetimepicker-input datetimepicker" id="datetimepicker" data-toggle="datetimepicker" data-target="#datetimepicker5" name="fecha_caducidad" />

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
