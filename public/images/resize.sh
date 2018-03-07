# !/bin/bash
# Use: resize.sh _dirname_ _freshopt_
# The script will look into the raw subdirectory of _dirname_ and convert the images there into large and small versions
if [ "$2" == "--fresh" ]; then
	rm -rf $1/large/large_*
	rm -rf $1/small/small_*
	convert "$1/raw/*.{jpg,png}[960x>]" -set filename:base '%[base]' "$1/large/large_%[filename:base].png"
	convert "$1/raw/*.{jpg,png}[576x>]" -set filename:base '%[base]' "$1/small/small_%[filename:base].png"
else
	# if not --fresh, then update only *new* photos and keep the old ones
	for entry in "$1"/raw/*
	do
		if [ ! -f "$1/large/large_$(basename $entry | cut -d. -f1).png" ]; then
			convert "$entry[960x>]" -set filename:base '%[base]' "$1/large/large_%[filename:base].png"
		fi
		if [ ! -f "$1/small/small_$(basename $entry | cut -d. -f1).png" ]; then
			convert "$entry[576x>]" -set filename:base '%[base]' "$1/small/small_%[filename:base].png"
		fi
	done
fi