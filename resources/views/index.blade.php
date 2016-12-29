@extends('layouts.master') 

@section('content')
<div class="container">
    <div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
        </ul>
        <h3 class="text-muted">File Hash Storage</h3>
    </div>
    <!-- <div class="jumbotron">
        <h1>Jumbotron heading</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
    </div> -->
    <div class="row marketing">
        <div class="col-lg-6">
            <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="/contact/send.json">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" placeholder="Title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="content" class="col-sm-2 control-label">Content</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" placeholder="Content"></textarea>
                    </div>
                </div>
                <div class="form-group">
                	<label for="content" class="col-sm-2 control-label">Captcha</label>
                	<div class="col-sm-3">
                        <input type="text" class="form-control" id="content" placeholder="Captcha">
                    </div>
                	<div class="col-sm-4">
                		{!! captcha_img() !!}
                	</div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-6">
        </div>
    </div>
    <div class="footer">
        <!-- <p>&copy; Company 2014</p> -->
    </div>

</div>

@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!-- /container -->
@endsection
