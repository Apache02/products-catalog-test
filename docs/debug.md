# Usage xdebug with docker container

### Prerequisites (do it once)

1. On Linux/Mac create/modify `docker-compose.override.yml` with content:
    ```yaml
    version: '3.6'
    
    services:
      app:
        extra_hosts:
          - "host.docker.internal:172.17.0.1"
    ```

    Example: [docker-compose.override.yml](docker-compose.override.yml)

    Change your host ip if need.
    On Windows host (`host.docker.internal`) domain exist by default.

2. Update container with new config
    ```shell script
    make up
    ```

### Debug   

1. Enable xdebug inside container
    ```shell script
    make xdebug-on
    ```
2. Start PHP Debug listener on IDE

3. Debug application ...

4. Disable xdebug
    ```shell script
    make xdebug-off
    ```

## Enable/Disable xdebug inside container

```shell script
docker-compose exec app /opt/enable-xdebug.sh
```

```shell script
docker-compose exec app /opt/disable-xdebug.sh
```
