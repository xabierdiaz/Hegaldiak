
@extends('base')

@section('content')
  <center>
    <div class="cointainer w-25 border p-4 mt-4">


    <!--view and delete-->
    </br>
    </br>
    </br>
    @foreach ($hega as $eg)
      <a>Irteera aireportua---><a>
      <a>{{$eg -> irteera}}</a>
      <a>//Helmuga aireportua---><a>
      <a>{{$eg -> helmuga}}</a>
      <a>//Eguna eta hordua---><a>
      <a>{{$eg -> egunaordua}}</a>
      <a>//Iraupena---><a>
      <a>{{$eg -> iraupena}}</a>
      <!--edit link-->
      <a href="{{ route('hegaldiak-aldatu', ['id' => $eg->id]) }}">editatu</a>
      <br/><br/><br/>
    @endforeach
    <div>
  </center>
@endsection