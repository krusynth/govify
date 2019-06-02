#!/bin/sh

if [ -z "$1" ]
  then
    echo "No filename supplied"
    exit 1
fi

pandoc -t plain $1 | \
sed -En "s/(agile|cloud|blockchain|technology|office|data|taxpayer)/████████████/gp" | \
fold | \
convert \
-font CourierNew \
text:- \
-rotate `convert null: -format '%[fx:rand()*15-7]' info:` \
-attenuate 0.25 \
+noise Gaussian \
-colorspace Gray \
$1.pdf
