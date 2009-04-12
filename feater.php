<?php
/*******************************************************************
feater.php
head(string) - prints the header to the page
foot() - prints the footer to the page
********************************************************************/
require ("priviledge.php");

function make_page ($title, $body)
{
  echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"';
  echo '"http://www.w3.org/TR/html4/strict.dtd">';
  echo '<html>';
  echo '';
  echo '<head>';
  echo '<meta name="author" content="root"/>';
  echo '<meta name="author" content="root"/>';
  echo '<meta name="author" content="root"/>';
  echo '<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />';
  echo '<title>RPI Project Hosting | ';
  echo $title;
  echo '</title>';
  echo '</head>';
  echo '';
  echo '<body background="images/background.jpg">';
  
  require ("menu.php");
  
  echo $body;
  echo '</body>';
  echo '';
  echo '</html>';
}

// adds a header to the page
function head ($title)
{
	echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"';
	echo '"http://www.w3.org/TR/html4/strict.dtd">';
	echo '<html>';
	echo '';
	echo '<head>';
	echo '<meta name="author" content="root"/>';
	echo '<meta name="author" content="root"/>';
	echo '<meta name="author" content="root"/>';
	echo '<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />';
	echo '<title>RPI Project Hosting | ';
	echo $title;
	echo '</title>';
	echo '</head>';
	echo '';
	echo '<body background="images/background.jpg">';

   require ("menu.php");
}

// adds a footer to the page
function foot ()
{
	echo '</body>';
	echo '';
	echo '</html>';
}



?>
