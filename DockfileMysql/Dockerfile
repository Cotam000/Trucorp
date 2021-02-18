
FROM mysql

ENV MYSQl_ROOT_PASSWORD root
ENV MYSQL_DATABASE Trucorp

COPY ./trucorp-db.sql /docker-entrypoint-initdb.d
