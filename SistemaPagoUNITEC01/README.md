SistemaPagoUNITEC
=================

Proyecto de Aplicaciones Empresariales por el profesor Bassam Asfur en la Universidad Tecnológica del Centro.

This project is entirely made in [Jade](https://github.com/visionmedia/jade), using [Bootstrap CSS](http://twitter.github.com/bootstrap/)

#How to run it?
* * *

You need to install npm and Jade. Here are the instructions:

First, clone the repo to your pc:

```bash
$ git clone https://github.com/Rogergonzalez21/SistemaPagoUNITEC.git
```

Execute this into a terminal to install npm:
```bash
$ sudo apt-get install npm
```

After installing npm, you must install jade:
```bash
$ npm install -g jade
```

To compile a .jade archive into html, just type into a terminal:
```bash
cd SistemaPagoUNITEC/sources
$ jade *.jade -O ../
```
This will compile every .jade into html inside SistemaPagoUNITEC/sources folder to the SistemaPagoUNITEC folder.

And that's it.