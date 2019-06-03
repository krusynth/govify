@extends('layout')

@section('title', 'Govify | Upload Your Document')

@section('content')

<H1>Available Documents</H1>
<P>
    The following documents have been <B>Govified</B> and are available to download.
</P>

@if($docs)
    <UL>
    @foreach($docs as $doc)
        <LI><A HREF="{{$doc->url}}">{{$doc->name}} (uploaded {{$doc->created_at->format('M d, Y')}})</A></LI>
    @endforeach
    </UL>

    {{ $links }}
@endif

@endsection
