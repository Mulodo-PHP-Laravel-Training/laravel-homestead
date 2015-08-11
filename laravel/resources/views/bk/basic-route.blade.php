@extends('master')
@section('content')
<!--main-->
<div class="container" id="main">
   <div class="row">
   <div class="col-md-4 col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading"><h4>Basic Routing</h4></div>
   			<div class="panel-body">
              <div class="list-group">
                <a href="/routing" class="list-group-item">Case 1</a>
                <a href="#" class="list-group-item">Case 2</a>
                <hr>
                <!-- open form -->
                {!! Form::open(array('class' => 'form', 'method' => 'post', 'url' => url('foo/bar'))) !!}
                <div class="input-group text-center">
	              	{!! Form::text('email', null, 
				        array('class'=>'form-control input-lg', 
				              'placeholder'=>'Enter your email address')) !!}	              	
	                <span class="input-group-btn">
	                	{!! Form::submit('POST', array('class'=>'btn btn-lg btn-primary')) !!}
	                </span>
	
	             </div>
                {!! Form::close() !!}
                <!-- close form -->
                <hr>
                <a href="#" class="list-group-item">Case 3</a>
                <hr>
                <!-- open form -->
                {!! Form::open(array('class' => 'form', 'method' => 'put', 'url' => url('foo/bar'))) !!}
                <div class="input-group text-center">
	              	{!! Form::text('email', null, 
				        array('class'=>'form-control input-lg', 
				              'placeholder'=>'Enter your email address')) !!}	              	
	                <span class="input-group-btn">
	                	{!! Form::submit('PUT', array('class'=>'btn btn-lg btn-primary')) !!}
	                </span>
	
	             </div>
                {!! Form::close() !!}
                <!-- close form -->
                <hr>
                <a href="#" class="list-group-item">Case 4</a>
                <hr>
                <!-- open form -->
                {!! Form::open(array('class' => 'form', 'method' => 'delete', 'url' => url('foo/bar'))) !!}
                <div class="input-group text-center">
	              	{!! Form::text('email', null, 
				        array('class'=>'form-control input-lg', 
				              'placeholder'=>'Enter your email address')) !!}	              	
	                <span class="input-group-btn">
	                	{!! Form::submit('DELETE', array('class'=>'btn btn-lg btn-primary')) !!}
	                </span>
	
	             </div>
                {!! Form::close() !!}
                <!-- close form -->
                <hr>
              </div>
            </div>
   		</div>
        <div class="well"> 
             <form class="form-horizontal" role="form">
              <h4>What's New</h4>
               <div class="form-group" style="padding:14px;">
                <textarea class="form-control" placeholder="Update your status"></textarea>
              </div>
              <button class="btn btn-success pull-right" type="button">Post</button><ul class="list-inline"><li><a href="#"><i class="glyphicon glyphicon-align-left"></i></a></li><li><a href="#"><i class="glyphicon glyphicon-align-center"></i></a></li><li><a href="#"><i class="glyphicon glyphicon-align-right"></i></a></li></ul>
            </form>
        </div>
     
        <div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>More Templates</h4></div>
   			<div class="panel-body">
              <img src="//placehold.it/150x150" class="img-circle pull-right"> <a href="#">Free @Bootply</a>
              <div class="clearfix"></div>
              There a load of new free Bootstrap 3 ready templates at Bootply. All of these templates are free and don't require extensive customization to the Bootstrap baseline.
              <hr>
              <ul class="list-unstyled"><li><a href="http://www.bootply.com/templates">Dashboard</a></li><li><a href="http://www.bootply.com/templates">Darkside</a></li><li><a href="http://www.bootply.com/templates">Greenfield</a></li></ul>
            </div>
         </div> 

	</div>
  	<div class="col-md-4 col-sm-6">
      	 
          <div class="well"> 
             <h4>Registering A Route For Multiple Verbs</h4>
             <!-- open form -->
             {!! Form::open(array('class' => 'form', 'method' => 'post', 'url' => url('routing-submit'))) !!}
                <div class="input-group text-center">
	              	{!! Form::text('email', null, 
				        array('class'=>'form-control input-lg', 
				              'placeholder'=>'Enter your email address')) !!}	              	
	                <span class="input-group-btn">
	                	{!! Form::submit('POST', array('class'=>'btn btn-lg btn-primary')) !!}
	                </span>
	
	             </div>
                {!! Form::close() !!}
                <!-- close form -->
                <hr>
                
                <!-- open form -->
                {!! Form::open(array('class' => 'form', 'method' => 'get', 'url' => url('routing-submit'))) !!}
                <div class="input-group text-center">
	              	{!! Form::text('email', null, 
				        array('class'=>'form-control input-lg', 
				              'placeholder'=>'Enter your email address')) !!}	              	
	                <span class="input-group-btn">
	                	{!! Form::submit('GET', array('class'=>'btn btn-lg btn-primary')) !!}
	                </span>
	             </div>
                {!! Form::close() !!}
                <!-- close form -->
            	
            	<hr>
            	<h4>Register a route that responds to all HTTP verbs</h4>
            	<!-- open form -->
                {!! Form::open(array('class' => 'form', 'method' => 'put', 'url' => url('foo'))) !!}
                <div class="input-group text-center">
	              	{!! Form::text('email', null, 
				        array('class'=>'form-control input-lg', 
				              'placeholder'=>'Enter your email address')) !!}	              	
	                <span class="input-group-btn">
	                	{!! Form::submit('PUT', array('class'=>'btn btn-lg btn-primary')) !!}
	                </span>
	             </div>
                {!! Form::close() !!}
                <!-- close form -->
            	
          </div>

      	 <div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Route Parameters</h4></div>
   			<div class="panel-body">
              <ul class="list-group">
              <a href="{{ url('user/1') }}" class="list-group-item">Capture a user's ID from the URL</a>
              <a href="{{ url('posts/1/comments/2') }}" class="list-group-item">Many route parameters as required</a>
              </ul>
            </div>
   		 </div>
      	 
      	 <div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Optional Parameters</h4></div>
   			<div class="panel-body">
              <ul class="list-group">
              <a href="{{ url('user1/') }}" class="list-group-item">Default username is null</a>
              <a href="{{ url('user2/') }}" class="list-group-item">Default username is John</a>
              </ul>
            </div>
   		 </div>
   		 
   		 <div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Regular Expression Constraints</h4></div>
   			<div class="panel-body">
              <ul class="list-group">
              <a href="{{ url('user3/anna') }}" class="list-group-item">'name' => [A-Za-z]+</a>
              <a href="{{ url('user4/12') }}" class="list-group-item">'id' => [0-9]+</a>
              <a href="{{ url('user5/12/anna') }}" class="list-group-item">'id' => '[0-9]+', 'name' => '[a-z]+']</a>
              </ul>
            </div>
   		 </div>
      	 
      	 <div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Optional Parameters 1</h4></div>
   			<div class="panel-body">
              <p><img src="//placehold.it/150x150" class="img-circle pull-right"> <a href="#">The Bootstrap Playground</a></p>
              <div class="clearfix"></div>
              <hr>
              Design, build, test, and prototype using Bootstrap in real-time from your Web browser. Bootply combines the power of hand-coded HTML, CSS and JavaScript with the benefits of responsive design using Bootstrap. Find and showcase Bootstrap-ready snippets in the 100% free Bootply.com code repository.
            </div>
         </div>
      
      	 
      
  	</div>
  	<div class="col-md-4 col-sm-6">
         <div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Named Routes</h4></div>
           	<p>Named routes allow you to conveniently generate URLs or redirects for a specific route</p>
   			<div class="panel-body">
              <ul class="list-group">
              <a href="{{ route('profile') }}" class="list-group-item">specify a name for a route using the as</li>
              <a href="#" class="list-group-item">specify route names for controller actions</li>
              </ul>
            </div>
   		</div>
         
        <div class="panel panel-default">
          <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Sub-Domain Routing</h4></div>
   			<div class="panel-body">
              <div class="list-group">
                <a href="http://vytien.homestead.app/subdomain" class="list-group-item active">Case 1</a>
                <a href="http://vytien.homestead.app/user-sub/1" class="list-group-item">Case 2</a>
              </div>
            </div>
   		</div>
   		
   		<div class="panel panel-default">
          <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Route Prefixes</h4></div>
   			<div class="panel-body">
              <div class="list-group">
                <a href="{{ route('admin-users') }}" class="list-group-item active">Users</a>
                <a href="{{ route('admin-customers') }}" class="list-group-item">Customers</a>
                <a href="{{ route('admin-orders') }}" class="list-group-item">Orders</a>
                <a href="{{ route('admin-user-profile', 1) }}" class="list-group-item">User Profile</a>
              </div>
            </div>
   		</div>
   		
   		<div class="panel panel-default">
          <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>CSRF Protection</h4></div>
   			<div class="panel-body">
              <div class="list-group">
                <a href="#" class="list-group-item active">Generate a hidden input field _token</a>
                <hr>
                <p>{!! csrf_field() !!}</p>
                <a href="#" class="list-group-item">csrf_token()</a>
                <hr>
                <p>{!! csrf_token() !!}</p>
              </div>
            </div>
   		</div>
      
    </div>
  </div><!--/row-->
  
  <hr>
  
  <div class="row">
  	<div class="col-md-12"><h2>Posts</h2></div>
    <div class="col-md-4 col-sm-6">
    	<div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Upgrade to Bootstrap 3</h4></div>
   			<div class="panel-body">
              <img src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=70" class="img-circle pull-right"> <a href="#">Guidance and Tools</a>
              <div class="clearfix"></div>
              <hr>
              <p>Migrating from Bootstrap 2.x to 3 is not a simple matter of swapping out the JS and CSS files.
              Bootstrap 3 is a major overhaul, and there are a lot of changes from Bootstrap 2.x. <a href="http://bootply.com/bootstrap-3-migration-guide">This guidance</a> is intended to help 2.x developers transition to 3.
              </p>
              <h5><a href="http://google.com/+bootply">More on Upgrading from +Bootply</a></h5>
              
            </div>
         </div> 
    </div>
     <div class="col-md-4 col-sm-6">
    	<div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Profiles</h4></div>
   			<div class="panel-body">
              Check out some of our member profiles..
              <hr>
              <div class="well well-sm">
                <div class="media">
                    <a class="thumbnail pull-left" href="#">
                        <img class="media-object" src="//placehold.it/80">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">John Doe</h4>
                		<p><span class="label label-info">10 photos</span> <span class="label label-primary">89 followers</span></p>
                        <p>
                           <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Message</a>
                           <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-heart"></span> Favorite</a>
                        </p>
                    </div>
                </div>
               </div>
            </div>
         </div> 
    </div>
     <div class="col-md-4 col-sm-6">
    	<div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Inspiration</h4></div>
   			<div class="panel-body">
              <img src="//placehold.it/150" class="img-circle pull-right"> <a href="#">Articles</a>
              <div class="clearfix"></div>
              <hr>
              <div class="clearfix"></div>
              <img src="http://placehold.it/120x90/3333CC/FFF" class="img-responsive img-thumbnail pull-right">
              <p>The more powerful (and 100% fluid) Bootstrap 3 grid now comes in 4 sizes (or "breakpoints"). Tiny (for smartphones), Small (for tablets), Medium (for laptops) and Large (for laptops/desktops).</p>
              <div class="clearfix"></div>
              <hr>
              <div class="clearfix"></div>
              <img src="http://placehold.it/120x90/33CC33/FFF" class="img-responsive img-thumbnail pull-left" style="margin-right:5px;">
              <p>Mobile first" is a responsive Web design practice that prioritizes consideration of smart phones and mobile devices when creating Web pages.</p>
              
              
            </div>
         </div> 
    </div><!--/articles-->
    </div>
    
    <hr>
  
	<div class="row">
	   <div class="col-sm-4 col-xs-6">
        <div class="panel panel-default">
          <div class="panel-thumbnail"><img src="//placehold.it/450X300/DD3333/EE3333" class="img-responsive"></div>
          <div class="panel-body">
            <p class="lead">Hacker News</p>
            <p>120k Followers, 900 Posts</p>
            
            <p>
              <img src="http://api.randomuser.me/portraits/med/men/20.jpg" width="28px" height="28px">
              <img src="http://api.randomuser.me/portraits/med/men/21.jpg" width="28px" height="28px">
              <img src="http://api.randomuser.me/portraits/med/men/14.jpg" width="28px" height="28px">
            </p>
          </div>
        </div>
      </div><!--/col-->
      
      <div class="col-sm-4 col-xs-6">
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><img src="//placehold.it/450X300/DD66DD/EE77EE" class="img-responsive"></div>
          <div class="panel-body">
            <p class="lead">Bootstrap Templates</p>
            <p>902 Followers, 88 Posts</p>
            
            <p>
              <img src="http://api.randomuser.me/portraits/med/men/4.jpg" width="28px" height="28px">
              <img src="http://api.randomuser.me/portraits/med/men/24.jpg" width="28px" height="28px">
            </p>
          </div>
        </div>
      </div><!--/col-->
      
      <div class="col-sm-4 col-xs-6">
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><img src="//placehold.it/450X300/2222DD/2222EE" class="img-responsive"></div>
          <div class="panel-body">
            <p class="lead">Social Media</p>
            <p>19k Followers, 789 Posts</p>
            
            <p>
              <img src="http://api.randomuser.me/portraits/med/women/4.jpg" height="28px">
              <img src="http://api.randomuser.me/portraits/med/men/4.jpg" width="28px" height="28px">
            </p>
          </div>
        </div>
      </div><!--/col-->
     
  	</div>
  
  	<hr>
  
  	<div class="row">
  		<div class="col-md-12"><h2>Playground</h2></div>
        <div class="col-md-12">
          <div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
          </div>
        </div>
    	<div class="col-md-6 col-sm-6">
    	<div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Buttons &amp; Labels</h4></div>
   			<div class="panel-body">
              <div class="row">
                <div class="col-xs-4"><a class="btn btn-default center-block" href="#">Button</a></div>
                <div class="col-xs-4"><a class="btn btn-primary center-block" href="#">Primary</a></div>
                <div class="col-xs-4"><a class="btn btn-danger center-block" href="#">Danger</a></div>
              </div>
              <br>
              <div class="row">
                <div class="col-xs-4"><a class="btn btn-warning center-block" href="#">Warning</a></div>
                <div class="col-xs-4"><a class="btn btn-info center-block" href="#">Info</a></div>
                <div class="col-xs-4"><a class="btn btn-success center-block" href="#">Success</a></div>
              </div>
              <hr>
              <div class="btn-group btn-group-sm"><button class="btn btn-default">1</button><button class="btn btn-default">2</button><button class="btn btn-default">3</button></div>              
              <hr>
              <div class="row">
              <div class="col-md-4">
                <span class="label label-default">Label</span>
                <span class="label label-success">Success</span>
                
              </div>
              <div class="col-md-4">
              	<span class="label label-warning">Warning</span>  
                <span class="label label-info">Info</span>
              </div>
              <div class="col-md-4">
                <span class="label label-danger">Danger</span>
                <span class="label label-primary">Primary</span>
                </div>
              </div>
              
            </div>
         </div> 
    </div>
     <div class="col-md-6 col-sm-6">
    	<div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Progress Bars</h4></div>
   			<div class="panel-body">
              
              <div class="progress">
                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-warning" style="width: 80%"></div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-danger" style="width: 50%"></div>
              </div>
              
            </div>
         </div> 
    </div>
     <div class="col-md-6 col-sm-6">
    	<div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Tabs</h4></div>
   			<div class="panel-body">

                <ul class="nav nav-tabs">
                  <li class="active"><a href="#A" data-toggle="tab">Section 1</a></li>
                  <li><a href="#B" data-toggle="tab">Section 2</a></li>
                  <li><a href="#C" data-toggle="tab">Section 3</a></li>
                </ul>
                <div class="tabbable">
                  <div class="tab-content">
                    <div class="tab-pane active" id="A">
                      <div class="well well-sm">I'm in Section A.</div>
                    </div>
                    <div class="tab-pane" id="B">
                      <div class="well well-sm">Howdy, I'm in Section B.</div>
                    </div>
                    <div class="tab-pane" id="C">
                      <div class="well well-sm">I've decided that I like wells.</div>
                    </div>
                  </div>
                </div> <!-- /tabbable -->
              
                <div class="col-sm-12 text-center">
                  <ul class="pagination center-block" style="display:inline-block;">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">»</a></li>
                  </ul>
                </div>
              
            </div>
         </div> 
    </div><!--playground-->
    
    <br>
    
    <div class="clearfix"></div>
      
    <hr>
    <div class="col-md-12 text-center"><p><a href="http://www.bootply.com/download/90113" target="_ext">Download Google Plus Style Template</a><br><a href="http://bootply.com/templates" target="_ext">More Bootstrap Templates by @Bootply</a></p></div>
    <hr>
    
  </div>
</div>
<!--/main-->
@stop
