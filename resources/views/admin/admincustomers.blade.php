<x-adminlayout>
    <div class="d-flex flex-column container mt-5">
        <div class="d-flex flex-column">
          <div class="d-flex flex-row mb-3 justify-content-start">
            <div>
              <button class="btn btn-success ml-5"><a href="#" class="text-black mr-2" title="Search" data-toggle="tooltip" data-placement="bottom"><i class="fas fa-search"></i></a></button>
            </div>
            <div>
              <button class="btn btn-success ml-5"><a href="#" class="text-black mr-2" title="download" data-toggle="tooltip" data-placement="bottom"><i class="fas fa-download"></i></a></button>
           </div>
           <div>
            <h4><a href="/admin/addcustomerpage" class=" btn btn-primary text-black font-weight-bold">New Customer</a></h4>
           </div>
        </div>
        <div class="tableContainer">
          <table class="table flat-table float-right">
            <thead>
              <tr >
                <th>Customer</th>
                <th>Address</th>
                <th>E-Mail</th>
                <th>Phone</th>
                <th>#</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($customer as $c)
              <tr>
                <td>{{ $c->customername }}</td>
                <td>{{ $c->customeraddress }}</td>
                <td>{{ $c->customeremail }}</td>
                <td>{{ $c->customerphone }}</td>
                <td>
                  <span class="pt-2">
                    <a href="/updatecustomerpage/{{ $c->id }}" class="text-primary mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                    <form class="delete-post-form d-inline" action="/deletecustomer/{{ $c->id }}" method="POST">
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
</x-adminlayout>