Argil: Potter's clay for the web
================================

Argil is a small micro framework that makes deploying applications using
PHP 5.3 extremely simple and straight forward.


Requirements
------------
* PHP 5.3

Documentation
-------------
''TODO''

Tasks
-----
Want to help?  Here's a list of tasks that not completed, feel free to pick
one and contribute.  Please send a Pull Request for anything that's been
completed.

### Create narrative documentation
Self explanatory.  Feel free to contribute.

### Create API documentation
Self explanatory.  Feel free to document away.

### Create CachedRouter to speed up route matching
Routing currently checks all provided routes in order to figure out which
route callback can respond.  This can be remedied by adding a CachedRouter
to "cache" the lookup by hashing the "verb uri" against known matches.  Not
sure how useful this would be, but feel free to implement it.

