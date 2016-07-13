#!/bin/sh
chgrp www-data -R data/cache/
chmod -R g+w data/cache/
chmod -R u+w data/cache/

find data/cache/ -type f -exec chmod u-x {} \;
find data/cache/ -type d -exec chmod u+x {} \;

find data/cache/ -type f -exec chmod g-x {} \;
find data/cache/ -type d -exec chmod g+x {} \;

find data/cache/ -type f -exec chmod g-s {} \;
find data/cache/ -type d -exec chmod g+s {} \;

setfacl -dR -m u::rwx data/cache/
setfacl -dR -m g::rwx data/cache/