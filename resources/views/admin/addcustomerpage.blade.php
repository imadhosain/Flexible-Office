<x-adminlayout>
    <div class="d-flex flex-row mb-3">
      <div class="d-flex flex-column container">
          <div class="container py-md-5 container--narrow">
            <form action="/addcustomer" method="POST">
              @csrf
              <div class="form-group">
                <label class="text-muted h4 mb-1"><small>Customer</small></label>
                <input required name="customername"class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
                @error('customername')
                <p class="m-0 small alert-danger shadow-sm">{{ $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label class="text-muted h4 mb-1"><small>Address</small></label>
                <input required name="customeraddress" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
              </div>
              <div class="form-group">
                <label class="text-muted h4 mb-1"><small>E-Mail</small></label>
                <input required name="customeremail" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
              </div>
              <div class="form-group">
                <label class="text-muted h4 mb-1"><small>Phone</small></label>
                <input required name="customerphone" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
              </div>
              <button class="btn btn-primary h4 float-right">Save New Customer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </x-adminlayout>