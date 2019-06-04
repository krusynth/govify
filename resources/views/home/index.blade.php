@extends('layout')

@section('content')

<P>
    <FONT COLOR=Teal>In 2014, we created <B>Govify</B> to help government create documents in government-friendly formats. Today, we're releasing Govify.Cloud, to put those same documents into <B>The Cloud</B>. This enables government agencies to say they're using The Cloud, as a token gesture to fulfilling new IT requirements, without having to change their existing business practices.</FONT>
</P>
<P>
    One of the biggest hurdles for government agencies to embrace <B>Open Data</B> is the ability to produce documents in a government-usable format, but well-formatted data and machine-readable text are not government-friendly formats.
</P>
<P>
    To solve this, we created <B>Govify</B>, a tool which converts machine-friendly text into Government-ready PDFs. These legible but closed-format documents can be easily used for any government purpose - or even printed, signed, and re-scanned to add extra bureaucracy.
</P>
<P>
    <B>NEW: Govify now automatically redacts technical documents to remove some proprietary information!</B>
</P>
<CENTER>
<TABLE>
    <TR>
        <TD><CENTER><IMG SRC="/img/before-govify.gif" ALT="Screenshot: Before Govify"/><BR/>
        <B>Before</B></CENTER></TD>
        <TD ROWSPAN=2>&nbsp;&nbsp;&nbsp;&rarr;&nbsp;&nbsp;&nbsp;</TD>
        <TD><CENTER><IMG SRC="/img/after-govify.gif" ALT="Screenshot: After Govify"/><BR/>
        <B>After</B></CENTER></TD>
    </TR>
</TABLE>
</CENTER>
<P>
    <A HREF="/docs">Click here to view documents people have uploaded.</A>
</P>
<P>
    <A HREF="/docs/new">Click here to get started uploading your documents.</A>
</P>

@endsection
