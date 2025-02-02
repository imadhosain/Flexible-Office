<x-ministrylayout>
    <div class="d-flex flex-column container mt-5">
        <div class="d-flex flex-column">
          <div class="d-flex flex-row mb-3 justify-content-start">
            <div>
              <button class="btn btn-success ml-5"><a href="#" class="text-black mr-2" title="Search" data-toggle="tooltip" data-placement="bottom"><i class="fas fa-search"></i></a></button>
            </div>
            <div>
              <button class="btn btn-success ml-5"><a href="{{ route('contract.export') }}" class="text-black mr-2" title="download" data-toggle="tooltip" data-placement="bottom"><i class="fas fa-download"></i></a></button>
           </div>
        </div>
        <div class="tableContainer">
          <table class="table flat-table float-right">
            <thead>
              <tr >
                <th>Room</th>
                <th>Office</th>
                <th>Customer</th>
                <th>Contract Number</th>
                <th>Duration</th>
                <th>From</th>
                <th>To</th>
                <th>Document</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($contract as $con)
              <tr>
                <td>{{ $con->roomname }}</td>
                <td>{{ $con->officename }}</td>
                <td>{{ $con->customername }}</td>
                <td>{{ $con->contractnumber }}</td>
                <td>{{ $con->contractduration }}</td>
                <td>{{ $con->contractstarthour }}</td>
                <td>{{ $con->contractendhour }}</td>
                <td>
                  <span class="span">
                    <a href="{{$con->avatar}}" id="image" class="text-primary mr-2" data-toggle="tooltip" data-placement="right" title="العقد"><i class="fas fa-images"></i></a>
                  </span> 
                </td>
              </tr>
              @endforeach
            </tbody>
            </table>
        </div>
      </div>
    </div>
</x-ministrylayout>
