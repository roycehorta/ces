<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add the following line to include the partial -->
    @include('layouts.inc.sidebar')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="{{ URL('assets/images/logo.jpg') }}">
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
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn-download" data-bs-toggle="modal" data-bs-target="#myModal">
                    <i class="fas fa-plus"></i>
                    <span class="text">ADD RECORD</span>
                </a>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Add Student</h3>
                        <i class='bx bx-plus'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table id="AddStudentTable">
                        <thead>
                            <tr>
                                <th>LRN</th>
                                <th>Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Academic Standing</th>
                                <th>Top</th>
                                <th>Good Moral</th>
                                <th>Class Adviser</th>
                                <th>Form 137</th>
                                <th>School Year</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1022000</td>
                                <td>Royce</td>
                                <td>Cruz</td>
                                <td>Hortaleza</td>
                                <td>With Honor</td>
                                <td>Upper Class</td>
                                <td>No Degratory Record</td>
                                <td>Roy Horta</td>
                                <td>Form 137.pdf</td>
                                <td>2022-2023</td>
                                <td>2023-06-21</td>
                                <td>2023-06-22</td>
                                <td>
                                    <i class="bx bx-edit"></i>
                                    <i class="bx bx-trash"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>1022000</td>
                                <td>Roy</td>
                                <td>Cruz</td>
                                <td>Horta</td>
                                <td>With Honor</td>
                                <td>Upper Class</td>
                                <td>No Degratory Record</td>
                                <td>Roy Horta</td>
                                <td>Form 137.pdf</td>
                                <td>2022-2023</td>
                                <td>2023-06-21</td>
                                <td>2023-06-22</td>
                                <td>
                                    <i class="bx bx-edit"></i>
                                    <i class="bx bx-trash"></i>
                                </td>
                            </tr>
                            <!-- Add more rows with dummy data as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>

    <!-- Add Modal -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Header</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- CONTENT -->
    <!-- Include any necessary JavaScript files -->
    <script src={{ asset('https://code.jquery.com/jquery-3.6.0.min.js')}}></script>
    <script src={{ asset('https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js')}}></script>
    <script>
        $(document).ready(function () {
            $('#AddStudentTable').DataTable();
        });
    </script>
</body>
</html>
