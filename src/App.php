<?php	

	use Silex\Provider\DoctrineServiceProvider;
	
	/**
	 * Register doctrine
	 */
	$app->register(new DoctrineServiceProvider(), array(
  		"db.options" => $app["db.options"]
	));
	
	
	$app->get('/', function() use ($app, $dbh){		
		$result = $app['db']->fetchAll('SELECT * FROM links');		
    	return $app->json($result);		
	});
	
	$app->run();
	 
	
	