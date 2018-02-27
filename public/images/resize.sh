# Use: resize.sh _dirname_
# The script will look into the raw subdirectory of _dirname_ and convert the images there into large and small versions

rm -rf $1/large/large_*
rm -rf $1/small/small_*

convert "$1/raw/*.{jpg,png}[960x>]" -set filename:base '%[base]' "$1/large/large_%[filename:base].png"
convert "$1/raw/*.{jpg,png}[576x>]" -set filename:base '%[base]' "$1/small/small_%[filename:base].png"