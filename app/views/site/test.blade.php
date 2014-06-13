@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.test') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')

{{{ Lang::get('site.test') }}}

@stop
