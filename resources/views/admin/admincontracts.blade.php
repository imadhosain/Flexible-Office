<x-adminlayout>
    <div class="d-flex flex-column container mt-3">
        <div class="d-flex flex-column">
          <div class="d-flex flex-row">
            <div>
              <button class="btn btn-success ml-5"><a href="#" class="text-black mr-2" title="Search" data-toggle="tooltip" data-placement="bottom"><i class="fas fa-search"></i></a></button>
            </div>
            <div>
              <button class="btn btn-success ml-5"><a href="{{ route('contract.export') }}" class="text-black mr-2" title="download" data-toggle="tooltip" data-placement="bottom"><i class="fas fa-download"></i></a></button>
           </div>
           <div>
            <h4><a href="/admin/addcontractpage" class=" btn btn-primary text-black font-weight-bold">New Contract</a></h4>
          </div>
        </div>
        <div class="tableContainer container-fluid">
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
                <th>#</th>
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
                    <a href="/updatecontractpage/{{ $con->id }}" class="text-primary mr-2" data-toggle="tooltip" data-placement="right" title="تحرير"><i class="fas fa-edit"></i></a>
                    <form class="delete-post-form d-inline" action="/deletecontract/{{ $con->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="delete-post-button text-danger" data-toggle="tooltip" data-placement="left" title="حذف"><i class="fas fa-trash"></i></button>
                    </form>
                    <a href="{{asset('/avatars/'.$con->avatar)}}" id="image" class="text-primary mr-2" data-toggle="tooltip" data-placement="right" title="العقد"><i class="fas fa-images"></i></a>
                  </span> 
                </td>
              </tr>
              @endforeach
            </tbody>
            </table>
        </div>
      </div>
    </div>
</x-adminlayout>