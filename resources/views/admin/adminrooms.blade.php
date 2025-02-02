<x-adminlayout>
  <div class="d-flex flex-row mb-3">
    <div class="d-flex flex-column container mt-5 mr-5">
        <div class="d-flex flex-column">
          <div class="d-flex flex-row mb-3 justify-content-start">
            <div>
              <button class="btn btn-success ml-5"><a href="#" class="text-black mr-2" title="بحث" data-toggle="tooltip" data-placement="bottom"><i class="fas fa-search"></i></a></button>
            </div>
            <div>
              <button class="btn btn-success ml-5"><a href="#" class="text-black mr-2" title="تحميل" data-toggle="tooltip" data-placement="bottom"><i class="fas fa-download"></i></a></button>
           </div>
           <div>
            <h4><a href="/admin/addroompage" class=" btn btn-primary text-black font-weight-bold">New Room</a></h4> 
          </div>
          </div>
        <div class="tableContainer">
          <table class="table">
            <thead>
              <tr >
                <th>Room</th>
                <th>Room Type</th>
                <th>#</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $room as $r )
              <tr>
                <td>{{ $r->roomname }}</td>
                <td>{{ $r->roomtype }}</td>
                <td>
                  <span class="pt-2">
                    <a href="/updateroompage/{{ $r->id }}" class="text-primary mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                    <form class="delete-post-form d-inline" action="/deleteroom/{{ $r->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="delete-post-button text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></button>
                    </form>
                    </span>
                </td>
              </tr>
              @endforeach
            </tbody>
            </table>
        </div>
      </div>
    </div>
    <div>
      <img class="schemeimg" src="/IBRAM SCHEME.jpg">
    </div>
  </div>
</x-adminlayout>