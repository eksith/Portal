<?php

# TODO

define( 'PKGS',			PATH . 'vendor/' );

# Use the |PATH| placeholder if the relevant folder/resource 
# is relative to this config file. It's recommended that the databases 
# and upload directories be placed outside the web root
define( 'CONFIG',		PATH . 'data/blog.conf' );

\set_include_path( \get_include_path() . PATH_SEPARATOR . PKGS );
\spl_autoload_extensions( '.php' );
\spl_autoload_register( function( $class ) {
	\spl_autoload( str_replace( "\\", "/", $class ) );
});
