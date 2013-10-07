<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
@if($messages)
@foreach($messages as $type => $msgs)
<div class='alert alert-{{$type}}'>
    {{ implode('<br />', $msgs) }}
</div>
@endforeach
@endif
