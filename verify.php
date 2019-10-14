curl -v -X POST https://api.line.me/oauth2/v2.1/token \
-H 'Content-Type: application/x-www-form-urlencoded' \
-d 'grant_type=authorization_code' \
-d 'code=xxx' \
-d 'redirect_uri=xxx' \
-d 'client_id=xxx' \
-d 'client_secret=xxx'
