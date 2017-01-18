<?php	
	require 'vendor/autoload.php';
	
	$app = new Silex\Application();
	
	/**
	 * Test using MySQL database
	 */
	$dsn = 'mysql:dbname=linkable;host=127.0.0.1;charset=utf8';
	
	try {
    	$dbh = new PDO($dsn, 'root', 'master');
	} catch (PDOException $e) {
    	echo 'Connection failed: ' . $e->getMessage();
	}
	
	$app->get('/', function() use ($app, $dbh){
		
		$sth = $dbh->prepare('SELECT id, url, shortened FROM links');
    	$sth->execute();
    	$livros = $sth->fetchAll(PDO::FETCH_ASSOC);
 
    	return $app->json($livros);		
	});
	
	$app->run();
	 
	
	