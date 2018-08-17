clear &&

echo rsyncing png files to \"/\" to remote host... &&
rsync -ru dist/*.png serverpilot@159.203.12.174:apps/cf-cache-status/public/ --delete &&

echo rsyncing ico files to \"/\" to remote host... &&
rsync -ru dist/*.ico serverpilot@159.203.12.174:apps/cf-cache-status/public/ --delete &&

echo rsyncing xml files to \"/\" to remote host... &&
rsync -ru dist/*.xml serverpilot@159.203.12.174:apps/cf-cache-status/public/ --delete &&

echo rsyncing webmanifest files to \"/\" to remote host... &&
rsync -ru dist/*.webmanifest serverpilot@159.203.12.174:apps/cf-cache-status/public/ --delete &&

echo rsyncing html files to \"/\" to remote host... &&
rsync -ru dist/*.html serverpilot@159.203.12.174:apps/cf-cache-status/public/ --delete &&

echo rsyncing php files to \"/\" to remote host... &&
rsync -ru dist/*.php serverpilot@159.203.12.174:apps/cf-cache-status/public/ --delete &&

echo rsyncing svg files to \"/\" to remote host... &&
rsync -ru dist/*.svg serverpilot@159.203.12.174:apps/cf-cache-status/public/ --delete &&

echo rsyncing htaccess files to \"/\" to remote host... &&
rsync -ru dist/.htaccess serverpilot@159.203.12.174:apps/cf-cache-status/public/ --delete &&



echo rsyncing folder \"/css\" to remote host... &&
rsync -ru dist/css/ serverpilot@159.203.12.174:apps/cf-cache-status/public/css/ --delete &&
echo rsyncing folder \"/content\" to remote host... &&
rsync -ru dist/js/ serverpilot@159.203.12.174:apps/cf-cache-status/public/js/ --delete &&
echo DONE!