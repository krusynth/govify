#.gov.ify
======


One of the biggest hurdles for government agencies to embrace Open Data is the ability to produce documents in a government-usable format. Well-formatted XML and machine-readable text are not government-friendly formats.

To solve this, the [OpenGov Foundation](http://opengovfoundation.org/) has created .gov.ify, a tool which converts machine-friendly text into Government-ready PDFs.

These legible but closed-format documents can be easily used for any government purpose - or even printed and re-scanned for that extra level of in-house bureaucracy.



##Installation:

This package is just a quick bash wrapper around ImageMagick.  As a result, you'll just need to download the package and run `govify`.

* Note: This package requires a shell (Linux/Mac OS X/etc) and [ImageMagick](http://www.imagemagick.org/).


##Usage:

`./govify filename`


##Todo:

* Provide web front-end.
* Add redaction based on keyword list.
