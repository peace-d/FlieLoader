# FlieLoader codeigniter library
This is a codeigniter js and css file loader. Helps you load your javascript and css files quickly and easly from your controller. Comes very handy when your pages use different css and js files.

# How to use?
* Download and drop the the FilerLoader class in your 'application/libraries/' folder.
* Load the FileLoader class via auto load or in your controller by simply writting $this->load->library('FileLoader')
* On your views where you want to load your js or css add this the following code 
<?php $this->fileloader->loadCSS(); // for loading css ?>
<?php $this->fileloader->loadJS(); // for loading js ?>
