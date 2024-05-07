FROM nginx:alpine

LABEL maintainer=""

EXPOSE 80

# Instalação
RUN apk add --no-cache curl

# URL
ARG INDEX_HTML_URL=https://github.com/AdrianoDCosta/PUCPR/tree/main/DevOps_AS2/index.html

RUN curl -o /usr/share/nginx/html/index.html $INDEX_HTML_URL

# Início do container
CMD ["nginx", "-g", "daemon off;"]