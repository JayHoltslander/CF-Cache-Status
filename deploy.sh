clear &&
echo rsyncing html files to \"/\" to remote host... &&
rsync -ru *.html serverpilot@159.203.12.174:apps/cf-cache-status/public/ --delete &&
echo rsyncing php files to \"/\" to remote host... &&
rsync -ru *.php serverpilot@159.203.12.174:apps/cf-cache-status/public/ --delete &&
echo rsyncing svg files to \"/\" to remote host... &&
rsync -ru *.svg serverpilot@159.203.12.174:apps/cf-cache-status/public/ --delete &&
echo rsyncing htaccess files to \"/\" to remote host... &&
rsync -ru .htaccess serverpilot@159.203.12.174:apps/cf-cache-status/public/ --delete &&

echo rsyncing folder \"/css\" to remote host... &&
rsync -ru css/ serverpilot@159.203.12.174:apps/cf-cache-status/public/css/ --delete &&
echo rsyncing folder \"/content\" to remote host... &&
rsync -ru js/ serverpilot@159.203.12.174:apps/cf-cache-status/public/js/ --delete &&
echo DONE!