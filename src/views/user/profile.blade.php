<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('gglink::partial.css')
</head>

<body>
    <nav class="navbar navbar-dark fixed-top bg-info flex-md-nowrap p-0 shadow">
        @include('gglink::partial.header')
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Start-->
            @include('gglink::partial.sidebar')
            <!-- Sidebar End-->

            <!-- Body Start-->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="row">
                    <div class="col"><h3>Users Profile</h3></div>
                    <div class="col"><button type="button" data-toggle="modal" data-target="#createModel" class="btn btn-sm btn-outline-success pull-right"> <i class="fa fa-plus" aria-hidden="true"></i> Add New</button></div>
                </div>

                <hr>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-active">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($qItems['data'] as $sItem)
                            <tr>
                                <th>{{ $loop->index + 1 }}</th>
                                <td>{{ $sItem['first_name'] }}</td>
                                <td>{{ $sItem['last_name'] }}</td>
                                <td>{{ $sItem['email'] }}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#editModel{{ $sItem['id'] }}"> <i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                    <a href="" class="btn btn-sm btn-outline-danger"> <i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                                </td>
                            </tr>
                            <!-- Profile Edit Model -->
                            @include('gglink::user.edit-profile')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
             <!-- Body End-->
        </div>
    </div>

    <!-- Profile Create Model -->
    @include('gglink::user.new-profile')
    

    @include('gglink::partial.js')
</body>

</html>