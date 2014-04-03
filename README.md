#.gov.ify

One of the biggest hurdles for government agencies to embrace Open Data is the ability to produce documents in a government-usable format. Well-formatted XML and machine-readable text are not government-friendly formats.

To solve this, the [OpenGov Foundation](http://opengovfoundation.org/) has created .gov.ify, a tool which converts machine-friendly text into Government-ready PDFs.

These legible but closed-format documents can be easily used for any government purpose - or even printed and re-scanned for that extra level of in-house bureaucracy.



##Installation:

Govify requires [ImageMagick](http://www.imagemagick.org/) and [GhostScript](http://www.ghostscript.com/). For example, to install the necessary dependencies on OS X, simply run:

`brew install imagemagick ghostscript`

You may be able to install the dependency similarly with your platform's package manager by runing the equivalent command with `ack` or `yum`.

##Usage:

`./govify filename`


##Todo:

* Provide web front-end.
* Add redaction based on keyword list.


##Also:

We also have available the frontend to the [govify.org website](https://github.com/opengovfoundation/govify-site) (PHP), which handles file uploads and the [backend worker process](https://github.com/opengovfoundation/govify-worker) (Python) which does the real work.  Both integrate with the [Rackspace Cloud API](http://developer.rackspace.com/).
