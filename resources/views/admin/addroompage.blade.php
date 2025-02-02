<x-adminlayout>
    <div class="d-flex flex-row mb-3">
      <div class="d-flex flex-column container">
          <div class="d-flex flex-column">
          <div class="container py-md-5 container--narrow">
            <form action="/addroom" method="POST">
              @csrf
              <div class="form-group">
                <label class="text-muted h4 mb-1"><small>Room</small></label>
                <input required name="roomname" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
                @error('roomname')
                <p class="m-0 small alert-danger shadow-sm">{{ $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label class="text-muted h4 mb-1"><small>Room Type</small></label>
                <input required name="roomtype" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
              </div>
              <button class="btn btn-primary h4 float-right">Save New Room</button>
            </form>
          </div>
        </div>
      </div>
      <div>
        <img class="schemeimg" src="/IBRAM SCHEME.jpg">
      </div>
    </div>
  </x-adminlayout>