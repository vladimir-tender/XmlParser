FROM nginx:alpine

COPY xml-parser.local.conf /etc/nginx/conf.d/xml-parser.local.conf

WORKDIR /etc/nginx

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
