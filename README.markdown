# SimplePie

A simple Atom/RSS parsing library for PHP.

This is the legacy 1.2.x version with legacy PHP 5 support.

PHP Version: 5.2.x

## Upgrading SimplePie 1.2.x to PHP 5

* Check if you still use `SIMPLEPIE_PHP5` constant (bool) in your code, you might want to
  remove / change that code. This constant is not defined any longer by this package, you
  can replace it with PHP's `true` constant.

## Authors and contributors

### Current
* [Ryan McCue](http://ryanmccue.info) (Maintainer, support)
* [hakre](http://hakre.wordpress.com) (Branch Maintainer, integration)

### Alumni
* [Ryan Parman](http://ryanparman.com) (Creator, developer, evangelism, support)
* [Geoffrey Sneddon](http://gsnedders.com) (Lead developer)
* [Michael Shipley](http://michaelpshipley.com) (Submitter of patches, support)
* [Steve Minutillo](http://minutillo.com/steve/) (Submitter of patches)

### Contributors
For a complete list of contributors:

1. Pull down the latest SimplePie code
2. In the `simplepie` directory, run `git shortlog -ns`


## License

[BSD-3-Clause](http://spdx.org/licenses/BSD-3-Clause), see LICENSE.txt

Parts of this software are licensed under different licenses:

 * For idn: [LGPL-2.1+](http://spdx.org/licenses/LGPL-2.1+)
 * For test: ([Zlib](http://spdx.org/licenses/Zlib) or [LGPL-2.1+](http://spdx.org/licenses/LGPL-2.1+))
 * For IPv6: [BSD-2-Clause](http://spdx.org/licenses/BSD-2-Clause)


## Project status

SimplePie is currently maintained by Ryan McCue.

This branch of SimplePie has been initialized for legacy support and WordPress integration.

If you're interested in getting involved with SimplePie, please get in touch with Ryan McCue.

## What comes in the package?

1. `simplepie.inc` - The SimplePie library.  This is all that's required for your pages.
2. `README.markdown` - This document.
3. `LICENSE.txt` - A copy of the BSD license.
4. `compatibility_test/` - The SimplePie compatibility test that checks your server for required settings.
5. `demo/` - A basic feed reader demo that shows off some of SimplePie's more noticeable features.
6. `idn/` - A third-party library that SimplePie can optionally use to understand Internationalized Domain Names (IDNs).
7. `test/` - SimplePie's unit test suite.


## To start the demo

1. Upload this package to your webserver.
2. Make sure that the cache folder inside of the demo folder is server-writable.
3. Navigate your browser to the demo folder.


## Need support?

For further setup and install documentation, function references, etc., visit:
[http://simplepie.org/wiki/](http://simplepie.org/wiki/)

For bug reports and feature requests, visit:
[http://github.com/simplepie/simplepie/issues](http://github.com/simplepie/simplepie/issues)

Support mailing list -- powered by users, for users.
[http://tech.groups.yahoo.com/group/simplepie-support/](http://tech.groups.yahoo.com/group/simplepie-support/)


## Development Information

* Indent: 4; Tab size: 4; Use: Tabs

