<x-adminlayout>
    <div class="d-flex flex-row mb-3">
      
      <div class="d-flex flex-column container">
          <div class="d-flex flex-column">
          <div class="container py-md-5 container--narrow">
            <form action="/addoffice" method="POST">
              @csrf
              <div class="form-group">
                <label class="text-muted h4 mb-1"><small>Room</small></label>
                <select class="form-control form-control-lg" name="roomname">
                  @foreach ($room as $r)
                  <option value="{{ $r->roomname }}" class="form-control">{{ $r->roomname }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label class="text-muted h4 mb-1"><small>Office</small></label>
                <input required name="officename" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
                @error('officename')
                <p class="m-0 small alert-danger shadow-sm">{{ $message }}</p>
                @enderror
              </div>
              <button class="btn btn-primary h4 float-right">Save New Office</button>
            </form>
          </div>
        </div>
      </div>
      <div>
        <img class="schemeimg" src="/IBRAM SCHEME.jpg">
      </div>
    </div>
  </x-adminlayout>