<?php

define( 'PATH',		\realpath( \dirname( __FILE__ ) ) . '/' );

# Ideally, script files should be placed outside the web root
require( 'shims.php' );
require( 'vendor/Portal/bootstrap.php' );
