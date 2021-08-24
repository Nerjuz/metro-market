FROM php:8.0-cli
COPY . /opt/project
WORKDIR /opt/project
RUN apt-get update \
    && apt-get install zsh -y \
    && apt install zip unzip php-zip -y \
    && apt-get install git -y \
    && sh -c "$(curl -fsSL https://raw.github.com/robbyrussell/oh-my-zsh/master/tools/install.sh)" -y \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer