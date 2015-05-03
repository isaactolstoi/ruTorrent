#!/bin/sh
#
# $1 - unrar
# $2 - intput directory with tail slash
# $3 - output directory with tail slash
# $4 - unzip
# $5 - archive files to delete

ret=0
"$(dirname $0)"/unrar_dir.sh "$1" "$2" "$3" "$4" "$5"
last=$?
[ $last -gt 1 ] && ret=$last
"$(dirname $0)"/unzip_dir.sh "$4" "$2" "$3" "$1" "$5"
last=$?
[ $last -gt 1 ] && ret=$last
exit $ret
