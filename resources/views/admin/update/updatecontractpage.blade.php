<x-adminlayout>
    <div class="d-flex flex-row mb-3">
      
      <div class="d-flex flex-column container">
          <div class="d-flex flex-column">
            <div class="d-flex flex-row mb-3 justify-content-start">
              <div>
                <button class="btn btn-success ml-5"><a href="#" class="text-black mr-2" title="بحث" data-toggle="tooltip" data-placement="bottom"><i class="fas fa-search"></i></a></button>
              </div>
              <div>
                <button class="btn btn-success ml-5"><a href="#" class="text-black mr-2" title="تحميل" data-toggle="tooltip" data-placement="bottom"><i class="fas fa-download"></i></a></button>
             </div>
          </div>
          <div class="container py-md-5 container--narrow">
            <form action="/updatecontract/{{ $contract->id }}" method="POST">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="customer-title" class="text-muted h4 mb-1"><small>Room</small></label>
                <input required name="roomname" value="{{ $contract->roomname}}" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
              </div>
        
              <div class="form-group">
                <label for="address-title" class="text-muted h4 mb-1"><small>Office</small></label>
                <input required name="officename" value="{{ $contract->officename}}" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
              </div>
        
              <div class="form-group">
                <label for="email-title" class="text-muted h4 mb-1"><small>Customer</small></label>
                <input required name="customername" value="{{ $contract->customername}}" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
              </div>
        
              <div class="form-group">
                <label for="phone-title" class="text-muted h4 mb-1"><small>Contract Number</small></label>
                <input required name="contractnumber" value="{{ $contract->contractnumber}}" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
              </div>
              <div class="form-group">
                <label for="phone-title" class="text-muted h4 mb-1"><small>Duration</small></label>
                <input required name="contractduration" value="{{ $contract->contractduration}}" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
              </div>
              <div class="form-group">
                <label for="phone-title" class="text-muted h4 mb-1"><small>From</small></label>
                <input required name="contractstarthour" value="{{ $contract->contractstarthour}}" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
              </div>
              <div class="form-group">
                <label for="phone-title" class="text-muted h4 mb-1"><small>To</small></label>
                <input required name="contractendhour" value="{{ $contract->contractendhour}}" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
              </div>

              <button class="btn btn-primary h4 float-right">Save Changes</button>
            </form>
          </div>
        </div>
      </div>
      <div>
        <img class="schemeimg" src="/IBRAM SCHEME.jpg">
      </div>
    </div>
  </x-adminlayout>