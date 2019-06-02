# Govify

One of the biggest hurdles for government agencies to embrace Open Data is the ability to produce documents in a government-usable format. Well-formatted XML and machine-readable text are not government-friendly formats.

To solve this, I've created Govify, a tool which converts machine-friendly text into Government-ready PDFs.

These legible but closed-format documents can be easily used for any government purpose - or even printed and re-scanned for that extra level of in-house bureaucracy.

## Installation:

Govify requires [Pandoc](https://pandoc.org/), [ImageMagick](http://www.imagemagick.org/), and [GhostScript](http://www.ghostscript.com/).

On Mac OS, you'll also need a GNU-compatible `sed`, since it ships with BSD `sed` which does not support case-insensitive matching. You'll also need to make it the default (follow Homebrew's instructions on how to achieve this).

To install all the dependencies with homebrew, run:

`brew install imagemagick ghostscript pandoc gnu-sed`

## Usage:

`./govify.sh filename`



