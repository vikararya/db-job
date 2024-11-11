@extends('layout.master')
@push('plugin-styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}">
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <!-- Success Message -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Error Message -->
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="card-body">
          <h1>Data Profession</h1>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addProfessionModal">Add Professions</button>
          <div class="table-responsive">
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($professions as $profession)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $profession->name }}</td>
                    <td>
                        <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#addDetailModal" data-profession-id="{{ $profession->id }}">
                            Add Detail
                        </button>
                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editDetailModal" 
                        data-profession-id="{{ $profession->id }}" 
                        data-profession-name="{{ $profession->name }}">
                        Edit Detail
                        </button>

                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteDetailModal" 
                        data-profession-id="{{ $profession->id }}" 
                        data-profession-name="{{ $profession->name }}">
                        Delete Detail
                        </button>
                        <a href="{{ route('profession.show', $profession->id) }}" class="btn btn-sm btn-info">View</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

{{-- modal tambah-profession --}}
  <div class="modal fade" id="addProfessionModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Profession</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('profession.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- modal tambah-detail --}}
<div class="modal fade" id="addDetailModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Profession Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('profession-details.store') }}" method="POST">
                @csrf
                <input type="hidden" name="profession_id" id="professionId">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="detailName" class="form-label">Detail Name</label>
                        <input type="text" class="form-control" id="detailName" name="name" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- modal edit-profession --}}
<div class="modal fade" id="editDetailModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Profession</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editDetailForm" action="" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="detail_id" id="editDetailId">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="editDetailName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="editDetailName" name="name" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
            
            
        </div>
    </div>
</div>

{{-- modal delete-profession --}}
<div class="modal fade" id="deleteDetailModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Profession</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="deleteDetailForm" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Are you sure you want to delete this profession?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('addDetailModal').addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var professionId = button.getAttribute('data-profession-id');
        document.getElementById('professionId').value = professionId;
    });

    document.addEventListener('DOMContentLoaded', function() {
    var editDetailModal = document.getElementById('editDetailModal');
    editDetailModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;

        var professionId = button.getAttribute('data-profession-id');
        var professionName = button.getAttribute('data-profession-name');

        var modal = this;
        modal.querySelector('#editDetailId').value = professionId;
        modal.querySelector('#editDetailName').value = professionName;

        var form = modal.querySelector('#editDetailForm');
        form.action = '/profession/' + professionId;
    });

    var deleteDetailModal = document.getElementById('deleteDetailModal');
    deleteDetailModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var professionId = button.getAttribute('data-profession-id');
        var professionName = button.getAttribute('data-profession-name');

        var modal = this;
        modal.querySelector('.modal-body').textContent = "Are you sure you want to delete the profession: " + professionName + "?";

        var form = modal.querySelector('#deleteDetailForm');
        form.action = "{{ route('profession.destroy', '') }}/" + professionId;
    });
});


</script>
@endsection


@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush