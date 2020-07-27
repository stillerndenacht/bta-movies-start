
RedirectPermanent /bta-movies-start http://bta-movies-start.loc

<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule  ^login$ index.php?controller=user&action=login
    RewriteRule  ^login/check$ index.php?controller=user&action=check
    RewriteRule  ^logout$ index.php?controller=user&action=logout
    RewriteRule  ^(authors|movies)/(edit|store|delete)/([0-9]+)$ index.php?controller=$1&action=$2&id=$3
    RewriteRule  ^(authors|movies)/(edit|store)$ index.php?controller=$1&action=$2&id
    RewriteRule  ^(authors|movies)/([0-9]+)$ index.php?controller=$1&action=show&id=$2
    RewriteRule  ^(authors|movies)$ index.php?controller=$1&action=index
    #RewriteRule  ^(.*)$ index.php
</IfModule>