What is StatusPanic?
====================
StatusPanic is a simple PHP system for creating a way to make a [Panic](http://panic.com)-style [Status Board](http://www.panic.com/blog/2010/03/the-panic-status-board/) with as little effort as possible. Branched from the [original project](https://github.com/allynbauer/statuspanic), I've added twitter, rss, and github modules, as well as updated the css to slightly more modern practices.

Configuration
====================
Configuring StatusPanic is basically the first and last step of getting it running. Options are specified in [JSON](http://en.wikipedia.org/wiki/JSON) in config.json. There's a default-config.json file that gives some idea of how this should be set up. Args can be provided to a module via a GET request by adding them to an ARGS array.

An 'update' of 0 indicates that module doesn't require updates, and thus whatever is loaded the first time is what remains.

How It Works
====================
The modules are loaded on the initial page load. From there, Ajax is used to update each module every x seconds, where x is specified in config.json for each module. You could have some modules refresh every minute and others refresh every week.

To-dos
====================
+ change up how modules are stored to better allow for external libraries
+ continue updating the css