<x-ministrylayout>
  <div class="d-flex flex-row mb-3">
    <div class="d-flex flex-column container mt-5 mr-5">
        <div class="d-flex flex-column">
          <div class="d-flex flex-row mb-3 justify-content-start">
            <div>
              <button class="btn btn-success ml-5"><a href="#" class="text-black mr-2" title="Search" data-toggle="tooltip" data-placement="bottom"><i class="fas fa-search"></i></a></button>
            </div>
            <div>
              <button class="btn btn-success ml-5"><a href="#" class="text-black mr-2" title="download" data-toggle="tooltip" data-placement="bottom"><i class="fas fa-download"></i></a></button>
           </div>
          </div>
        </div>
        <div class="tableContainer">
          <table class="table flat-table-wide float-right">
            <thead>
              <tr >
                <th>Room</th>
                <th>Office</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($office as $o)
              <tr>
                <td>{{ $o->roomname }}</td>
                <td>{{ $o->officename }}</td>
              </tr> 
              @endforeach
            </tbody>
            </table>
        </div>
      </div>
      <div>
        <img class="schemeimg" src="/IBRAM SCHEME.jpg">
      </div>
    </div>
  </div>
</x-ministrylayout>