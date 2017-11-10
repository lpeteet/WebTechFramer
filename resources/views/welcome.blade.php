<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebTech Framer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"
            integrity="sha256-p6xU9YulB7E2Ic62/PX+h59ayb3PBJ0WFTEQxq0EjHw="
            crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
            
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            select {
                width: 200px;
            }
            
        </style>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height"> -->
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
+                    @endauth
                </div>
            @endif
        </div>

        <div class="content">

            <h2>Sites<h2>

            <!-- <table id="site-data" class="table table-striped table-hover table-condensed"> -->
            <table id="site-data" cellpadding="0" cellspacing="0" border="0" class="display" width="50%">
                <thead>
                <tr>
                    <th width="10%" style="text-align:left">Site</th>
                    <th width="40%" style="text-align:left">Name</th>
                    <th width="20%" style="text-align:left">Owner</th>
                    <th width="15%" style="text-align:left">Created</th>
                    <th width="15%" style="text-align:left">Modified</th>
                </tr>
                </thead>
                <tbody>
                    @if (empty($siteList))
                        <tr>
                            <td></td>
                            <td>No Sites Generated Yet</td> 
                            <td></td>
                            <td></td>
                        </tr>
                    @else
                        @foreach($siteList as $data)
                        <tr>
                            <!-- <td>Inside ForEach!</td> -->
                            <td style="text-align:left">{{$data->id}}</td>
                            <td style="text-align:left">{{$data->Name}}</td> 
                            <td style="text-align:left">{{$data->created_at}}</td>
                            <td style="text-align:left">{{$data->updated_at}}</td>
                        </tr>
                        @endforeach
                    @endif                
                </tbody>
            </table>

            <!-- <p>That's All Folks!!</p> -->
        </div> <!-- Content -->

        <!-- Scripts -->
        <script type="text/javascript" language="javascript"
            src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"
            integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/core.js"
            integrity="sha256-BSsbXsDErniq/HpuhULFor8x1CpA2sPPwQLlEoEri+0="
            crossorigin="anonymous">
        </script>
        <!--
            Don't think I need this since above we have jquery core.js 
            <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
        -->
    </body>
</html>


