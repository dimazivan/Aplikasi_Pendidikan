@extends('admin.layouts.app')
@section('title')
Data Master - User
@endsection
@section('content')
<div class="page-title">
	<div>
		<h1><i class="fa fa-file-o"></i> Dynamic Table</h1>
		<h4>Dynamic tables by DataTables</h4>
	</div>
</div>
<div id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="index-2.html">Home</a>
			<span class="divider"><i class="fa fa-angle-right"></i></span>
		</li>
		<li class="active">Dynamic Table</li>
	</ul>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-title">
				<h3><i class="fa fa-table"></i> Dynamic Table</h3>
				<div class="box-tool">
					<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
				</div>
			</div>
			<div class="box-content">
				<div class="btn-toolbar pull-right clearfix">
					<div class="btn-group">
						<a class="btn btn-circle show-tooltip" title="Add new record" href="#"><i
								class="fa fa-plus"></i></a>
						<a class="btn btn-circle show-tooltip" title="Edit selected" href="#"><i
								class="fa fa-edit"></i></a>
						<a class="btn btn-circle show-tooltip" title="Delete selected" href="#"><i
								class="fa fa-trash-o"></i></a>
					</div>
					<div class="btn-group">
						<a class="btn btn-circle show-tooltip" title="Print" href="#"><i class="fa fa-print"></i></a>
						<a class="btn btn-circle show-tooltip" title="Export to PDF" href="#"><i
								class="fa fa-file-text-o"></i></a>
						<a class="btn btn-circle show-tooltip" title="Export to Exel" href="#"><i
								class="fa fa-table"></i></a>
					</div>
					<div class="btn-group">
						<a class="btn btn-circle show-tooltip" title="Refresh" href="#"><i class="fa fa-repeat"></i></a>
					</div>
				</div>
				<br /><br />
				<div class="clearfix"></div>
				<div class="table-responsive" style="border:0">
					<table class="table table-advance" id="table1">
						<thead>
							<tr>
								<th style="width:18px"><input type="checkbox" /></th>
								<th>Rendering engine</th>
								<th>Browser</th>
								<th>Platform(s)</th>
								<th class="text-center">Engine version</th>
								<th>CSS grade</th>
							</tr>
						</thead>
						<tbody>
							<tr class="table-flag-blue">
								<td><input type="checkbox" /></td>
								<td>Trident</td>
								<td>Internet Explorer 7</td>
								<td>Win XP SP2+</td>
								<td class="text-center">7</td>
								<td><span class="label label-success">A</span></td>
							</tr>
							<tr>
								<td><input type="checkbox" /></td>
								<td>Trident</td>
								<td><a href="#">AOL browser (AOL desktop)</a></td>
								<td>Win XP</td>
								<td class="text-center">6</td>
								<td><span class="label label-success">A</span></td>
							</tr>
							<tr class="table-flag-orange">
								<td><input type="checkbox" /></td>
								<td>Gecko</td>
								<td><span class="label label-success">Not Bad</span> Firefox 1.5</td>
								<td>Win 98+ / OSX.2+</td>
								<td class="text-center">1.8</td>
								<td><span class="label label-success">A</span></td>
							</tr>
							<tr>
								<td><input type="checkbox" /></td>
								<td>Gecko</td>
								<td>Netscape Navigator 9</td>
								<td>Win 98+ / OSX.2+</td>
								<td class="text-center">1.8</td>
								<td><span class="label label-success">A</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection