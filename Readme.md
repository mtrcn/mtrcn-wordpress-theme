# MTRCN WordPress Theme

![Deploy Theme](https://github.com/mtrcn/mtrcn-wordpress-theme/workflows/Deploy%20Theme/badge.svg)

It is a fundamental WordPress theme created explicitly for [my blog web site](https://mete.dev), but I thought I should share with others who are looking for a theme for a developer blog. 


**Credits:** This theme is a kind of fork of the [hello-friend-ng](https://github.com/rhazdon/hugo-theme-hello-friend-ng) (a Hugo theme) and [naked-wordpress theme](https://github.com/andjosh/naked-wordpress).

## Motivation

I have tried to use Hexo, Hugo and other static blog engines, but none of them gives me the same level of satisfaction that I found with Wordpress. On the other hand, they have an outstanding theme portfolio, especially for developer blogs. Unfortunately, I cannot say the same for Wordpress word. Thus, my motivation to create this theme project is that I couldn't find a good, clean and straightforward theme to extend, modify and use in my blog web site based on Wordpress. 

## Technology Stack
- PHP
- [SCSS](https://sass-lang.com/)
- [Github Actions](https://github.com/features/actions)

## How to Contribute

You can contribute in various ways;

-  Coding - Creating a pull request for missing features
-  Creating an issue on Issues page for new ideas
-  Promote it to your friends.
-  Or you can [buy me a coffee](https://www.buymeacoffee.com/mete) to support this project 😁

## How to Develop

I recommend using Docker to initiate a Wordpress stack on your local computer to develop new Wordpress features like a new theme.

I used the `stack.yml` file that you can find on Wordpress's [official Docker image page](https://hub.docker.com/_/wordpress/).

I slightly changed to use my host's location to bind the container's `/var/www/html/` to my project folder so that I can quickly work on Wordpress files and see the result.

To run following stack, run this command in your console; `docker stack up -c .\stack.yml` This will download a new WordPress installation to the folder where you executed the command. 



```yaml
version: '3.1'

services:

  wordpress:
    image: wordpress
    restart: always
    ports:
      - 8080:80
    environment:
      WORDPRESS_DB_HOST: db
      WORDPRESS_DB_USER: exampleuser
      WORDPRESS_DB_PASSWORD: examplepass
      WORDPRESS_DB_NAME: exampledb
    volumes:
      - .:/var/www/html/

  db:
    image: mysql:5.7
    restart: always
    environment:
      MYSQL_DATABASE: exampledb
      MYSQL_USER: exampleuser
      MYSQL_PASSWORD: examplepass
      MYSQL_RANDOM_ROOT_PASSWORD: '1'
    volumes:
      - db:/var/lib/mysql

volumes:
   db:
```

## Bonus

Under `.github` folder, you can find the deployment pipeline that uses GitHub Actions to deploy this repository directly to my blog when the new commit is made to the master branch. It is useful if you don't want to deal with FTP and other deployment tools for every change.