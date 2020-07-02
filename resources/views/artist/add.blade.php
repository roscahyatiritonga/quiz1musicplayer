@extends('layouts.app')

@section('content')

<div class="container">

<h3>Tambah Data Artist</h3>
<a href="{{ url('artist') }}">Data Artist</a>
<form action="{{ url('/artist') }}" method="POST">
@csrf
<table>
	<tr>
		<td>NAMA</td>
		<td><input type="text" name="artist_name"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="SIMPAN"></td>
	</tr>
</table>
</form>
</div>

@endsection