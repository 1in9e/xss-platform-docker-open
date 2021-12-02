FROM tutum/lamp:latest

LABEL maintainer="_lin9e <lin9e@qq.com>"

RUN rm -rf /app
COPY ./xss /app/
COPY ./mysql.sh /
EXPOSE 80 3306
CMD ["/run.sh"] 
