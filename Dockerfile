ARG WWWUSER
ARG WWWGROUP

FROM sail-8.2/app

RUN groupmod -g ${WWWGROUP} sail && usermod -u ${WWWUSER} -g ${WWWGROUP} sail
