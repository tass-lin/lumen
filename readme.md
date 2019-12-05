# php & swoole 

WORKDIR `/var/www/project`

## Step by step

https://medium.com/@tasslin/%E9%9A%A8%E6%89%8B%E5%AF%AB%E5%AF%AB-docker-3-46439e9411c3

https://medium.com/@tasslin/%E9%9A%A8%E6%89%8B%E5%AF%AB%E5%AF%AB-gcp-6-grafana-vegeta-812590b62fd6

## Docker hub

https://hub.docker.com/r/tasslin/lumen

### Quickly up
```
docker-compose up -d
```
```
docker build -t lumen .

docker run -d --name lumen -p 80:80 lumen
```

http://localhost
http://localhost/lowLatency
http://localhost/highLatency

### CMD

```
docker exec -it lumen ash

php artisan swoole:http {start|restart|reload|stop|infos}
```