#!/bin/sh

if [ -z "$1" ]
  then
    echo "No filename supplied"
    exit 1
fi

pandoc -t plain+ignore_line_breaks $1 -o $1.txt

awk -i inplace ' /^$/ { print "\n"; } /./ { printf("%s ", $0); } END { print ""; } ' $1.txt

sed -Ei "s/(agile|cloud|blockchain|technology|office|data|taxpayer)/XXXXXXXX/gI" $1.txt

cat $1.txt | fold | \
convert \
-font Courier-New \
text:- \
-rotate `convert null: -format '%[fx:rand()*15-7]' info:` \
-attenuate 0.25 \
+noise Gaussian \
-colorspace Gray \
-compress Zip \
$1.pdf

rm $1.txt
