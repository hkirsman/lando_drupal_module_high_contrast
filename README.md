# Installation

This is Lando setup for the Drupal 8 High Contrast module https://www.drupal.org/project/high_contrast
It's meant mainly for developers to get started fast. In short you need Lando
https://docs.devwithlando.io/installation/installing.html and follow these steps in bash:

    git clone git@github.com:hkirsman/d7_high_contrast.git
    cd d7_high_contrast
    lando composer install
    lando start
    lando drush site-install --account-name=admin --account-pass=admin -y

Use one of the urls from "lando start" command. Username and password for the site are both "admin".
