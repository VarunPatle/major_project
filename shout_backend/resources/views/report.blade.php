<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="public/css/app.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <title>Admin</title>
    <style>

    </style>
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="nav-brand">
            <h2><span class="lab la-accusoft"></span><span>shout
                </span></h2>
            <p> &nbsp; &nbsp; &nbsp; Raise your voice</p>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-igloo"></span><span>
                            Dashboard
                        </span></a>
                </li>
                <li>
                    <a href="{{URL::to('user')}}"><span class="las la-users"></span><span>
                            Users
                        </span></a>
                </li>
                <li>
                <li>
                <a href="{{URL::to('post')}}"><span class="las la-clipboard-list"></span><span>
                       Posts
                    </span></a>
                </li>
                <li>
                    <a href="{{URL::to('reports')}}"><span class="fas fa-edit"></span><span>
                           Reports
                        </span></a>
                </li>

            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="search here" />
            </div>
            <!-- <div class="user-wrapper">
                <img src="img/2.jpeg" width="40px" height="40px" alt="">
                <div>
                    <h4>
                        Administrator
                    </h4>
                    <small>Super admin</small>
                </div>
            </div> -->
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>{{ $userCount }}</h1>
                        <span>Total Users</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>{{ $postCount }}</h1>
                        <span>Posts</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>

            </div>
              
                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>All Reports</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="table-responsive">
                                    <table width="100%" class="table">
                                        <thead class="table-dark">
                                            <tr>
                                                <th></th>
                                                <th scope="col">#</th>
                                                <th scope="col">Reported id</th>
                                                <th scope="col">User Name</th>

                                                <th scope="col">post id</th>
                                                <th scope="col">Issue</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($report) != 0)
                                                @foreach ($reports as $report)
                                                    <tr>
                                                        <td></td>
                                                        <td>{{ $report->id }}</td>
                                                       
                                                        <td>{{ $report->reported_user }}</td>
                                                        <td>{{ $report-> name }}</td>
                                                        <td>{{ $report->issue }}</td>
                                                        <td><a href='delete1/{{ $report->id }}'><button type="button"
                                                                    class="btn btn-danger">Delete</button>
                                                            </a>
                                                        </td>


                                                    </tr>
                                                @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    </div>
</body>

</html>