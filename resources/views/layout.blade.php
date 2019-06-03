<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>

  <!--""bgd    .g8""8q.`7MMF'   '7MF'`7MMF'`7MM"""YMM `YMM'   `MM'
.dP'     `M  .dP'    `YM.`MA     ,V    MM    MM     "   VMA   ,V
dM'       7  dM'      `MM VM:   ,V     MM    MM          VMA ,V
MM           MM        MM  MM.  M'     MM    MM""MM       VMMP
MM.    78MMF MM.      ,MP  `MM A'      MM    MM            MM
`BY.     MM  `Mb.    ,dP'   :MM;       MM    MM            MM
  `KRUES8DR    `"bmmd"'      VF      .JMML..JMML.        .J-->

<TITLE>@yield('title', 'Govify')</TITLE>
</HEAD>
<BODY>

<TABLE WIDTH=100% CELLPADDING=10>
    <TR><TD>
        <A HREF="/"><IMG SRC="/img/govify-logo.gif" ALT="Govify" /></A>
    <TD></TR>

    <TR><TD>
        <P>
            <FONT FACE="Verdana,Arial,Helvetica,sans-serif" SIZE=2>
                <A HREF="/">Home</A> | <A HREF="/docs">Available Documents</A> | <A HREF="/docs/new">Govify Your Document</A>
            </FONT>
        </P>
    </TD></TR>

    <TR><TD>
        <TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 WIDTH=80%>
            <TR>
                <TD BACKGROUND="/img/borders/gray_tl.gif" HEIGHT=7 WIDTH=7> </TD>
                <TD BACKGROUND="/img/borders/gray_top.gif" HEIGHT=7> </TD>
                <TD BACKGROUND="/img/borders/gray_tr.gif" HEIGHT=7 WIDTH=7> </TD>
            </TR>
            <TR>
                <TD BACKGROUND="/img/borders/gray_left.gif" WIDTH=7> </TD>
                <TD>
                    <TABLE CELLPADDING=10>
                        <TR>
                            <TD>
                                <FONT FACE="Verdana,Arial,Helvetica,sans-serif">@yield('content')</FONT>
                            </TD>
                        </TR>
                    </TABLE>
                </TD>
                <TD BACKGROUND="/img/borders/gray_right.gif" WIDTH=7> </TD>
            </TR>
            <TR>
                <TD BACKGROUND="/img/borders/gray_bl.gif" HEIGHT=7 WIDTH=7></TD>
                <TD BACKGROUND="/img/borders/gray_bottom.gif" HEIGHT=7> </TD>
                <TD BACKGROUND="/img/borders/gray_br.gif" HEIGHT=7 WIDTH=7></TD>
            </TR>
        </TABLE>
    </TD></TR>

    <TR><TD>
        <IMG SRC="/img/spacer.gif" HEIGHT=200 ALT="" />
    </TD></TR>

    <TR><TD>
        <IMG SRC="/img/under-construction-dot-gif.gif" ALT="This website is underconstruction dot gif" />
    </TD></TR>

    <TR><TD>
        <P>
            <FONT FACE="Verdana,Arial,Helvetica,sans-serif" SIZE=2>
               <B>Govify</B> is yet another government innovation from <B><A HREF="https://krues8dr.com/">Bill Hunt</A></B>.
           </FONT>
       </P>
    </TD></TR>
</TABLE>

</BODY>
</HTML>
