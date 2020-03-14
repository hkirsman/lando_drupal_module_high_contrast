# Installation

This is Lando setup for the Drupal 8 High Contrast module
https://www.drupal.org/project/high_contrast. It's meant mainly for developers
to get started fast. In short you need Lando
https://docs.lando.dev/basics/installation.html and follow these steps in bash:

    git clone git@github.com:hkirsman/lando_drupal_module_high_contrast.git
    cd lando_drupal_module_high_contrast
    lando start
    lando composer install
    lando drush si minimal --existing-config --account-name=admin --account-pass=admin -y
    lando drush uli

Use one of the urls from "lando start" command. Username and password for the site are both "admin".
