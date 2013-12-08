<?php
/**
 * @var array|Announcement $announcements
 */
?>
@if (!$announcements->isEmpty())
<ul class="list announcements">
    @foreach ($announcements as $ann)
    <li class='item announcement'>
	
	<p class='title'>
	    <i class='fa fa-bell'></i> <a href='#'>{{$ann->title}}</a>
	</p>
	<p class='datetime'>
	   <time datetime="{{$ann->pivot->created_at->toRFC3339String()}}">{{$ann->pivot->created_at->diffForHumans()}}</time>
	</p>
    </li>
    @endforeach
</ul>
@endif
