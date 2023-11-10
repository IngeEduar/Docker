FROM php:8.1 AS construct

WORKDIR /app/

RUN echo "<?php echo 'Esta es una demostración de multistage'; ?>" >> index.php

FROM php:8.1-apache

COPY --from=construct /app/index.php /var/www/html/index.php

EXPOSE 80