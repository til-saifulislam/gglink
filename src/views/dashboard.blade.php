<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Dashboard</title>
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
                    <div class="col"><h3>Dashboard</h3></div>
                    <div class="col"></div>
                </div>

                <hr>
                
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        </div>
                    </div>
                </div>
            </main>
             <!-- Body End-->
        </div>
    </div>

    @include('gglink::partial.js')
</body>

</html>