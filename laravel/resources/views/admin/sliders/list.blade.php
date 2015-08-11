@extends('admin.master')
<div id="wrapper">

	@include('admin.nav')

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Slider Management</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-sm-6">
				<div class="dataTables_paginate paging_simple_numbers"
					id="dataTables-example_paginate">
				<?php echo $list->render(); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">List Sliders</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="dataTable_wrapper">
							<table class="table table-striped table-bordered table-hover"
								id="dataTables-example">
								<colgroup>
									<col class="col-xs-1">
									<col class="col-xs-3">
									<col class="col-xs-3">
									<col class="col-xs-6">
									<col class="col-xs-1">
								</colgroup>
								<thead>
									<tr>
										<th>ID</th>
										<th>Title</th>
										<th>Image</th>
										<th>Description</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list as $key=>$item)
									<tr class="odd gradeX">
										<td>{{ $item->id }}</td>
										<td>{{ $item->title }}</td>
										<td class="center"><img
											src="{{ url() }}/mulodo/images/slider/upload/{{ $item->image }}"
											width=200 class="img-circle"></td>
										<td class="center">{{ $item->description }}</td>
										<td class="center"><a
											href="{{ url('administrator/sliders/edit',[$item->id]) }}">{!!
												Form::button('Edit',['class'=>'btn btn-default']) !!}</a></td>
										<td class="center">{!! Form::button('Delete',['class'=>'btn
											btn-default','data-toggle'=>'modal','data-target'=>'#myModal-'.$item->id])
											!!} <!-- Modal -->
											<div class="modal fade" id="myModal-{{ $item->id }}"
												tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal"
																aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
															<h4 class="modal-title" id="myModalLabel">Confirmation
																Dialog</h4>
														</div>
														<div class="modal-body">Are you sure to delete this item?</div>
														<div class="modal-footer">{!!
															Form::open(array('files'=>true,'role'=>'form','method'
															=>'delete', 'url' => url('administrator/sliders'))) !!} {!!
															Form::button('Close',['class'=>'btn
															btn-default','data-dismiss'=>'modal']) !!} {!!
															Form::submit('Delete',array('class'=>'btn btn-primary'))
															!!}
															{!! Form::hidden('id',$item->id) !!}
															{!! Form::close() !!}
															</div>
													</div>
												</div>
											</div> <!-- Modal --></td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<!-- /.table-responsive -->
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-sm-6">
				<div class="dataTables_paginate paging_simple_numbers"
					id="dataTables-example_paginate">
				<?php echo $list->render(); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- /#page-wrapper -->

</div>