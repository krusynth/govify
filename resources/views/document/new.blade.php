@extends('layout')

@section('title', 'Govify | Upload Your Document')

@section('content')

<H1>Govify Your Document</H1>
<P>
    Use the form below to upload your document. Only common text documents formats are supported at this time.
</P>
<P>
    <B>By uploading your file, you are agreeing to put the file on the Public Cloud where anyone can view it.</B>
</P>

@if ($errors->all())
    <UL>
        @foreach ($errors->all() as $error)
            <LI>{{$error}}</LI>
        @endforeach
    </UL>
@endif

<FORM ACTION="/docs/new" METHOD="POST" ENCTYPE="multipart/form-data">
    {!! str_replace('input type="hidden" name="_token" value', 'INPUT TYPE=HIDDEN NAME="_token" VALUE', csrf_field()) !!}
    <TABLE CELLPADDING=10>
        <TR>
            <TD><LABEL>Document Name</LABEL></TD>
            <TD WIDTH=400><INPUT TYPE=TEXT NAME="name" SIZE=70 MAXLENGTH=128 /></TD>
        </TR>
        <TR>
            <TD><LABEL>File to Upload</LABEL></TD>
            <TD WIDTH=400><INPUT TYPE=FILE NAME="file" /></TD>
        </TR>
        <TR>
            <TD COLSPAN=2><INPUT TYPE=SUBMIT NAME=SUBMIT VALUE="SUBMIT" /></TD>
        </TR>
    </TABLE>

    <INPUT TYPE=HIDDEN NAME="MAX_FILE_SIZE" VALUE="1048576" />
</FORM>

@endsection
