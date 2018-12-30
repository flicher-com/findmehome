@extends('admin.layouts.master')

@section('content')
    @include('admin.partials.nav')

    <div class="container-fluid content">
        <div class="row">
    @include('admin.partials.sidebar')

    <!-- start: Content -->
        <div class="col-md-10 col-sm-11 main ">


            <ol class="breadcrumb">
                <li><a href="page-profile.html#">Genius</a></li>
                <li><a href="page-profile.html#">Example Pages</a></li>
                <li class="active">Profile</li>
            </ol>

            <div class="row profile">

                <div class="col-md-3">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img class="img-responsive" src="/{{ $user->avatar }}">

                            <h2 class="text-center"><strong>{{ $user->first_name }} {{ $user->last_name }}</strong></h2>
                            <h4 class="text-center"><small><i class="fa fa-map-marker"></i> Los Angeles, CA</small></h4>

                            <hr>

                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-success btn-block">Follow</button>
                                </div><!--/.col-->
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-primary btn-block">Send Message</button>
                                </div><!--/.col-->
                            </div><!--/.row-->

                            <hr>

                            <div class="row text-center">
                                <div class="col-xs-4">
                                    <div><strong>89.876</strong></div>
                                    <div><small>Followers</small></div>
                                </div><!--/.col-->
                                <div class="col-xs-4">
                                    <div><strong>9.876</strong></div>
                                    <div><small>Following</small></div>
                                </div><!--/.col-->
                                <div class="col-xs-4">
                                    <div><strong>1.983</strong></div>
                                    <div><small>Posts</small></div>
                                </div><!--/.col-->
                            </div><!--/.row-->
                            <hr>

                            <h4><strong>About Karen Boyle</strong></h4>

                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            </p>

                            <hr>

                            <h4><strong>General Information</strong></h4>

                            <ul class="profile-details">
                                <li>
                                    <div><i class="fa fa-briefcase"></i> position</div>
                                    CEO
                                </li>
                                <li>
                                    <div><i class="fa fa-building-o"></i> company</div>
                                    creativeLabs
                                </li>
                            </ul>

                            <hr>

                            <h4><strong>Contact Information</strong></h4>

                            <ul class="profile-details">
                                <li>
                                    <div><i class="fa fa-phone"></i> phone</div>
                                    +48 123 456 789
                                </li>
                                <li>
                                    <div><i class="fa fa-tablet"></i> mobile phone</div>
                                    +48 123 456 789
                                </li>
                                <li>
                                    <div><i class="fa fa-envelope"></i> e-mail</div>
                                    lukasz@bootstrapmaster.com
                                </li>
                                <li>
                                    <div><i class="fa fa-map-marker"></i> address</div>
                                    Konopnickiej 42<br/>
                                    43-190 Mikolow<br/>
                                    Slask, Poland
                                </li>
                            </ul>

                        </div>

                    </div>

                </div><!--/.col-->

                <div class="col-md-9">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs pull-left" id="tabs">
                                <li><a href="page-profile.html#activity">Activity</a></li>
                                <li><a href="page-profile.html#week">week</a></li>
                                <li><a href="page-profile.html#month">month</a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane" id="activity">
                                    <div class="row activity" style="padding:15px 15px 0 15px">

                                        <div class="col-md-6">

                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <input type="email" class="form-control" placeholder="What are you doing now?">
                                                </div>
                                                <div class="panel-footer">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-link"><i class="fa fa-map-marker"></i></button>
                                                        <button type="button" class="btn btn-link"><i class="fa fa-users"></i></button>
                                                        <button type="button" class="btn btn-link"><i class="fa fa-camera"></i></button>
                                                        <button type="button" class="btn btn-link"><i class="fa fa-video-camera"></i></button>
                                                        <button type="button" class="btn btn-link"><i class="fa fa-calendar-o"></i></button>
                                                    </div>

                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-success">submit</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <img src="assets/img/avatar.jpg" class="img-circle">
                                                    <div class="pull-right text-right">
                                                        <i class="fa fa-calendar"></i><br/> 3 hours ago
                                                    </div>
                                                    <div><strong>Łukasz Holeczek</strong></div>
                                                    <div class="small"><i class="fa fa-map-marker"></i> Mikolow, Poland</div>


                                                </div>
                                                <div class="panel-body">
                                                    <blockquote>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</blockquote>
                                                </div>
                                                <div class="panel-footer">
                                                    <input type="email" class="form-control" placeholder="Write a comment...">
                                                </div>
                                            </div>

                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <img src="assets/img/avatar.jpg" class="img-circle">
                                                    <div class="pull-right text-right">
                                                        <i class="fa fa-calendar"></i><br/> 3 hours ago
                                                    </div>
                                                    <div><strong>Łukasz Holeczek</strong></div>
                                                    <div class="small"><i class="fa fa-map-marker"></i> Mikolow, Poland</div>


                                                </div>
                                                <div class="panel-body">

                                                    <img src="assets/img/gallery/map.png" class="img-responsive">

                                                    <div class="actions">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-link"><i class="fa fa-thumbs-o-up"></i> Like</button>
                                                            <button type="button" class="btn btn-link"><i class="fa fa-share"></i> Share</button>
                                                        </div>
                                                        <div class="pull-right"><strong>1.789</strong> People liked this</div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="pull-left" href="page-profile.html#">
                                                            <img class="media-object img-circle" src="assets/img/avatar.jpg">
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="pull-right small">3 hours ago</div>
                                                            <h4 class="media-heading">Media heading</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="pull-left" href="page-profile.html#">
                                                            <img class="media-object img-circle" src="assets/img/avatar.jpg">
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="pull-right small">3 hours ago</div>
                                                            <h4 class="media-heading">Media heading</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="pull-left" href="page-profile.html#">
                                                            <img class="media-object img-circle" src="assets/img/avatar.jpg">
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="pull-right small">3 hours ago</div>
                                                            <h4 class="media-heading">Media heading</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="panel-footer">
                                                    <input type="email" class="form-control" placeholder="Write a comment...">
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <img src="assets/img/avatar.jpg" class="img-circle">
                                                    <div class="pull-right text-right">
                                                        <i class="fa fa-calendar"></i><br/> 3 hours ago
                                                    </div>
                                                    <div><strong>Łukasz Holeczek</strong></div>
                                                    <div class="small"><i class="fa fa-map-marker"></i> Mikolow, Poland</div>


                                                </div>
                                                <div class="panel-body">

                                                    <div class="row">

                                                        <div class="col-md-4">
                                                            <img class="img-responsive" src="assets/img/gallery/photo2.jpg">
                                                        </div><!--/.col-->

                                                        <div class="col-md-4">
                                                            <img class="img-responsive" src="assets/img/gallery/photo3.jpg">
                                                        </div><!--/.col-->

                                                        <div class="col-md-4">
                                                            <img class="img-responsive" src="assets/img/gallery/photo4.jpg">
                                                        </div><!--/.col-->

                                                    </div><!--/.row-->

                                                </div>
                                                <div class="panel-footer">
                                                    <input type="email" class="form-control" placeholder="Write a comment...">
                                                </div>
                                            </div>

                                        </div><!--/.col-->
                                        <div class="col-md-6">

                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <img src="assets/img/avatar.jpg" class="img-circle">
                                                    <div class="pull-right text-right">
                                                        <i class="fa fa-calendar"></i><br/> 3 hours ago
                                                    </div>
                                                    <div><strong>Łukasz Holeczek</strong></div>
                                                    <div class="small"><i class="fa fa-map-marker"></i> Mikolow, Poland</div>


                                                </div>
                                                <div class="panel-body">

                                                    <img src="assets/img/gallery/photo13.jpg" class="img-responsive">

                                                    <div class="actions">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-link"><i class="fa fa-thumbs-o-up"></i> Like</button>
                                                            <button type="button" class="btn btn-link"><i class="fa fa-share"></i> Share</button>
                                                        </div>
                                                        <div class="pull-right"><strong>1.789</strong> People liked this</div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="pull-left" href="page-profile.html#">
                                                            <img class="media-object img-circle" src="assets/img/avatar.jpg">
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="pull-right small">3 hours ago</div>
                                                            <h4 class="media-heading">Media heading</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="pull-left" href="page-profile.html#">
                                                            <img class="media-object img-circle" src="assets/img/avatar.jpg">
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="pull-right small">3 hours ago</div>
                                                            <h4 class="media-heading">Media heading</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="pull-left" href="page-profile.html#">
                                                            <img class="media-object img-circle" src="assets/img/avatar.jpg">
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="pull-right small">3 hours ago</div>
                                                            <h4 class="media-heading">Media heading</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="panel-footer">
                                                    <input type="email" class="form-control" placeholder="Write a comment...">
                                                </div>
                                            </div>

                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <img src="assets/img/avatar.jpg" class="img-circle">
                                                    <div class="pull-right text-right">
                                                        <i class="fa fa-calendar"></i><br/> 3 hours ago
                                                    </div>
                                                    <div><strong>Łukasz Holeczek</strong></div>
                                                    <div class="small"><i class="fa fa-map-marker"></i> Mikolow, Poland</div>


                                                </div>
                                                <div class="panel-body">

                                                    <div class="video-container">
                                                        <iframe src="http://player.vimeo.com/video/87526548" width="500" height="281" frameborder="0"></iframe>
                                                    </div>

                                                    <div class="actions">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-link"><i class="fa fa-thumbs-o-up"></i> Like</button>
                                                            <button type="button" class="btn btn-link"><i class="fa fa-share"></i> Share</button>
                                                        </div>
                                                        <div class="pull-right"><strong>1.789</strong> People liked this</div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="pull-left" href="page-profile.html#">
                                                            <img class="media-object img-circle" src="assets/img/avatar.jpg">
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="pull-right small">3 hours ago</div>
                                                            <h4 class="media-heading">Media heading</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="pull-left" href="page-profile.html#">
                                                            <img class="media-object img-circle" src="assets/img/avatar.jpg">
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="pull-right small">3 hours ago</div>
                                                            <h4 class="media-heading">Media heading</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="pull-left" href="page-profile.html#">
                                                            <img class="media-object img-circle" src="assets/img/avatar.jpg">
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="pull-right small">3 hours ago</div>
                                                            <h4 class="media-heading">Media heading</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="panel-footer">
                                                    <input type="email" class="form-control" placeholder="Write a comment...">
                                                </div>
                                            </div>

                                        </div><!--/.col-->

                                    </div><!--/.row-->
                                </div>
                                <div class="tab-pane" id="week">

                                </div>
                                <div class="tab-pane active" id="month">

                                </div>
                            </div>
                        </div>
                    </div>

                </div><!--/.row-->


                <div class="row">


                </div><!--/row-->

            </div><!--/col-->

            <div class="col-sm-9">

                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="page-profile.html#skills">Skills</a></li>
                    <li><a href="page-profile.html#friends">Friends</a></li>
                    <li><a href="page-profile.html#photos">Photos</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="skills">

                        <div class="row">

                            <div class="col-sm-5">
                                <h2>About Me</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <h2>Bio</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <h2>Job</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <h2>Languages</h2>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div style="width:100%!important" class="language-skill1" data-percent="90"><span>90</span>%</div>
                                        <div style="text-align:center">English</div>
                                    </div><!--/col-->
                                    <div class="col-xs-4">
                                        <div style="width:100%!important" class="language-skill2" data-percent="43"><span>43</span>%</div>
                                        <div style="text-align:center">Spanish</div>
                                    </div><!--/col-->
                                    <div class="col-xs-4">
                                        <div style="width:100%!important" class="language-skill3" data-percent="17"><span>17</span>%</div>
                                        <div style="text-align:center">German</div>
                                    </div><!--/col-->
                                </div><!--/row-->

                            </div><!--/col-->

                            <div class="col-sm-7">
                                <h2>My Skills</h2>
                                <ul class="skill-bar">
                                    <li>
                                        <h5>Web Design</h5>
                                        <div class="meter"><span class="lightBlue">40%</span></div>
                                    </li>
                                    <li>
                                        <h5>Wordpress</h5>
                                        <div class="meter"><span class="green">80%</span></div>
                                    </li>
                                    <li>
                                        <h5>Branding</h5>
                                        <div class="meter"><span class="red">100%</span></div>
                                    </li>
                                    <li>
                                        <h5>SEO Optmization</h5>
                                        <div class="meter"><span class="lightOrange">60%</span></div>
                                    </li>

                                </ul>

                                <h2>Other Skills</h2>
                                <canvas id="canvas" class="chartjs" height="450" width="450"></canvas>
                            </div><!--/col-->

                        </div><!--/row-->

                    </div>
                    <div class="tab-pane" id="friends">
                        <ul class="friends-list clearfix">
                            <li>
                                <a class="avatar" href="page-profile.html#"><img src="assets/img/avatar.jpg"></a>
                                <div>Lukasz Holeczek</div>
                                <span class="label label-success">active</span>
                                <a href="page-profile.html#" class="fa fa-facebook-square"></a>
                                <a href="page-profile.html#" class="fa fa-twitter-square"></a>
                                <a href="page-profile.html#" class="fa fa-linkedin-square"></a>
                            </li>
                            <li>
                                <a class="avatar" href="page-profile.html#"><img src="assets/img/avatar2.jpg"></a>
                                <div>Ann Polansky</div>
                                <span class="label label-warning">busy</span>
                                <a href="page-profile.html#" class="fa fa-facebook-square"></a>
                                <a href="page-profile.html#" class="fa fa-twitter-square"></a>
                                <a href="page-profile.html#" class="fa fa-linkedin-square"></a>
                            </li>
                            <li>
                                <a class="avatar" href="page-profile.html#"><img src="assets/img/avatar3.jpg"></a>
                                <div>May Lin</div>
                                <span class="label label-danger">blocked</span>
                                <a href="page-profile.html#" class="fa fa-facebook-square"></a>
                                <a href="page-profile.html#" class="fa fa-twitter-square"></a>
                                <a href="page-profile.html#" class="fa fa-linkedin-square"></a>
                            </li>
                            <li>
                                <a class="avatar" href="page-profile.html#"><img src="assets/img/avatar4.jpg"></a>
                                <div>Kate Norman</div>
                                <span class="label label-default">offline</span>
                                <a href="page-profile.html#" class="fa fa-facebook-square"></a>
                                <a href="page-profile.html#" class="fa fa-twitter-square"></a>
                                <a href="page-profile.html#" class="fa fa-linkedin-square"></a>
                            </li>
                            <li>
                                <a class="avatar" href="page-profile.html#"><img src="assets/img/avatar5.jpg"></a>
                                <div>Mia Lopez</div>
                                <span class="label label-danger">blocked</span>
                                <a href="page-profile.html#" class="fa fa-facebook-square"></a>
                                <a href="page-profile.html#" class="fa fa-twitter-square"></a>
                                <a href="page-profile.html#" class="fa fa-linkedin-square"></a>
                            </li>
                            <li>
                                <a class="avatar" href="page-profile.html#"><img src="assets/img/avatar6.jpg"></a>
                                <div>Katia Svoboda</div>
                                <span class="label label-success">active</span>
                                <a href="page-profile.html#" class="fa fa-facebook-square"></a>
                                <a href="page-profile.html#" class="fa fa-twitter-square"></a>
                                <a href="page-profile.html#" class="fa fa-linkedin-square"></a>
                            </li>
                            <li>
                                <a class="avatar" href="page-profile.html#"><img src="assets/img/avatar7.jpg"></a>
                                <div>Blanka Rosicky</div>
                                <span class="label label-warning">busy</span>
                                <a href="page-profile.html#" class="fa fa-facebook-square"></a>
                                <a href="page-profile.html#" class="fa fa-twitter-square"></a>
                                <a href="page-profile.html#" class="fa fa-linkedin-square"></a>
                            </li>
                            <li>
                                <a class="avatar" href="page-profile.html#"><img src="assets/img/avatar8.jpg"></a>
                                <div>Garry Old</div>
                                <span class="label label-success">active</span>
                                <a href="page-profile.html#" class="fa fa-facebook-square"></a>
                                <a href="page-profile.html#" class="fa fa-twitter-square"></a>
                                <a href="page-profile.html#" class="fa fa-linkedin-square"></a>
                            </li>
                            <li>
                                <a class="avatar" href="page-profile.html#"><img src="assets/img/avatar9.jpg"></a>
                                <div>Nick White</div>
                                <span class="label label-success">active</span>
                                <a href="page-profile.html#" class="fa fa-facebook-square"></a>
                                <a href="page-profile.html#" class="fa fa-twitter-square"></a>
                                <a href="page-profile.html#" class="fa fa-linkedin-square"></a>
                            </li>
                        </ul>

                    </div>
                    <div class="tab-pane" id="photos">

                        <div class="row">
                            <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                                <img class="img-thumbnail" src="assets/img/gallery/photo1.jpg" alt="Sample Image">
                            </div>
                            <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                                <img class="img-thumbnail" src="assets/img/gallery/photo2.jpg" alt="Sample Image">
                            </div>
                            <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                                <img class="img-thumbnail" src="assets/img/gallery/photo3.jpg" alt="Sample Image">
                            </div>
                            <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                                <img class="img-thumbnail" src="assets/img/gallery/photo4.jpg" alt="Sample Image">
                            </div>
                            <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                                <img class="img-thumbnail" src="assets/img/gallery/photo5.jpg" alt="Sample Image">
                            </div>
                            <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                                <img class="img-thumbnail" src="assets/img/gallery/photo6.jpg" alt="Sample Image">
                            </div>
                            <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                                <img class="img-thumbnail" src="assets/img/gallery/photo7.jpg" alt="Sample Image">
                            </div>
                            <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                                <img class="img-thumbnail" src="assets/img/gallery/photo8.jpg" alt="Sample Image">
                            </div>
                            <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                                <img class="img-thumbnail" src="assets/img/gallery/photo9.jpg" alt="Sample Image">
                            </div>
                            <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                                <img class="img-thumbnail" src="assets/img/gallery/photo10.jpg" alt="Sample Image">
                            </div>
                            <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                                <img class="img-thumbnail" src="assets/img/gallery/photo11.jpg" alt="Sample Image">
                            </div>
                            <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                                <img class="img-thumbnail" src="assets/img/gallery/photo12.jpg" alt="Sample Image">
                            </div>
                            <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                                <img class="img-thumbnail" src="assets/img/gallery/photo13.jpg" alt="Sample Image">
                            </div>
                        </div>

                    </div>
                </div>

            </div><!--/col-->

        </div><!--/profile-->



        </div>
        <!-- end: Content -->

@endsection