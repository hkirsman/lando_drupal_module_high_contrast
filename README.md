# Installation

This is Lando setup for the Drupal 7 High Contrast module https://www.drupal.org/project/high_contrast
It's meant mainly for developers to get started fast. In short you need Lando
https://docs.devwithlando.io/installation/installing.html and follow these steps in bash:

    git clone git@github.com:hkirsman/d7_high_contrast.git
    cd d7_high_contrast
    lando composer install
    lando start
    lando drush site-install --account-name=admin --account-pass=admin -y
    lando drush en high_contrast -y

Use one of the urls from "lando start" command. Username and password for the site are both "admin".

# Xdebug

When using Lando, you can easily enable/disable Xdebug by using these commands:
 - lando xdebug-on
 - lando xdebug-off

# Coding standards

We've added static code analyzer https://github.com/wunderio/code-quality tool
to this project. To execute it, run this in bash:

    lando grumphp run
