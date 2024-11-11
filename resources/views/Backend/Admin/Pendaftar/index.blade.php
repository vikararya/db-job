@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Tabel Lowongan</h6>
          <div class="table-responsive pt-3">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>
          No
        </th>
        <th>
          Nama Pelamar
        </th>
        <th>
          Posisi
        </th>
        <th>
          Gaji
        </th>
        <th>
          Status
        </th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          1
        </td>
        <td>
          Cedric Kelly
        </td>
        <td>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </td>
        <td>
          $206,850
        </td>
        <td>
            <span class="badge bg-info">Pending</span>
        </td>
        <td>
            <button type="button" class="btn btn-primary btn-icon">
                <i data-feather="eye"></i>
              </button>
              <button type="button" class="btn btn-danger btn-icon">
                <i data-feather="delete"></i>
              </button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</div>
@endsection