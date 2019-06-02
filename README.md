# Govify

One of the biggest hurdles for government agencies to embrace Open Data is the ability to produce documents in a government-usable format. Well-formatted XML and machine-readable text are not government-friendly formats.

To solve this, I've created Govify, a tool which converts machine-friendly text into Government-ready PDFs.

These legible but closed-format documents can be easily used for any government purpose - or even printed and re-scanned for that extra level of in-house bureaucracy.

## Installation:

Govify requires [Pandoc](https://pandoc.org/), [ImageMagick](http://www.imagemagick.org/), and [GhostScript](http://www.ghostscript.com/). To install the necessary dependencies on OS X, simply run:

`brew install imagemagick ghostscript pandoc`

You may be able to install the dependency similarly with your platform's package manager by runing the equivalent command with `ack` or `yum`.

## Usage:

`./govify.sh filename`



