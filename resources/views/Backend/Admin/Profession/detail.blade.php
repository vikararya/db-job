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
          <h1>Data Professi {{ $profession->name }}</h1>
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
                @php $i = 1; @endphp
                @forelse($profession->details as $detail)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{ $detail->name }}</td>
                    <td>
                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editDetailModal" 
                        data-detail-id="{{ $detail->id }}" 
                        data-detail-name="{{ $detail->name }}"
                        data-profession-id="{{ $profession->id }}">
                        Edit Detail
                        </button>

                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteDetailModal" 
                        data-detail-id="{{ $detail->id }}" 
                        data-detail-name="{{ $detail->name }}">
                        Delete Detail
                        </button>
                    </td>
                </tr>
                    @empty
                    <tr>
                        <td>
                            No details available
                        </td>
                    </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

{{-- modal edit-detail --}}
  <div class="modal fade" id="editDetailModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Profession Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editDetailForm" action="" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="profession_id" id="editProfessionId">
                <input type="hidden" name="detail_id" id="editDetailId">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="editDetailName" class="form-label">Detail Name</label>
                        <input type="text" class="form-control" id="editDetailName" value="{{$detail->name}}" name="name" required>
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

{{-- modal delete-detail  --}}
<div class="modal fade" id="deleteDetailModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Profession Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this detail: <span id="deleteDetailName"></span>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form id="deleteDetailForm" action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
 document.addEventListener('DOMContentLoaded', function() {
        var editDetailModal = document.getElementById('editDetailModal');
        editDetailModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var detailId = button.getAttribute('data-detail-id');
            var detailName = button.getAttribute('data-detail-name');
            var professionId = button.getAttribute('data-profession-id');
            
            var modal = this;
            modal.querySelector('#editDetailId').value = detailId;
            modal.querySelector('#editDetailName').value = detailName;
            modal.querySelector('#editProfessionId').value = professionId;
            
            var form = modal.querySelector('#editDetailForm');
            form.action = '/profession-details/' + detailId;
        });

        var deleteDetailModal = document.getElementById('deleteDetailModal');
        deleteDetailModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var detailId = button.getAttribute('data-detail-id');
            var detailName = button.getAttribute('data-detail-name');
            
            var modal = this;
            modal.querySelector('#deleteDetailName').textContent = detailName;
            
            var form = modal.querySelector('#deleteDetailForm');
            form.action = '/profession-details/' + detailId;
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