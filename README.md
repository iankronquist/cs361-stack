CS 361 Stack
============

I tore up @darkengine-io's testapp to add mysql support.

Don't forget to do this:
```
$ git submodule init
$ find . -exec gsed -i  's/testdb/project_b/g' {} \;
$ find . -exec gsed -i  's/localhost/mysql/g' {} \;

```
