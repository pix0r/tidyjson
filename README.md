TidyJSON
--------

A simple class for cleaning up poorly formatted JSON strings. No validation is performed; if you pass in bogus data, you will get bogus output.

Usage:
	<?php

	require 'tidyjson.php';

	$json = '{"foo":"bar","baz":[1,2,5]}';
	$tidy = TidyJSON::tidy($json);

	?>
