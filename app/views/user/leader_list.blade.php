<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
global $organization;
?>
@section('second-navbar')
<div id='second-navbar'>
</div>
@stop

@section('content')
<div id='wrapper'>
    <section id="wide-table">
	<div>
	    <p class="description">
		{{trans('organization.unit.leader change guide')}}
	    </p>
	    @if(Session::has('success'))
	    <div class="alert alert-success">
		{{Session::get('success')}}
	    </div>
	    @endif
	    <form method="post" action="<?php echo URL::current() ?>">
		<table id="unit-leaders" class="table table-bordered">
		    <tr>
			<th scope='col'>
			    {{trans('organization.unit.name')}}
			</th>
			<th scope='col'>
			    {{trans('organization.unit.leader')}}
			</th>
			<th scope='col'>
			    {{trans('organization.unit.leader from')}}
			</th>
			<th></th>
		    </tr>
		    @foreach($unitWithLeaders as $id => $unit)
		    <tr data-id="{{$id}}">
			<td>
			    {{$unit['unit']->name}}
			</td>
			<td class="unit-leader-name">
			    {{$unit['leader'] ? $unit['leader']->fullName()  : ""}}
			</td>
			<td  class="unit-leader-from">
			    <?php
			    if ($unit['leader'])
			    {
				$date = new Carbon\Carbon($unit['leader']->assigned_at);
				echo $date->format('d-m-Y H:i');
			    }
			    ?>
			</td>
			<td>
			    <input type='hidden' name='unit[{{$id}}][id]' class="unit-input-id" value='{{$unit["unit"]->id}}' />
			    <input type='hidden' name='unit[{{$id}}][leader_id]' class="unit-input-leader-id" value="{{$unit['leader'] ? $unit['leader']->id : ''}}" />
			    <a class="btn btn-xs btn-default btn-change-user" title='{{trans("organization.unit.tooltip.change leader")}}' data-toggle="tooltip">{{trans('global.change')}}</a>
			    <a class="btn btn-xs btn-warning btn-remove-user" title='{{trans("organization.unit.tooltip.delete leader")}}' data-toggle="tooltip">{{trans('global.delete')}}</a>
			</td>
		    </tr>
		    @endforeach
		</table>
		<div>
		    <input type="submit" class="btn btn-primary" name="update-leaders" value="{{trans('organization.unit.update leader')}}" />
		</div>
	    </form>
	</div>
    </section>
</div>
<div class="modal fade" id="select-user-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
	<div class="modal-content">
	    <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title">{{trans('user.select a user from this list')}}</h4>
	    </div>
	    <div class="modal-body">
		<table class="table table-bordered" id='user-list-table'>
		    <thead>
			<tr>
			    <th scope="col">#</th>
			    <th scope="col" class="nowrap"><i class="fa fa-user"></i> {{trans('user.member name')}}</th>
			    <th></th>
			    <th scope="col" class="nowrap"><i class="fa fa-check-square-o"></i> {{trans('global.select')}}</th>
			</tr>
		    </thead>
		    <tbody>

		    </tbody>
		</table>
		<script>
		    var _show_user_list_ = true;
		    var _unit_id_ = <?php echo $organization->id ?>;
		    var _list_format_ = "select-list";
		    var _selected_func_ = function(id, gravatar, fullname)
		    {
			if (currentId)
			{
			    var tr = $('tr[data-id=' + currentId + ']');
			    tr.find('.unit-input-leader-id').val(id);
			    tr.find('.unit-leader-name').html(fullname);
			}
			console.log(id, fullname);
			$('#select-user-modal').modal('hide');
		    };
		</script>
	    </div>
	</div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@stop
