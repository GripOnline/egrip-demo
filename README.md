# e-Grip

This is a demo implementation project of the e-Grip content management system built and used by [Grip Online](https://www.grip.nl/).
It is a minimal e-Grip 4 site: the platform itself (framework, modules, schemas and a default style) is installed
with Composer, the project only contains the front controllers, the configuration template and the Composer setup.

# Requirements

* Apache with `mod_rewrite` (the `html/.htaccess` rewrites all requests for non-existing files to `html/index.php`),
  or Nginx with an equivalent rewrite rule
* PHP
* [Composer](https://getcomposer.org/)
* MySQL (or compatible)

# Installing

Clone the repository, or download and extract the [latest zip file](https://github.com/GripOnline/egrip-demo/archive/refs/heads/main.zip):

```
git clone https://github.com/GripOnline/egrip-demo.git
```

Run Composer from the project root folder to install all dependencies. The packages come from the Grip Composer
channel (`https://composer.hosting.grip.nl/`), which is already configured in `composer.json`. There is no
`composer.lock` in the repository, so use `update`:

```
composer update
```

Notes:

* Composer plugins must be allowed to run: `grip/egrip-plugin-installer-plugin` installs the e-Grip plugins in
  `plugins/` and registers them in `plugins.lock`. Composer disables plugins when it runs as root without
  confirmation, so run it as a normal user (the user that owns the project files).
* `vendor/`, `plugins/`, `plugins.lock`, `composer.lock`, `vwm_config.xml`, `data/`, `cache/` and `logs/` are
  generated or environment specific and are ignored by git.

# Configuration

* Create an empty database and a database user with read+write+create privileges on that database.
* Create a vhost that points to the `html` directory.
* Make sure the web server can write to the project root (to create `vwm_config.xml`) and to the `data/`, `cache/`
  and `logs/` directories.
* Open http://yoursite/ in your browser.

You will be redirected to a page where you can enter the database connection details. If valid credentials were
entered they will be stored in `vwm_config.xml` in the `database` parameter and all initial database queries will be
executed. Next, you can create the first admin user and you will be logged in into the back-end.

`vwm_config.xml.dist` shows the structure of `vwm_config.xml`, including an example of environment specific
parameters. Never commit `vwm_config.xml`: it contains the database credentials.

# Further steps

Once logged in into the back-end (`/vwm/`), you can create a website, publish content on it and see what it looks like.

# Updating

```
composer update
```

After an update, open the schema manager at `/vwm/schemaManager/` to see and apply the database updates of the
updated packages.

# Command line

Console commands run through the same framework:

```
php script/run.php <MODULE>:<Command>
```

# Documentation

The generic e-Grip 4 documentation ([GripOnline/egrip-docs](https://github.com/GripOnline/egrip-docs)) is a
`require-dev` dependency of this project. After `composer update` it is available in `vendor/grip/egrip-docs/docs/`.
Start with the developer's guide (`developers-guide.md`), which explains the application framework, plugins and
events, the CMS engine and how to build custom functionality.
