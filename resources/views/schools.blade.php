<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Record Management</title>
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-...YOUR-INTEGRITY-VALUE-HERE..." crossorigin="anonymous" />
  <!-- Add the following line to include the partial -->
  @include('layouts.inc.sidebar')
</head>
<body>
  <!-- CONTENT -->
  <section id="content">
    <!-- NAVBAR -->
    <nav>
      <i class="bx bx-menu"></i>
      <a href="#" class="nav-link">Categories</a>
      <form action="#">
        <div class="form-input">
          <input type="search" placeholder="Search...">
          <button type="submit" class="search-btn"><i class="bx bx-search"></i></button>
        </div>
      </form>
      <input type="checkbox" id="switch-mode" hidden>
      <label for="switch-mode" class="switch-mode"></label>
      <a href="#" class="notification">
        <i class="bx bxs-bell"></i>
        <span class="num">8</span>
      </a>
      <a href="#" class="profile">
        {{-- <img src="{{ URL('assets/images/logo.jpg') }}"> --}}
      </a>
    </nav>
    <!-- NAVBAR -->
    
    <!-- MAIN -->
<main>
  <div class="head-title">
    <div class="left">
      <h1>School Information Management</h1>
      <ul class="breadcrumb">
        <li>
          <a href="#">School Record</a>
        </li>
        <li><i class="bx bx-chevron-right"></i></li>
        <li>
          <a class="active" href="/dashboard">Home</a>
        </li>
      </ul>
    </div>
    <a href="{{ route('principals.create') }}" class="btn-download" data-toggle="modal" data-target="#myModal">
      <i class="fas fa-plus"></i>
      <span class="text">ADD SCHOOL PRINCIPAL</span>
    </a>
  </div>
  <div class="table-data">
    <div class="order">
      <div class="head">
        <h3>Principal's Information</h3>
        <i class="bx bx-plus"></i>
        <i class="bx bx-filter"></i>
      </div>
      <table id="PrincipalTable">
        <thead>
          <tr>
            <th>Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Position</th>
            <th>Rank</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($principals as $principal)
          <tr>
            <td>{{$principal->name}}</td>
            <td>{{$principal->middlename}}</td>
            <td>{{$principal->lastname}}</td>
            <td>{{$principal->position}}</td>
            <td>{{$principal->rank}}</td>
            <td>{{$principal->created_at}}</td>
            <td>{{$principal->updated_at}}</td>
            <td>
              <a href="/principals/{{$principal->principal_id}}" class="view-link">
                <i class="bx bx-edit"></i>
              </a>

              <form action="/principal/{{$principal->id}}" method="POST" class="delete-link" style="display: inline;">
                @csrf
                @method("DELETE")
                <a href="#" onclick="confirmDelete(event)">
                  <i class="bx bx-trash"></i>
                </a>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</main>
<!-- MAIN -->

    <hr>
    <!-- MAIN -->
    <main>
      <div class="table-data">
        <div class="order">
          <div class="head">
            <h3>School Details</h3>
            <i class="bx bx-plus"></i>
            <i class="bx bx-filter"></i>
          </div>
          <table id="SchoolTable">
            <thead>
              <tr>
                <th>School ID</th>
                <th>School Name</th>
                <th>Cluster</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Division Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($schools as $school)
              <tr>
                <td>{{ $school->school_id }}</td>
                <td>{{ $school->school_name }}</td>
                <td>{{ $school->cluster }}</td>
                <td>{{ $school->address }}</td>
                <td>{{ $school->contact_number }}</td>
                <td>{{ $school->email }}</td>
                <td>{{ $school->division_name }}</td>
                <td>
                  <a href="/schools/{{ $school->id }}" class="view-link">
                    <i class="bx bx-show"></i>
                  </a>
                  <a href="/schools/{{ $school->id }}/edit" class="edit-link">
                    <i class="bx bx-edit"></i>
                  </a>
                  {{-- <form action="/schools/{{ $school->id }}" method="POST" class="delete-link" style="display: inline;">
                    @csrf
                    @method("DELETE")
                    <a href="#" onclick="confirmDelete(event)">
                      <i class="bx bx-trash"></i>
                    </a>
                  </form>
                  <script>
                    function confirmDelete(event) {
                      event.preventDefault(); // Prevent the default form submission
                      if (confirm('Are you sure you want to delete this record?')) {
                        event.target.closest('form').submit(); // Submit the form
                      }
                    }
                  </script> --}}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->

  <!-- Include jQuery and DataTables JS files -->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function () {
      $('#PrincipalTable').DataTable();
      $('#SchoolTable').DataTable();
    });
  </script>
</body>
</html>
