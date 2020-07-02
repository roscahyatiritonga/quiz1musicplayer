@extends('layouts.app')

@section('content')

<div class="container">

<h3>Edit Data Album</h3>
<a href="{{ url('album') }}">Data Album</a>
<form action="{{url('/album/'.$row->album_id)}}" method="POST">
	<input name="_method" type="hidden" value="PATCH">
@csrf
<table>
	<tr>
		<td> ID ARTIST </td>
		<td><input type="text" name="artist_id" value="{{$row->artist_id}}"></td>
	</tr>
	<tr>
		<td> NAMA ALBUM</td>
		<td><input type="text" name="album_name" value="{{$row->album_name}}"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="UPDATE"></td>
	</tr>
</table>
</form>
</div>

@endsection