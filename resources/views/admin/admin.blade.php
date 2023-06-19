<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Posts &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../node_modules/selectric/public/selectric.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">
</head>

<x-app-layout>


<body>
    <div class="row">
        <div class="col-12">
            <div class="card mb-0">
                <div class="card-body">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">All <span class="badge badge-white">5</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Draft <span class="badge badge-primary">1</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pending <span class="badge badge-primary">1</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Trash <span class="badge badge-primary">0</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Posts</h4>
                </div>
                <div class="card-body">
                    <div class="float-left">
                        <select class="form-control selectric">
                            <option>Action For Selected</option>
                            <option>Move to Draft</option>
                            <option>Move to Pending</option>
                            <option>Delete Pemanently</option>
                        </select>
                    </div>
                    <div class="float-right">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th class="text-center pt-1 ">
                                    <div class="custom-checkbox custom-checkbox-table custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                        <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                    </div>
                                </th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>Created At</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                                        <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                    </div>
                                </td>
                                <td>Laravel 5 Tutorial: Introduction
                                    <div class="table-links">
                                        <a href="#">View</a>
                                        <div class="bullet"></div>
                                        <a href="#">Edit</a>
                                        <div class="bullet"></div>
                                        <a href="#" class="text-danger">Trash</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="#">Web Developer</a>,
                                    <a href="#">Tutorial</a>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="d-inline-block ml-1">Rizal Fakhri</div>
                                    </a>
                                </td>
                                <td>2018-01-20</td>
                                <td>
                                    <div class="badge badge-primary">Published</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
                                        <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                    </div>
                                </td>
                                <td>Laravel 5 Tutorial: Installing
                                    <div class="table-links">
                                        <a href="#">View</a>
                                        <div class="bullet"></div>
                                        <a href="#">Edit</a>
                                        <div class="bullet"></div>
                                        <a href="#" class="text-danger">Trash</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="#">Web Developer</a>,
                                    <a href="#">Tutorial</a>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="d-inline-block ml-1">Rizal Fakhri</div>
                                    </a>
                                </td>
                                <td>2018-01-20</td>
                                <td>
                                    <div class="badge badge-primary">Published</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
                                        <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                    </div>
                                </td>
                                <td>Laravel 5 Tutorial: MVC
                                    <div class="table-links">
                                        <a href="#">View</a>
                                        <div class="bullet"></div>
                                        <a href="#">Edit</a>
                                        <div class="bullet"></div>
                                        <a href="#" class="text-danger">Trash</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="#">Web Developer</a>,
                                    <a href="#">Tutorial</a>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="d-inline-block ml-1">Rizal Fakhri</div>
                                    </a>
                                </td>
                                <td>2018-01-20</td>
                                <td>
                                    <div class="badge badge-primary">Published</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-5">
                                        <label for="checkbox-5" class="custom-control-label">&nbsp;</label>
                                    </div>
                                </td>
                                <td>Laravel 5 Tutorial: CRUD
                                    <div class="table-links">
                                        <a href="#">View</a>
                                        <div class="bullet"></div>
                                        <a href="#">Edit</a>
                                        <div class="bullet"></div>
                                        <a href="#" class="text-danger">Trash</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="#">Web Developer</a>,
                                    <a href="#">Tutorial</a>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="d-inline-block ml-1">Rizal Fakhri</div>
                                    </a>
                                </td>
                                <td>2018-01-20</td>
                                <td>
                                    <div class="badge badge-danger">Draft</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                        <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                    </div>
                                </td>
                                <td>Laravel 5 Tutorial: Deployment
                                    <div class="table-links">
                                        <a href="#">View</a>
                                        <div class="bullet"></div>
                                        <a href="#">Edit</a>
                                        <div class="bullet"></div>
                                        <a href="#" class="text-danger">Trash</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="#">Web Developer</a>,
                                    <a href="#">Tutorial</a>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="d-inline-block ml-1">Rizal Fakhri</div>
                                    </a>
                                </td>
                                <td>2018-01-20</td>
                                <td>
                                    <div class="badge badge-warning">Pending</div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="float-right">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
    </div>
    </div>
    </div>
    </x-app-layout>


    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="../node_modules/selectric/public/jquery.selectric.min.js"></script>

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="../assets/js/page/features-posts.js"></script>
</body>

</html>