<!DOCTYPE html>
<html lang="en">
<head>
    <title>Report</title>
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
                    <div class="col"><h3>Report Information</h3></div>
                    <div class="col"></div>
                </div>

                <hr>

                Report...
                
            </main>
             <!-- Body End-->
        </div>
    </div>

    @include('gglink::partial.js')
</body>

</html>