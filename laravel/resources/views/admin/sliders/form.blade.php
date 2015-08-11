@extends('admin.master')
<div id="wrapper">

	@include('admin.nav')

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Forms</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Add New Item</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<!-- open form -->
								{!! Form::open(array('files'=>true,'role'=>'form','method'
								=>'post', 'url' => url('administrator/sliders'))) !!}
								<div class="form-group">{!! Form::label('title','Title') !!} {!!
									Form::text('txtTitle',null,array('class'=>
									'form-control','placeholder'=>'Enter your title','id'=>
									'title')) !!}</div>
								<div class="form-group">{!! Form::label('image','Image') !!} {!!
									Form::file('vtFile',['id'=>'image']) !!}</div>
								<div class="form-group">{!!
									Form::label('description','Description') !!} {!!
									Form::textarea('txtDescription',null,['class'=>
									'form-control','placeholder'=>'Enter your description','id'
									=>'description','row'=>'3']) !!}</div>
								{!! Form::submit('Submit',array('class'=>'btn btn-primary')) !!}
								{!! Form::reset('Reset',array('class'=>'btn btn-default')) !!}
								{!! Form::close() !!}
								<!-- close form -->
							</div>
						</div>
						<!-- /.row (nested) -->
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /#page-wrapper -->

</div>