<?php
/**
 *  database login details
 */
define("HOST", "localhost"); 			// The host you want to connect to. 
define("USER", "registromus"); 			// The database username. 
define("PASSWORD", "museros23"); 	// The database password. 
define("DATABASE", "registromus");             // The database name.

/**
 * Who can register and what the default role will be
 * Values for who can register under a standard setup can be:
 *      any  == anybody can register (default)
 *      adminpenya == members must be registered by adminpenya 
 *      root  == only the root user can register members
 */
define("GLOBAL_ADMIN", "adminglobal");
define("PENYA_ADMIN", "adminpenya");
define("DEFAULT_ROLE", "member");

define("SECURE", FALSE);    // For development purposes only!!!!

define("TABLA_USUARIOS", "members");
define("TABLA_PENYAS", "penyas");
define("TABLA_PARTIDAS", "partidas");
define("TABLA_RESULTADOS", "resultados");
define("TABLA_JUGADORES", "jugador");
define("TABLA_TRY", "login_attempts");