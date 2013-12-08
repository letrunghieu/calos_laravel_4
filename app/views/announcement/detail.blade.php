<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$units = $announcement->units;
$content = \Michelf\MarkdownExtra::defaultTransform($announcement->content);
$author = $announcement->creator;
$creatorHtml = HTML::image(Gravatar::src($author->email, 28)) . " " . $author->fullName();
$createdDateHtml = uiTimeTag($announcement->created_at);

?>
@section('second-navbar')
<div id='second-navbar'>

</div>
@stop

@section('content')
<div id='wrapper'>
    <section id="announcement">
	<div class="body">
	    {{ $content }}
	</div>
	<div class="creator">
	    {{ trans('organization.announcement.created by :name :datetime', array('name' => $creatorHtml, 'datetime' => $createdDateHtml)) }}
	</div>
	<div class="receivers">
	    <h4>{{ trans('organization.announcement.related units') }}</h4>
	    <ul class='unstyled'>
		@foreach($units as $u)
		<li>{{HTML::link(URL::action('UnitController@getUnitAnnouncements', array($u->id)), $u->name)}} ({{ uiTimeTag($u->pivot->created_at)}})</li>
		@endforeach
	    </ul>
	</div>
    </section>
</div>
@stop
