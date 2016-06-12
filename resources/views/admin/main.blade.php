@extends('admin.master')
@include('admin.menu')
@section('content')

    	{!! $content !!}

    	{!! isset($footer)? $footer : "" !!}
@endsection