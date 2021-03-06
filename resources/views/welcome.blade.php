@extends('app')

@section('content')

@foreach($data as $artikel)
<div class="panel">
    <div class="heading">
        <span class="icon mif-file-text"></span>
        <span class="title">{{$artikel->judul}}</span>
    </div>
    <div class="content">
        {{ $artikel->isi }}
        <hr>
        <a href="{{ $artikel->slug }}">Read More</a>
        <br><br>

        <div class="place-right">
          <span class="mif-mail"></span>
          <a target="_blank" href="{{ url('mail/'.$artikel->slug) }}">Send Me E-Mail</a>
          <span class="mif-file-pdf"></span>
          <a target="_blank" href="{{ url('pdf/'.$artikel->slug) }}">View PDF</a>
          <span class="mif-calendar"></span>
          {{ date_format(date_create($artikel->create_at), "D, d M Y H:i:s") }}
          <span class="mif-user"></span>
          {{ App\User::find($artikel->idpengguna)['email'] }}
        </div>
        <br>
    </div>
</div>
@endforeach

<hr>
<span class="place-right">
{!! $data->render() !!}
</span>
@endsection
