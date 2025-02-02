<x-accountantlayout>
    <div class="d-flex flex-row mb-3">
          <div class="d-flex flex-col container py-ma-mb-5">
            <form action="/addcontract" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label class="text-muted h4 mb-1"><small>Room</small></label>
                <input required name="roomname" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
              </div>
        
              <div class="form-group">
                <label class="text-muted h4 mb-1"><small>Office</small></label>
                <input required name="officename" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
              </div>
        
              <div class="form-group">
                <label class="text-muted h4 mb-1"><small>Customer</small></label>
                <input required name="customername" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
              </div>
        
              <div class="form-group">
                <label class="text-muted h4 mb-1"><small>Contract Number</small></label>
                <input required name="contractnumber" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
              </div>
              <div class="form-group">
                <label class="text-muted h4 mb-1"><small>Duration</small></label>
                <input required name="contractduration" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
              </div>
              <div class="form-group">
                <label class="text-muted h4 mb-1"><small>From</small></label>
                <input required name="contractstarthour" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
              </div>
              <div class="form-group">
                <label class="text-muted h4 mb-1"><small>To</small></label>
                <input required name="contractendhour" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
              </div>
              <div class="form-group">
                <label class="text-muted h4 mb-1"><small>Upload Contract File</small></label>
                <input name="avatar" id="image" type="file" placeholder="Document" autocomplete="off"/>
              </div>
                <button class="btn btn-primary h4 float-right">Save New Contract</button>
            </form>
        </div>
      </div>
      <div class="container">
      <img id="preview-image-before-upload" alt="Document" style="schemeimg">
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 
      <script type="text/javascript">
      
      $(document).ready(function (e) {
 
   
      $('#image').change(function(){
            
      let reader = new FileReader();
 
      reader.onload = (e) => { 
 
      $('#preview-image-before-upload').attr('src', e.target.result); 
    }
 
    reader.readAsDataURL(this.files[0]); 
   
   });
   
});
 
</script>
      </div>
    </div>
  </x-accountantlayout>