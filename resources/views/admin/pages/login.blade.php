@extends('admin.layouts.master')

@section('content')

    <div class="container-fluid content">
        <div class="row">
            <div id="content" class="col-sm-12 full">
                <div class="row">
                    <div class="login-box">

                        <div class="header">
                            Login to Clever Admin
                        </div>
                        <!-- <p>
                            <a class="btn btn-facebook"><span>Login via Facebook</span></a>
                        </p>
                        <p>
                            <a class="btn btn-twitter"><span>Login via Twitter</span></a>
                        </p>
                        <p>
                            <a class="btn btn-linkedin"><span>Login via LinkedIn</span></a>
                        </p>

                        <div class="text-with-hr">
                            <span>or use your username</span>
                        </div>
 -->
                        <form class="form-horizontal login" action="{{ route('admin.login-submit') }}" method="post">
                            {{ csrf_field() }}

                            <fieldset class="col-sm-12">
                                <div class="form-group">
                                    <div class="controls row">
                                        <div class="input-group col-sm-12">
                                            <input name="email" type="text" class="form-control" id="username" placeholder="Username or E-mail"/>
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="controls row">
                                        <div class="input-group col-sm-12">
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Password"/>
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="confirm">
                                    <input type="checkbox" name="remember"/>
                                    <label for="remember">Remember me</label>
                                </div>

                                <div class="row">

                                    <button type="submit" class="btn btn-lg btn-primary col-xs-12">Login</button>

                                </div>

                            </fieldset>

                        </form>

                        <a class="pull-left" href="page-login.html#">Forgot Password?</a>
                        <a class="pull-right" href="page-register.html">Sign Up!</a>

                        <div class="clearfix"></div>

                    </div>
                </div><!--/row-->

            </div>

        </div><!--/row-->

    </div><!--/container-->

@endsection