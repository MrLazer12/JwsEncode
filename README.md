<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# JWS Encoder

## URL

`localhost:8080`

## Installation

```shell
docker-compose up
```

## Encode

1. create certificate(private key)
```shell
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout selfsigned.key -out selfsigned.crt
```
2. In form upload the private key(yourkey.key)
3. Write JSON or generate random
example:
```json
{
  "country": 17,
  "city": 69,
  "email": 81,
  "music_genre": 12,
  "sport": 79
}
```

## INTERFACE

![image](https://github.com/MrLazer12/JwsEncode/assets/34424600/05eb0041-308b-400a-88ad-4bb5d5df5b6a)

## Video Recording
https://github.com/MrLazer12/JwsEncode/assets/34424600/57888cf6-e7cc-4998-8726-8a601031c3c7

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


