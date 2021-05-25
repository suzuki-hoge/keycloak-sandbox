# Keycloak Sandbox
## composer
```
$ docker build -t keycloak-sandbox:composer -f docker/composer/Dockerfile .

$ docker run -it -v $(pwd):/sync keycloak-sandbox:composer bash

# composer install 
# composer dumpautoload
```

## docker compose
```
$ docker compose up -d --build
```

+ php application: http://localhost:19001/
+ keycloak: http://localhost:19002/

