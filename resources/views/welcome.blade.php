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
                    @endauth
                </div>
            @endif

<!--
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
 -->
        </div>
        <div class="table-responsive">
            <h2>SITES</h2>
            <!-- <table id="site-data"  cellpadding="0" cellspacing="0" border="0" class="display" width="100%"> -->
            <table id="site-data" class="table table-striped table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Site</th>
                        <th>Name</th>
                        <th>Owner</th>
                        <th>Created</th>
                        <th>Modified</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($records as $key => $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->user_id}}</td>
                            <td>{{$data->created_at}}</td>
                            <td>{{$data->updated_at}}</td>                 
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </body>
</html>
