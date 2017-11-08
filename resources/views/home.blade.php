@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">WebTech Framer</div>
 
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- You are logged in! -->
                    
                </div>
            </div>
        </div>
        <div>
            <label>Select an Option:</label>
            <select id="selmenu1">
                <option selected>Sites</option>
                <option >Pages</option>
                <option>Components</option>
                <option>Component Types</option>
            </select>
        </div>
    </div>
</div>
@endsection
