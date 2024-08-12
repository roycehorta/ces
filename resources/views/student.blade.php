<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Record Management</title>
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-...YOUR-INTEGRITY-VALUE-HERE..." crossorigin="anonymous" />
  <!-- Add the following line to include the partial -->
  @include('layouts.inc.sidebar')
  <style>
    .btn-group {
      display: flex;
      align-items: center;
    }

    .btn-group .btn-download {
      margin-right: 10px;
    }
  </style>
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
          <h1>Student Record Management</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#">Student Record</a>
            </li>
            <li><i class="bx bx-chevron-right"></i></li>
            <li>
              <a class="active" href="/dashboard">Home</a>
            </li>
          </ul>
        </div>
        <div class="btn-group">
          <a href="{{ route('student.create') }}" class="btn-download" data-toggle="modal" data-target="#myModal">
            <i class="fas fa-plus"></i>
            <span class="text">ADD RECORD</span>
          </a>
          <a href="{{ route('export.data') }}" class="btn-download" id="exportButton">
            <i class="fas fa-file-excel"></i>
            <span class="text">EXPORT AS .CSV</span>
          </a>
        </div>
      </div>
      <div class="table-data">
        <div class="order">
          <div class="head">
            <h3>Add Student</h3>
            <i class="bx bx-plus"></i>
            <i class="bx bx-filter"></i>
          </div>
          <table id="AddStudentTable">
            <thead>
              <tr>
                <th>LRN</th>
                <th>Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Academic Standing</th>
                <th>Form 137</th>
                <th>Good Moral</th>
                <th>Class Adviser</th>
                <th>S-Y Start</th>
                <th>S-Y End</th>
                <td>Date Created</td>
                <th>Date Updated</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($students as $student)
              <tr>
                <td>{{ $student->lrn }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->middlename }}</td>
                <td>{{ $student->lastname }}</td>
                <td>{{ $student->acad_standing }}</td>
                <td>{{ $student->file_form137 }}</td>
                <td>{{ $student->moral_record }}</td>
                <td>{{ $student->adviser }}</td>
                <td>{{ $student->school_year_start }}</td>
                <td>{{ $student->school_year_end }}</td>
                <td>{{$student->created_at}}</td>
                <td>{{$student->updated_at}}</td>
                <td>
                  <a href="/student/{{$student->id}}" class="view-link">
                    <i class="bx bx-printer"></i>
                  </a>
                  <a href="/student/{{$student->id}}/edit" class="edit-link">
                    <i class="bx bx-edit"></i>
                  </a>
                  <form action="/student/{{$student->id}}" method="POST" class="delete-link" style="display: inline;">
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
  </section>
  <!-- CONTENT -->

  <!-- Include jQuery and DataTables JS files -->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

  <!-- Include DataTables Export extension -->
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>

  <script>
    $(document).ready(function () {
      var table = $('#AddStudentTable').DataTable({
        dom: 'Bfrtip', // Add the export buttons to the table header
        buttons: [
          {
            extend: 'excelHtml5', // Add the export Excel button
            text: 'Export',
            className: 'export-btn'
          }
        ]
      });

      $('#exportButton').on('click', function () {
        table.button('.export-btn').trigger();
      });
    });

    function confirmDelete(event) {
      event.preventDefault(); // Prevent the default form submission
      
      if (confirm('Are you sure you want to delete this record?')) {
        event.target.closest('form').submit(); // Submit the form
      }
    }
  </script>
</body>
</html>
