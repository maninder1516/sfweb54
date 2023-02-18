
Symfony 5 Application
========================

This is a reference application created to start with Symfony 5 applications.

Requirements
------------

  * PHP 7.2.5 or higher;
  * Symfony application requirements.
  * Composer 2. 
  * Node. 
  * NPM/YARN. 

Installation
------------

Downloaded the code from the repository. To install the composer dependencies, run this command:

```bash
$ composer install
```

Now, install the required node libraries with NPM or Yarn and wath or build the app to compile the assets:

```bash
$ npm install
$ npm run watch
$ npm run dev(cpomile assets once)
```

Usage
-----

There's no need to configure anything to run the application. If you have
installed the [Symfony client] binary, run this command to run the built-in
web server and access the application in your browser at <http://localhost:8000>:

```bash
$ cd sfweb54/
$ symfony serve
```

If you don't have the Symfony client installed, run `php bin/console server:run`.
Alternatively, you can [configure a web server][3] like Nginx or Apache to run
the application.