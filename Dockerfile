
FROM douggapp/php83:20240926A

LABEL maintainer="ddouggs"

RUN apt-get update && apt-get upgrade -y

COPY ./docker/default.conf /etc/nginx/sites-available/default

RUN nginx -t

WORKDIR /var/www/html

EXPOSE 80 443

CMD ["nginx", "-g", "daemon off;"]
