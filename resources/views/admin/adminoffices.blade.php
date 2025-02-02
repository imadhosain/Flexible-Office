<x-adminlayout>
  <div class="container mt-5">
    <div class="d-flex flex-row mb-4 justify-content-between align-items-center">
      <!-- Search Button -->
      <button class="btn btn-success" title="Search" data-toggle="tooltip">
        <i class="fas fa-search"></i>
      </button>

      <!-- Download Button -->
      <button class="btn btn-success" title="Download" data-toggle="tooltip">
        <i class="fas fa-download"></i>
      </button>

      <!-- Add New Office Button -->
      <a href="/admin/addofficepage" class="btn btn-primary font-weight-bold">+ New Office</a>
    </div>

    <!-- Table Container -->
    <div class="table-responsive">
      <table class="table table-hover table-bordered text-center">
        <thead class="thead-dark">
          <tr>
            <th>Room</th>
            <th>Office</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($office as $o)
          <tr>
            <td>{{ $o->roomname }}</td>
            <td>{{ $o->officename }}</td>
            <td>
              <a href="/updateofficepage/{{ $o->id }}" class="text-primary mx-2" data-toggle="tooltip" title="Edit">
                <i class="fas fa-edit"></i>
              </a>
              
              <form class="d-inline delete-post-form" action="/deleteoffice/{{$o->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-link text-danger delete-post-button" data-toggle="tooltip" title="Delete">
                  <i class="fas fa-trash"></i>
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <!-- Image Section -->
    <div class="text-center mt-4">
      <img class="img-fluid rounded shadow" src="/IBRAM SCHEME.jpg" alt="Office Scheme">
    </div>
  </div>

  <script>
    // Tooltip Activation
    $(document).ready(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });

    // Confirm Before Delete
    document.querySelectorAll('.delete-post-form').forEach(form => {
      form.addEventListener('submit', function (e) {
        if (!confirm('Are you sure you want to delete this office?')) {
          e.preventDefault();
        }
      });
    });
  </script>
</x-adminlayout>