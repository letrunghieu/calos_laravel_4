<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
@section('second-navbar')
<div id='second-navbar'>
    <div id="export-user-list" class="widget">
	<div class='text-center'>
	    <h4><i class="fa fa-download"></i> {{trans('user.export user list')}}</h4>
	</div>
	<div class="btn-group btn-group-justified">
	    <a class="btn btn-primary btn-block" href="{{URL::action('UserController@getUserListVCard')}}"><i class="fa fa-download"></i> VCard</a>
	    <a class="btn btn-default btn-block" href="{{URL::action('UserController@getUserListCSV')}}"><i class="fa fa-download"></i> CSV</a>
	</div>
    </div>
    <div id='firtname-prefixes' class="widget"> 
	<a href="{{URL::action('UserController@getUserList')}}" class='item all active' title="{{trans('user.help.view all member')}}" data-toggle="tooltip" data-placement="auto top">{{ trans('global.all')}}</a>
	@foreach($firstnamePrefixes as $prefix)
	<a href="#" data-fname-prefix="{{$prefix->fname}}" class='item' title="{{ trans_choice('user.help.view all :number user with firstname begin by the letter :char', $prefix->c, array('number' => $prefix->c, 'char' => $prefix->fname)) }}" data-toggle="tooltip" data-placement="auto top">
	    <span>{{$prefix->fname}}</span>
	</a>
	@endforeach
    </div>
</div>
@stop

@section('content')
<div id='wrapper'>
    <section id="wide-table">
	<div>
	    <table class="table table-bordered" id='user-list-table'>
		<thead>
		    <tr>
			<th scope="col">#</th>
			<th scope="col" class="nowrap"><i class="fa fa-user"></i> {{trans('user.member name')}}</th>
			<th></th>
			<th scope="col"><i class="fa fa-qrcode" data-toggle="tooltip" data-placement="auto top" title="{{trans('user.show qr code')}}"></i></th>
			<th scope="col" class="nowrap"><i class="fa fa-envelope"></i> {{trans('user.email')}}</th>
			<th scope="col" class="nowrap"><i class="fa fa-phone"></i> {{trans('user.phone number')}}</th>
			<th scope="col" class="nowrap"><i class="fa fa-calendar-empty"></i> {{trans('user.added date')}}</th>
		    </tr>
		</thead>
		<tbody>

		</tbody>
	    </table>
	    <script>
		var _show_user_list_ = true;
	    </script>


	    <div class="modal fade" id="modal-qrcode" role="dialog">
		<div class="modal-dialog">
		    <div class="modal-content">
			<div class="modal-body">
			    <div class="text-center">
				<img id="current-qrcode" />
			    </div>
			</div>
		    </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	    </div><!-- /.modal -->

	</div>
    </section>
</div>
@stop
