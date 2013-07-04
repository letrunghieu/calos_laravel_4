<?php
/**
 * An helper file for Laravel 4, to provide autocomplete information to your IDE
 * Generated with https://github.com/barryvdh/laravel-ide-helper
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */
exit('Only to be used as an helper for your IDE');

class App extends Illuminate\Support\Facades\App{
	/**
	 * Create a new Illuminate application instance.
	 *
	 * @param \Illuminate\Http\Request  $request
	 * @return self 
	 * @static 
	 */
	 public static function __construct($request = null){
		$root = new \Illuminate\Foundation\Application();
		$root->__construct($request);
	 }

	/**
	 * Set the application request for the console environment.
	 *
	 * @return void
	 * @static 
	 */
	 public static function setRequestForConsoleEnvironment(){
		$root = new \Illuminate\Foundation\Application();
		$root->setRequestForConsoleEnvironment();
	 }

	/**
	 * Redirect the request if it has a trailing slash.
	 *
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse|null
	 * @static 
	 */
	 public static function redirectIfTrailingSlash(){
		$root = new \Illuminate\Foundation\Application();
		return $root->redirectIfTrailingSlash();
	 }

	/**
	 * Bind the installation paths to the application.
	 *
	 * @param array  $paths
	 * @return void
	 * @static 
	 */
	 public static function bindInstallPaths($paths){
		$root = new \Illuminate\Foundation\Application();
		$root->bindInstallPaths($paths);
	 }

	/**
	 * Get the application bootstrap file.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getBootstrapFile(){
		$root = new \Illuminate\Foundation\Application();
		return $root->getBootstrapFile();
	 }

	/**
	 * Start the exception handling for the request.
	 *
	 * @return void
	 * @static 
	 */
	 public static function startExceptionHandling(){
		$root = new \Illuminate\Foundation\Application();
		$root->startExceptionHandling();
	 }

	/**
	 * Get the current application environment.
	 *
	 * @return string
	 * @static 
	 */
	 public static function environment(){
		$root = new \Illuminate\Foundation\Application();
		return $root->environment();
	 }

	/**
	 * Detect the application's current environment.
	 *
	 * @param array|string  $environments
	 * @return string
	 * @static 
	 */
	 public static function detectEnvironment($environments){
		$root = new \Illuminate\Foundation\Application();
		return $root->detectEnvironment($environments);
	 }

	/**
	 * Determine if we are running in the console.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function runningInConsole(){
		$root = new \Illuminate\Foundation\Application();
		return $root->runningInConsole();
	 }

	/**
	 * Determine if we are running unit tests.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function runningUnitTests(){
		$root = new \Illuminate\Foundation\Application();
		return $root->runningUnitTests();
	 }

	/**
	 * Register a service provider with the application.
	 *
	 * @param \Illuminate\Support\ServiceProvider|string  $provider
	 * @param array  $options
	 * @return void
	 * @static 
	 */
	 public static function register($provider, $options = array()){
		$root = new \Illuminate\Foundation\Application();
		$root->register($provider, $options);
	 }

	/**
	 * Load and boot all of the remaining deferred providers.
	 *
	 * @return void
	 * @static 
	 */
	 public static function loadDeferredProviders(){
		$root = new \Illuminate\Foundation\Application();
		$root->loadDeferredProviders();
	 }

	/**
	 * Resolve the given type from the container.
	 * 
	 * (Overriding Container::make)
	 *
	 * @param string  $abstract
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function make($abstract, $parameters = array()){
		$root = new \Illuminate\Foundation\Application();
		return $root->make($abstract, $parameters);
	 }

	/**
	 * Register a "before" application filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function before($callback){
		$root = new \Illuminate\Foundation\Application();
		$root->before($callback);
	 }

	/**
	 * Register an "after" application filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function after($callback){
		$root = new \Illuminate\Foundation\Application();
		$root->after($callback);
	 }

	/**
	 * Register a "close" application filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function close($callback){
		$root = new \Illuminate\Foundation\Application();
		$root->close($callback);
	 }

	/**
	 * Register a "finish" application filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function finish($callback){
		$root = new \Illuminate\Foundation\Application();
		$root->finish($callback);
	 }

	/**
	 * Register a "shutdown" callback.
	 *
	 * @param callable  $callback
	 * @return void
	 * @static 
	 */
	 public static function shutdown($callback = null){
		$root = new \Illuminate\Foundation\Application();
		$root->shutdown($callback);
	 }

	/**
	 * Handles the given request and delivers the response.
	 *
	 * @return void
	 * @static 
	 */
	 public static function run(){
		$root = new \Illuminate\Foundation\Application();
		$root->run();
	 }

	/**
	 * Handle the given request and get the response.
	 *
	 * @param \Illuminate\Http\Request  $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @static 
	 */
	 public static function dispatch($request){
		$root = new \Illuminate\Foundation\Application();
		return $root->dispatch($request);
	 }

	/**
	 * Handle the given request and get the response.
	 * 
	 * Provides compatibility with BrowserKit functional testing.
	 *
	 * @implements HttpKernelInterface::handle
	 * @param \Illuminate\Http\Request  $request
	 * @param int   $type
	 * @param bool  $catch
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @static 
	 */
	 public static function handle($request, $type = 1, $catch = true){
		$root = new \Illuminate\Foundation\Application();
		return $root->handle($request, $type, $catch);
	 }

	/**
	 * Boot the application's service providers.
	 *
	 * @return void
	 * @static 
	 */
	 public static function boot(){
		$root = new \Illuminate\Foundation\Application();
		$root->boot();
	 }

	/**
	 * Register a new boot listener.
	 *
	 * @param mixed  $callback
	 * @return void
	 * @static 
	 */
	 public static function booting($callback){
		$root = new \Illuminate\Foundation\Application();
		$root->booting($callback);
	 }

	/**
	 * Register a new "booted" listener.
	 *
	 * @param mixed  $callback
	 * @return void
	 * @static 
	 */
	 public static function booted($callback){
		$root = new \Illuminate\Foundation\Application();
		$root->booted($callback);
	 }

	/**
	 * Prepare the request by injecting any services.
	 *
	 * @param \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Request
	 * @static 
	 */
	 public static function prepareRequest($request){
		$root = new \Illuminate\Foundation\Application();
		return $root->prepareRequest($request);
	 }

	/**
	 * Prepare the given value as a Response object.
	 *
	 * @param mixed  $value
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @static 
	 */
	 public static function prepareResponse($value){
		$root = new \Illuminate\Foundation\Application();
		return $root->prepareResponse($value);
	 }

	/**
	 * Determine if the application is currently down for maintenance.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function isDownForMaintenance(){
		$root = new \Illuminate\Foundation\Application();
		return $root->isDownForMaintenance();
	 }

	/**
	 * Register a maintenance mode event listener.
	 *
	 * @param \Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function down($callback){
		$root = new \Illuminate\Foundation\Application();
		$root->down($callback);
	 }

	/**
	 * Throw an HttpException with the given data.
	 *
	 * @param int     $code
	 * @param string  $message
	 * @param array   $headers
	 * @return void
	 * @static 
	 */
	 public static function abort($code, $message = '', $headers = array()){
		$root = new \Illuminate\Foundation\Application();
		$root->abort($code, $message, $headers);
	 }

	/**
	 * Register a 404 error handler.
	 *
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function missing($callback){
		$root = new \Illuminate\Foundation\Application();
		$root->missing($callback);
	 }

	/**
	 * Register an application error handler.
	 *
	 * @param \Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function error($callback){
		$root = new \Illuminate\Foundation\Application();
		$root->error($callback);
	 }

	/**
	 * Register an error handler at the bottom of the stack.
	 *
	 * @param \Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function pushError($callback){
		$root = new \Illuminate\Foundation\Application();
		$root->pushError($callback);
	 }

	/**
	 * Register an error handler for fatal errors.
	 *
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function fatal($callback){
		$root = new \Illuminate\Foundation\Application();
		$root->fatal($callback);
	 }

	/**
	 * Get the configuration loader instance.
	 *
	 * @return \Illuminate\Config\LoaderInterface
	 * @static 
	 */
	 public static function getConfigLoader(){
		$root = new \Illuminate\Foundation\Application();
		return $root->getConfigLoader();
	 }

	/**
	 * Get the service provider repository instance.
	 *
	 * @return \Illuminate\Foundation\ProviderRepository
	 * @static 
	 */
	 public static function getProviderRepository(){
		$root = new \Illuminate\Foundation\Application();
		return $root->getProviderRepository();
	 }

	/**
	 * Set the current application locale.
	 *
	 * @param string  $locale
	 * @return void
	 * @static 
	 */
	 public static function setLocale($locale){
		$root = new \Illuminate\Foundation\Application();
		$root->setLocale($locale);
	 }

	/**
	 * Get the service providers that have been loaded.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getLoadedProviders(){
		$root = new \Illuminate\Foundation\Application();
		return $root->getLoadedProviders();
	 }

	/**
	 * Set the application's deferred services.
	 *
	 * @param array  $services
	 * @return void
	 * @static 
	 */
	 public static function setDeferredServices($services){
		$root = new \Illuminate\Foundation\Application();
		$root->setDeferredServices($services);
	 }

	/**
	 * Dynamically access application services.
	 *
	 * @param string  $key
	 * @return mixed
	 * @static 
	 */
	 public static function __get($key){
		$root = new \Illuminate\Foundation\Application();
		return $root->__get($key);
	 }

	/**
	 * Dynamically set application services.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function __set($key, $value){
		$root = new \Illuminate\Foundation\Application();
		$root->__set($key, $value);
	 }

	/**
	 * Determine if the given abstract type has been bound.
	 *
	 * @param string  $abstract
	 * @return bool
	 * @static 
	 */
	 public static function bound($abstract){
		$root = new \Illuminate\Container\Container();
		return $root->bound($abstract);
	 }

	/**
	 * Register a binding with the container.
	 *
	 * @param string               $abstract
	 * @param Closure|string|null  $concrete
	 * @param bool                 $shared
	 * @return void
	 * @static 
	 */
	 public static function bind($abstract, $concrete = null, $shared = false){
		$root = new \Illuminate\Container\Container();
		$root->bind($abstract, $concrete, $shared);
	 }

	/**
	 * Register a binding if it hasn't already been registered.
	 *
	 * @param string               $abstract
	 * @param Closure|string|null  $concrete
	 * @param bool                 $shared
	 * @return bool
	 * @static 
	 */
	 public static function bindIf($abstract, $concrete = null, $shared = false){
		$root = new \Illuminate\Container\Container();
		return $root->bindIf($abstract, $concrete, $shared);
	 }

	/**
	 * Register a shared binding in the container.
	 *
	 * @param string               $abstract
	 * @param Closure|string|null  $concrete
	 * @return void
	 * @static 
	 */
	 public static function singleton($abstract, $concrete = null){
		$root = new \Illuminate\Container\Container();
		$root->singleton($abstract, $concrete);
	 }

	/**
	 * Wrap a Closure such that it is shared.
	 *
	 * @param Closure  $closure
	 * @return Closure
	 * @static 
	 */
	 public static function share($closure){
		$root = new \Illuminate\Container\Container();
		return $root->share($closure);
	 }

	/**
	 * "Extend" an abstract type in the container.
	 *
	 * @param string   $abstract
	 * @param Closure  $closure
	 * @return void
	 * @static 
	 */
	 public static function extend($abstract, $closure){
		$root = new \Illuminate\Container\Container();
		$root->extend($abstract, $closure);
	 }

	/**
	 * Register an existing instance as shared in the container.
	 *
	 * @param string  $abstract
	 * @param mixed   $instance
	 * @return void
	 * @static 
	 */
	 public static function instance($abstract, $instance){
		$root = new \Illuminate\Container\Container();
		$root->instance($abstract, $instance);
	 }

	/**
	 * Alias a type to a shorter name.
	 *
	 * @param string  $abstract
	 * @param string  $alias
	 * @return void
	 * @static 
	 */
	 public static function alias($abstract, $alias){
		$root = new \Illuminate\Container\Container();
		$root->alias($abstract, $alias);
	 }

	/**
	 * Instantiate a concrete instance of the given type.
	 *
	 * @param string  $concrete
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function build($concrete, $parameters = array()){
		$root = new \Illuminate\Container\Container();
		return $root->build($concrete, $parameters);
	 }

	/**
	 * Register a new resolving callback.
	 *
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function resolving($callback){
		$root = new \Illuminate\Container\Container();
		$root->resolving($callback);
	 }

	/**
	 * Get the container's bindings.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getBindings(){
		$root = new \Illuminate\Container\Container();
		return $root->getBindings();
	 }

	/**
	 * Determine if a given offset exists.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function offsetExists($key){
		$root = new \Illuminate\Container\Container();
		return $root->offsetExists($key);
	 }

	/**
	 * Get the value at a given offset.
	 *
	 * @param string  $key
	 * @return mixed
	 * @static 
	 */
	 public static function offsetGet($key){
		$root = new \Illuminate\Container\Container();
		return $root->offsetGet($key);
	 }

	/**
	 * Set the value at a given offset.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function offsetSet($key, $value){
		$root = new \Illuminate\Container\Container();
		$root->offsetSet($key, $value);
	 }

	/**
	 * Unset the value at a given offset.
	 *
	 * @param string  $key
	 * @return void
	 * @static 
	 */
	 public static function offsetUnset($key){
		$root = new \Illuminate\Container\Container();
		$root->offsetUnset($key);
	 }

}

class Artisan extends Illuminate\Support\Facades\Artisan{
	/**
	 * Start a new Console application.
	 *
	 * @param \Illuminate\Foundation\Application  $app
	 * @return \Illuminate\Console\Application
	 * @static 
	 */
	 public static function start($app){
		$root = new \Illuminate\Console\Application();
		return $root->start($app);
	 }

	/**
	 * Add a command to the console.
	 *
	 * @param \Symfony\Component\Console\Command\Command  $command
	 * @return \Symfony\Component\Console\Command\Command
	 * @static 
	 */
	 public static function add($command){
		$root = new \Illuminate\Console\Application();
		return $root->add($command);
	 }

	/**
	 * Add a command, resolving through the application.
	 *
	 * @param string  $command
	 * @return void
	 * @static 
	 */
	 public static function resolve($command){
		$root = new \Illuminate\Console\Application();
		$root->resolve($command);
	 }

	/**
	 * Resolve an array of commands through the application.
	 *
	 * @param array|dynamic  $commands
	 * @return void
	 * @static 
	 */
	 public static function resolveCommands($commands){
		$root = new \Illuminate\Console\Application();
		$root->resolveCommands($commands);
	 }

	/**
	 * Render the given exception.
	 *
	 * @param Exception  $e
	 * @param \Symfony\Component\Console\Output\OutputInterface  $output
	 * @return void
	 * @static 
	 */
	 public static function renderException($e, $output){
		$root = new \Illuminate\Console\Application();
		$root->renderException($e, $output);
	 }

	/**
	 * Set the exception handler instance.
	 *
	 * @param \Illuminate\Exception\Handler  $handler
	 * @return void
	 * @static 
	 */
	 public static function setExceptionHandler($handler){
		$root = new \Illuminate\Console\Application();
		$root->setExceptionHandler($handler);
	 }

	/**
	 * Set the Laravel application instance.
	 *
	 * @param \Illuminate\Foundation\Application  $laravel
	 * @return void
	 * @static 
	 */
	 public static function setLaravel($laravel){
		$root = new \Illuminate\Console\Application();
		$root->setLaravel($laravel);
	 }

	/**
	 * Constructor.
	 *
	 * @param string $name    The name of the application
	 * @param string $version The version of the application
	 * @api 
	 * @static 
	 */
	 public static function __construct($name = 'UNKNOWN', $version = 'UNKNOWN'){
		$root = new \Symfony\Component\Console\Application();
		$root->__construct($name, $version);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setDispatcher($dispatcher){
		$root = new \Symfony\Component\Console\Application();
		$root->setDispatcher($dispatcher);
	 }

	/**
	 * Runs the current application.
	 *
	 * @param InputInterface  $input  An Input instance
	 * @param OutputInterface $output An Output instance
	 * @return integer 0 if everything went fine, or an error code
	 * @throws \Exception When doRun returns Exception
	 * @api 
	 * @static 
	 */
	 public static function run($input = null, $output = null){
		$root = new \Symfony\Component\Console\Application();
		return $root->run($input, $output);
	 }

	/**
	 * Runs the current application.
	 *
	 * @param InputInterface  $input  An Input instance
	 * @param OutputInterface $output An Output instance
	 * @return integer 0 if everything went fine, or an error code
	 * @static 
	 */
	 public static function doRun($input, $output){
		$root = new \Symfony\Component\Console\Application();
		return $root->doRun($input, $output);
	 }

	/**
	 * Set a helper set to be used with the command.
	 *
	 * @param HelperSet $helperSet The helper set
	 * @api 
	 * @static 
	 */
	 public static function setHelperSet($helperSet){
		$root = new \Symfony\Component\Console\Application();
		$root->setHelperSet($helperSet);
	 }

	/**
	 * Get the helper set associated with the command.
	 *
	 * @return HelperSet The HelperSet instance associated with this command
	 * @api 
	 * @static 
	 */
	 public static function getHelperSet(){
		$root = new \Symfony\Component\Console\Application();
		return $root->getHelperSet();
	 }

	/**
	 * Set an input definition set to be used with this application
	 *
	 * @param InputDefinition $definition The input definition
	 * @api 
	 * @static 
	 */
	 public static function setDefinition($definition){
		$root = new \Symfony\Component\Console\Application();
		$root->setDefinition($definition);
	 }

	/**
	 * Gets the InputDefinition related to this Application.
	 *
	 * @return InputDefinition The InputDefinition instance
	 * @static 
	 */
	 public static function getDefinition(){
		$root = new \Symfony\Component\Console\Application();
		return $root->getDefinition();
	 }

	/**
	 * Gets the help message.
	 *
	 * @return string A help message.
	 * @static 
	 */
	 public static function getHelp(){
		$root = new \Symfony\Component\Console\Application();
		return $root->getHelp();
	 }

	/**
	 * Sets whether to catch exceptions or not during commands execution.
	 *
	 * @param Boolean $boolean Whether to catch exceptions or not during commands execution
	 * @api 
	 * @static 
	 */
	 public static function setCatchExceptions($boolean){
		$root = new \Symfony\Component\Console\Application();
		$root->setCatchExceptions($boolean);
	 }

	/**
	 * Sets whether to automatically exit after a command execution or not.
	 *
	 * @param Boolean $boolean Whether to automatically exit after a command execution or not
	 * @api 
	 * @static 
	 */
	 public static function setAutoExit($boolean){
		$root = new \Symfony\Component\Console\Application();
		$root->setAutoExit($boolean);
	 }

	/**
	 * Gets the name of the application.
	 *
	 * @return string The application name
	 * @api 
	 * @static 
	 */
	 public static function getName(){
		$root = new \Symfony\Component\Console\Application();
		return $root->getName();
	 }

	/**
	 * Sets the application name.
	 *
	 * @param string $name The application name
	 * @api 
	 * @static 
	 */
	 public static function setName($name){
		$root = new \Symfony\Component\Console\Application();
		$root->setName($name);
	 }

	/**
	 * Gets the application version.
	 *
	 * @return string The application version
	 * @api 
	 * @static 
	 */
	 public static function getVersion(){
		$root = new \Symfony\Component\Console\Application();
		return $root->getVersion();
	 }

	/**
	 * Sets the application version.
	 *
	 * @param string $version The application version
	 * @api 
	 * @static 
	 */
	 public static function setVersion($version){
		$root = new \Symfony\Component\Console\Application();
		$root->setVersion($version);
	 }

	/**
	 * Returns the long version of the application.
	 *
	 * @return string The long application version
	 * @api 
	 * @static 
	 */
	 public static function getLongVersion(){
		$root = new \Symfony\Component\Console\Application();
		return $root->getLongVersion();
	 }

	/**
	 * Registers a new command.
	 *
	 * @param string $name The command name
	 * @return Command The newly created command
	 * @api 
	 * @static 
	 */
	 public static function register($name){
		$root = new \Symfony\Component\Console\Application();
		return $root->register($name);
	 }

	/**
	 * Adds an array of command objects.
	 *
	 * @param Command[] $commands An array of commands
	 * @api 
	 * @static 
	 */
	 public static function addCommands($commands){
		$root = new \Symfony\Component\Console\Application();
		$root->addCommands($commands);
	 }

	/**
	 * Returns a registered command by name or alias.
	 *
	 * @param string $name The command name or alias
	 * @return Command A Command object
	 * @throws \InvalidArgumentException When command name given does not exist
	 * @api 
	 * @static 
	 */
	 public static function get($name){
		$root = new \Symfony\Component\Console\Application();
		return $root->get($name);
	 }

	/**
	 * Returns true if the command exists, false otherwise.
	 *
	 * @param string $name The command name or alias
	 * @return Boolean true if the command exists, false otherwise
	 * @api 
	 * @static 
	 */
	 public static function has($name){
		$root = new \Symfony\Component\Console\Application();
		return $root->has($name);
	 }

	/**
	 * Returns an array of all unique namespaces used by currently registered commands.
	 * 
	 * It does not returns the global namespace which always exists.
	 *
	 * @return array An array of namespaces
	 * @static 
	 */
	 public static function getNamespaces(){
		$root = new \Symfony\Component\Console\Application();
		return $root->getNamespaces();
	 }

	/**
	 * Finds a registered namespace by a name or an abbreviation.
	 *
	 * @param string $namespace A namespace or abbreviation to search for
	 * @return string A registered namespace
	 * @throws \InvalidArgumentException When namespace is incorrect or ambiguous
	 * @static 
	 */
	 public static function findNamespace($namespace){
		$root = new \Symfony\Component\Console\Application();
		return $root->findNamespace($namespace);
	 }

	/**
	 * Finds a command by name or alias.
	 * 
	 * Contrary to get, this command tries to find the best
	 * match if you give it an abbreviation of a name or alias.
	 *
	 * @param string $name A command name or a command alias
	 * @return Command A Command instance
	 * @throws \InvalidArgumentException When command name is incorrect or ambiguous
	 * @api 
	 * @static 
	 */
	 public static function find($name){
		$root = new \Symfony\Component\Console\Application();
		return $root->find($name);
	 }

	/**
	 * Gets the commands (registered in the given namespace if provided).
	 * 
	 * The array keys are the full names and the values the command instances.
	 *
	 * @param string $namespace A namespace name
	 * @return Command[] An array of Command instances
	 * @api 
	 * @static 
	 */
	 public static function all($namespace = null){
		$root = new \Symfony\Component\Console\Application();
		return $root->all($namespace);
	 }

	/**
	 * Returns an array of possible abbreviations given a set of names.
	 *
	 * @param array $names An array of names
	 * @return array An array of abbreviations
	 * @static 
	 */
	 public static function getAbbreviations($names){
		$root = new \Symfony\Component\Console\Application();
		return $root->getAbbreviations($names);
	 }

	/**
	 * Returns a text representation of the Application.
	 *
	 * @param string  $namespace An optional namespace name
	 * @param boolean $raw       Whether to return raw command list
	 * @return string A string representing the Application
	 * @deprecated Deprecated since version 2.3, to be removed in 3.0.
	 * @static 
	 */
	 public static function asText($namespace = null, $raw = false){
		$root = new \Symfony\Component\Console\Application();
		return $root->asText($namespace, $raw);
	 }

	/**
	 * Returns an XML representation of the Application.
	 *
	 * @param string  $namespace An optional namespace name
	 * @param Boolean $asDom     Whether to return a DOM or an XML string
	 * @return string|\DOMDocument An XML string representing the Application
	 * @deprecated Deprecated since version 2.3, to be removed in 3.0.
	 * @static 
	 */
	 public static function asXml($namespace = null, $asDom = false){
		$root = new \Symfony\Component\Console\Application();
		return $root->asXml($namespace, $asDom);
	 }

	/**
	 * Tries to figure out the terminal dimensions based on the current environment
	 *
	 * @return array Array containing width and height
	 * @static 
	 */
	 public static function getTerminalDimensions(){
		$root = new \Symfony\Component\Console\Application();
		return $root->getTerminalDimensions();
	 }

	/**
	 * Returns the namespace part of the command name.
	 * 
	 * This method is not part of public API and should not be used directly.
	 *
	 * @param string $name  The full name of the command
	 * @param string $limit The maximum number of parts of the namespace
	 * @return string The namespace of the command
	 * @static 
	 */
	 public static function extractNamespace($name, $limit = null){
		$root = new \Symfony\Component\Console\Application();
		return $root->extractNamespace($name, $limit);
	 }

}

class Auth extends Illuminate\Support\Facades\Auth{
	/**
	 * Create an instance of the Eloquent driver.
	 *
	 * @return \Illuminate\Auth\Guard
	 * @static 
	 */
	 public static function createEloquentDriver(){
		$root = new \Illuminate\Auth\AuthManager(null);
		return $root->createEloquentDriver();
	 }

	/**
	 * Create a new manager instance.
	 *
	 * @param \Illuminate\Foundation\Application  $app
	 * @return self 
	 * @static 
	 */
	 public static function __construct($app){
		$root = new \Illuminate\Auth\AuthManager(null);
		$root->__construct($app);
	 }

	/**
	 * Get a driver instance.
	 *
	 * @param string  $driver
	 * @return mixed
	 * @static 
	 */
	 public static function driver($driver = null){
		$root = new \Illuminate\Auth\AuthManager(null);
		return $root->driver($driver);
	 }

	/**
	 * Register a custom driver creator Closure.
	 *
	 * @param string   $driver
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function extend($driver, $callback){
		$root = new \Illuminate\Auth\AuthManager(null);
		$root->extend($driver, $callback);
	 }

	/**
	 * Get all of the created "drivers".
	 *
	 * @return array
	 * @static 
	 */
	 public static function getDrivers(){
		$root = new \Illuminate\Auth\AuthManager(null);
		return $root->getDrivers();
	 }

	/**
	 * Dynamically call the default driver instance.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
		$root = new \Illuminate\Auth\AuthManager(null);
		return $root->__call($method, $parameters);
	 }

	/**
	 * Determine if the current user is authenticated.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function check(){
		$root = new \Illuminate\Auth\Guard(null,null);
		return $root->check();
	 }

	/**
	 * Determine if the current user is a guest.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function guest(){
		$root = new \Illuminate\Auth\Guard(null,null);
		return $root->guest();
	 }

	/**
	 * Get the currently authenticated user.
	 *
	 * @return \Illuminate\Auth\UserInterface|null
	 * @static 
	 */
	 public static function user(){
		$root = new \Illuminate\Auth\Guard(null,null);
		return $root->user();
	 }

	/**
	 * Log a user into the application without sessions or cookies.
	 *
	 * @param array  $credentials
	 * @return bool
	 * @static 
	 */
	 public static function once($credentials = array()){
		$root = new \Illuminate\Auth\Guard(null,null);
		return $root->once($credentials);
	 }

	/**
	 * Validate a user's credentials.
	 *
	 * @param array  $credentials
	 * @return bool
	 * @static 
	 */
	 public static function validate($credentials = array()){
		$root = new \Illuminate\Auth\Guard(null,null);
		return $root->validate($credentials);
	 }

	/**
	 * Attempt to authenticate using HTTP Basic Auth.
	 *
	 * @param string  $field
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @return \Symfony\Component\HttpFoundation\Response|null
	 * @static 
	 */
	 public static function basic($field = 'email', $request = null){
		$root = new \Illuminate\Auth\Guard(null,null);
		return $root->basic($field, $request);
	 }

	/**
	 * Perform a stateless HTTP Basic login attempt.
	 *
	 * @param string  $field
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @return \Symfony\Component\HttpFoundation\Response|null
	 * @static 
	 */
	 public static function onceBasic($field = 'email', $request = null){
		$root = new \Illuminate\Auth\Guard(null,null);
		return $root->onceBasic($field, $request);
	 }

	/**
	 * Attempt to authenticate a user using the given credentials.
	 *
	 * @param array  $credentials
	 * @param bool   $remember
	 * @param bool   $login
	 * @return bool
	 * @static 
	 */
	 public static function attempt($credentials = array(), $remember = false, $login = true){
		$root = new \Illuminate\Auth\Guard(null,null);
		return $root->attempt($credentials, $remember, $login);
	 }

	/**
	 * Register an authentication attempt event listener.
	 *
	 * @param mixed  $callback
	 * @return void
	 * @static 
	 */
	 public static function attempting($callback){
		$root = new \Illuminate\Auth\Guard(null,null);
		$root->attempting($callback);
	 }

	/**
	 * Log a user into the application.
	 *
	 * @param \Illuminate\Auth\UserInterface  $user
	 * @param bool  $remember
	 * @return void
	 * @static 
	 */
	 public static function login($user, $remember = false){
		$root = new \Illuminate\Auth\Guard(null,null);
		$root->login($user, $remember);
	 }

	/**
	 * Log the given user ID into the application.
	 *
	 * @param mixed  $id
	 * @param bool   $remember
	 * @return \Illuminate\Auth\UserInterface
	 * @static 
	 */
	 public static function loginUsingId($id, $remember = false){
		$root = new \Illuminate\Auth\Guard(null,null);
		return $root->loginUsingId($id, $remember);
	 }

	/**
	 * Log the user out of the application.
	 *
	 * @return void
	 * @static 
	 */
	 public static function logout(){
		$root = new \Illuminate\Auth\Guard(null,null);
		$root->logout();
	 }

	/**
	 * Get the cookies queued by the guard.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getQueuedCookies(){
		$root = new \Illuminate\Auth\Guard(null,null);
		return $root->getQueuedCookies();
	 }

	/**
	 * Get the cookie creator instance used by the guard.
	 *
	 * @return \Illuminate\Cookie\CookieJar
	 * @static 
	 */
	 public static function getCookieJar(){
		$root = new \Illuminate\Auth\Guard(null,null);
		return $root->getCookieJar();
	 }

	/**
	 * Set the cookie creator instance used by the guard.
	 *
	 * @param \Illuminate\Cookie\CookieJar  $cookie
	 * @return void
	 * @static 
	 */
	 public static function setCookieJar($cookie){
		$root = new \Illuminate\Auth\Guard(null,null);
		$root->setCookieJar($cookie);
	 }

	/**
	 * Get the event dispatcher instance.
	 *
	 * @return \Illuminate\Events\Dispatcher
	 * @static 
	 */
	 public static function getDispatcher(){
		$root = new \Illuminate\Auth\Guard(null,null);
		return $root->getDispatcher();
	 }

	/**
	 * Set the event dispatcher instance.
	 *
	 * @param \Illuminate\Events\Dispatcher
	 * @static 
	 */
	 public static function setDispatcher($events){
		$root = new \Illuminate\Auth\Guard(null,null);
		$root->setDispatcher($events);
	 }

	/**
	 * Get the session store used by the guard.
	 *
	 * @return \Illuminate\Session\Store
	 * @static 
	 */
	 public static function getSession(){
		$root = new \Illuminate\Auth\Guard(null,null);
		return $root->getSession();
	 }

	/**
	 * Get the user provider used by the guard.
	 *
	 * @return \Illuminate\Auth\UserProviderInterface
	 * @static 
	 */
	 public static function getProvider(){
		$root = new \Illuminate\Auth\Guard(null,null);
		return $root->getProvider();
	 }

	/**
	 * Set the user provider used by the guard.
	 *
	 * @param \Illuminate\Auth\UserProviderInterface  $provider
	 * @return void
	 * @static 
	 */
	 public static function setProvider($provider){
		$root = new \Illuminate\Auth\Guard(null,null);
		$root->setProvider($provider);
	 }

	/**
	 * Return the currently cached user of the application.
	 *
	 * @return \Illuminate\Auth\UserInterface|null
	 * @static 
	 */
	 public static function getUser(){
		$root = new \Illuminate\Auth\Guard(null,null);
		return $root->getUser();
	 }

	/**
	 * Set the current user of the application.
	 *
	 * @param \Illuminate\Auth\UserInterface  $user
	 * @return void
	 * @static 
	 */
	 public static function setUser($user){
		$root = new \Illuminate\Auth\Guard(null,null);
		$root->setUser($user);
	 }

	/**
	 * Get the current request instance.
	 *
	 * @return \Symfony\Component\HttpFoundation\Request
	 * @static 
	 */
	 public static function getRequest(){
		$root = new \Illuminate\Auth\Guard(null,null);
		return $root->getRequest();
	 }

	/**
	 * Set the current request instance.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request
	 * @return \Illuminate\Auth\Guard
	 * @static 
	 */
	 public static function setRequest($request){
		$root = new \Illuminate\Auth\Guard(null,null);
		return $root->setRequest($request);
	 }

	/**
	 * Get a unique identifier for the auth session value.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getName(){
		$root = new \Illuminate\Auth\Guard(null,null);
		return $root->getName();
	 }

	/**
	 * Get the name of the cookie used to store the "recaller".
	 *
	 * @return string
	 * @static 
	 */
	 public static function getRecallerName(){
		$root = new \Illuminate\Auth\Guard(null,null);
		return $root->getRecallerName();
	 }

}

class Blade extends Illuminate\Support\Facades\Blade{
	/**
	 * Compile the view at the given path.
	 *
	 * @param string  $path
	 * @return void
	 * @static 
	 */
	 public static function compile($path){
		$root = new \Illuminate\View\Compilers\BladeCompiler(null,null);
		$root->compile($path);
	 }

	/**
	 * Compile the given Blade template contents.
	 *
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function compileString($value){
		$root = new \Illuminate\View\Compilers\BladeCompiler(null,null);
		return $root->compileString($value);
	 }

	/**
	 * Register a custom Blade compiler.
	 *
	 * @param Closure  $compiler
	 * @return void
	 * @static 
	 */
	 public static function extend($compiler){
		$root = new \Illuminate\View\Compilers\BladeCompiler(null,null);
		$root->extend($compiler);
	 }

	/**
	 * Get the regular expression for a generic Blade function.
	 *
	 * @param string  $function
	 * @return string
	 * @static 
	 */
	 public static function createMatcher($function){
		$root = new \Illuminate\View\Compilers\BladeCompiler(null,null);
		return $root->createMatcher($function);
	 }

	/**
	 * Get the regular expression for a generic Blade function.
	 *
	 * @param string  $function
	 * @return string
	 * @static 
	 */
	 public static function createOpenMatcher($function){
		$root = new \Illuminate\View\Compilers\BladeCompiler(null,null);
		return $root->createOpenMatcher($function);
	 }

	/**
	 * Create a plain Blade matcher.
	 *
	 * @param string  $function
	 * @return string
	 * @static 
	 */
	 public static function createPlainMatcher($function){
		$root = new \Illuminate\View\Compilers\BladeCompiler(null,null);
		return $root->createPlainMatcher($function);
	 }

	/**
	 * Sets the content tags used for the compiler.
	 *
	 * @param string  $openTag
	 * @param string  $closeTag
	 * @param bool    $escaped
	 * @return void
	 * @static 
	 */
	 public static function setContentTags($openTag, $closeTag, $escaped = false){
		$root = new \Illuminate\View\Compilers\BladeCompiler(null,null);
		$root->setContentTags($openTag, $closeTag, $escaped);
	 }

	/**
	 * Sets the escaped content tags used for the compiler.
	 *
	 * @param string  $openTag
	 * @param string  $closeTag
	 * @return void
	 * @static 
	 */
	 public static function setEscapedContentTags($openTag, $closeTag){
		$root = new \Illuminate\View\Compilers\BladeCompiler(null,null);
		$root->setEscapedContentTags($openTag, $closeTag);
	 }

	/**
	 * Create a new compiler instance.
	 *
	 * @param \Illuminate\Filesystem\Filesystem  $files
	 * @param string  $cachePath
	 * @return self 
	 * @static 
	 */
	 public static function __construct($files, $cachePath){
		$root = new \Illuminate\View\Compilers\BladeCompiler(null,null);
		$root->__construct($files, $cachePath);
	 }

	/**
	 * Get the path to the compiled version of a view.
	 *
	 * @param string  $path
	 * @return string
	 * @static 
	 */
	 public static function getCompiledPath($path){
		$root = new \Illuminate\View\Compilers\BladeCompiler(null,null);
		return $root->getCompiledPath($path);
	 }

	/**
	 * Determine if the view at the given path is expired.
	 *
	 * @param string  $path
	 * @return bool
	 * @static 
	 */
	 public static function isExpired($path){
		$root = new \Illuminate\View\Compilers\BladeCompiler(null,null);
		return $root->isExpired($path);
	 }

}

class Cache extends Illuminate\Support\Facades\Cache{
	/**
	 * Get the cache "prefix" value.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getPrefix(){
		$root = new \Illuminate\Cache\CacheManager(null);
		return $root->getPrefix();
	 }

	/**
	 * Create a new manager instance.
	 *
	 * @param \Illuminate\Foundation\Application  $app
	 * @return self 
	 * @static 
	 */
	 public static function __construct($app){
		$root = new \Illuminate\Cache\CacheManager(null);
		$root->__construct($app);
	 }

	/**
	 * Get a driver instance.
	 *
	 * @param string  $driver
	 * @return mixed
	 * @static 
	 */
	 public static function driver($driver = null){
		$root = new \Illuminate\Cache\CacheManager(null);
		return $root->driver($driver);
	 }

	/**
	 * Register a custom driver creator Closure.
	 *
	 * @param string   $driver
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function extend($driver, $callback){
		$root = new \Illuminate\Cache\CacheManager(null);
		$root->extend($driver, $callback);
	 }

	/**
	 * Get all of the created "drivers".
	 *
	 * @return array
	 * @static 
	 */
	 public static function getDrivers(){
		$root = new \Illuminate\Cache\CacheManager(null);
		return $root->getDrivers();
	 }

	/**
	 * Dynamically call the default driver instance.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
		$root = new \Illuminate\Cache\CacheManager(null);
		return $root->__call($method, $parameters);
	 }

	/**
	 * Determine if an item exists in the cache.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function has($key){
		$root = new \Illuminate\Cache\Repository(null);
		return $root->has($key);
	 }

	/**
	 * Retrieve an item from the cache by key.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function get($key, $default = null){
		$root = new \Illuminate\Cache\Repository(null);
		return $root->get($key, $default);
	 }

	/**
	 * Store an item in the cache if the key does not exist.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @param int     $minutes
	 * @return void
	 * @static 
	 */
	 public static function add($key, $value, $minutes){
		$root = new \Illuminate\Cache\Repository(null);
		$root->add($key, $value, $minutes);
	 }

	/**
	 * Get an item from the cache, or store the default value.
	 *
	 * @param string   $key
	 * @param int      $minutes
	 * @param Closure  $callback
	 * @return mixed
	 * @static 
	 */
	 public static function remember($key, $minutes, $callback){
		$root = new \Illuminate\Cache\Repository(null);
		return $root->remember($key, $minutes, $callback);
	 }

	/**
	 * Get an item from the cache, or store the default value forever.
	 *
	 * @param string   $key
	 * @param Closure  $callback
	 * @return mixed
	 * @static 
	 */
	 public static function sear($key, $callback){
		$root = new \Illuminate\Cache\Repository(null);
		return $root->sear($key, $callback);
	 }

	/**
	 * Get an item from the cache, or store the default value forever.
	 *
	 * @param string   $key
	 * @param Closure  $callback
	 * @return mixed
	 * @static 
	 */
	 public static function rememberForever($key, $callback){
		$root = new \Illuminate\Cache\Repository(null);
		return $root->rememberForever($key, $callback);
	 }

	/**
	 * Get the default cache time.
	 *
	 * @return int
	 * @static 
	 */
	 public static function getDefaultCacheTime(){
		$root = new \Illuminate\Cache\Repository(null);
		return $root->getDefaultCacheTime();
	 }

	/**
	 * Set the default cache time in minutes.
	 *
	 * @param int   $minutes
	 * @return void
	 * @static 
	 */
	 public static function setDefaultCacheTime($minutes){
		$root = new \Illuminate\Cache\Repository(null);
		$root->setDefaultCacheTime($minutes);
	 }

	/**
	 * Get the cache store implementation.
	 *
	 * @return \Illuminate\Cache\StoreInterface
	 * @static 
	 */
	 public static function getStore(){
		$root = new \Illuminate\Cache\Repository(null);
		return $root->getStore();
	 }

	/**
	 * Determine if a cached value exists.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function offsetExists($key){
		$root = new \Illuminate\Cache\Repository(null);
		return $root->offsetExists($key);
	 }

	/**
	 * Retrieve an item from the cache by key.
	 *
	 * @param string  $key
	 * @return mixed
	 * @static 
	 */
	 public static function offsetGet($key){
		$root = new \Illuminate\Cache\Repository(null);
		return $root->offsetGet($key);
	 }

	/**
	 * Store an item in the cache for the default time.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function offsetSet($key, $value){
		$root = new \Illuminate\Cache\Repository(null);
		$root->offsetSet($key, $value);
	 }

	/**
	 * Remove an item from the cache.
	 *
	 * @param string  $key
	 * @return void
	 * @static 
	 */
	 public static function offsetUnset($key){
		$root = new \Illuminate\Cache\Repository(null);
		$root->offsetUnset($key);
	 }

}

class ClassLoader extends Illuminate\Support\ClassLoader{
}

class Config extends Illuminate\Support\Facades\Config{
	/**
	 * Create a new configuration repository.
	 *
	 * @param \Illuminate\Config\LoaderInterface  $loader
	 * @param string  $environment
	 * @return self 
	 * @static 
	 */
	 public static function __construct($loader, $environment){
		$root = new \Illuminate\Config\Repository(null,null);
		$root->__construct($loader, $environment);
	 }

	/**
	 * Determine if the given configuration value exists.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function has($key){
		$root = new \Illuminate\Config\Repository(null,null);
		return $root->has($key);
	 }

	/**
	 * Determine if a configuration group exists.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function hasGroup($key){
		$root = new \Illuminate\Config\Repository(null,null);
		return $root->hasGroup($key);
	 }

	/**
	 * Get the specified configuration value.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function get($key, $default = null){
		$root = new \Illuminate\Config\Repository(null,null);
		return $root->get($key, $default);
	 }

	/**
	 * Set a given configuration value.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function set($key, $value){
		$root = new \Illuminate\Config\Repository(null,null);
		$root->set($key, $value);
	 }

	/**
	 * Register a package for cascading configuration.
	 *
	 * @param string  $package
	 * @param string  $hint
	 * @param string  $namespace
	 * @return void
	 * @static 
	 */
	 public static function package($package, $hint, $namespace = null){
		$root = new \Illuminate\Config\Repository(null,null);
		$root->package($package, $hint, $namespace);
	 }

	/**
	 * Register an after load callback for a given namespace.
	 *
	 * @param string   $namespace
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function afterLoading($namespace, $callback){
		$root = new \Illuminate\Config\Repository(null,null);
		$root->afterLoading($namespace, $callback);
	 }

	/**
	 * Add a new namespace to the loader.
	 *
	 * @param string  $namespace
	 * @param string  $hint
	 * @return void
	 * @static 
	 */
	 public static function addNamespace($namespace, $hint){
		$root = new \Illuminate\Config\Repository(null,null);
		$root->addNamespace($namespace, $hint);
	 }

	/**
	 * Returns all registered namespaces with the config
	 * loader.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getNamespaces(){
		$root = new \Illuminate\Config\Repository(null,null);
		return $root->getNamespaces();
	 }

	/**
	 * Get the loader implementation.
	 *
	 * @return \Illuminate\Config\LoaderInterface
	 * @static 
	 */
	 public static function getLoader(){
		$root = new \Illuminate\Config\Repository(null,null);
		return $root->getLoader();
	 }

	/**
	 * Set the loader implementation.
	 *
	 * @param \Illuminate\Config\LoaderInterface  $loader
	 * @return void
	 * @static 
	 */
	 public static function setLoader($loader){
		$root = new \Illuminate\Config\Repository(null,null);
		$root->setLoader($loader);
	 }

	/**
	 * Get the current configuration environment.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getEnvironment(){
		$root = new \Illuminate\Config\Repository(null,null);
		return $root->getEnvironment();
	 }

	/**
	 * Get the after load callback array.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getAfterLoadCallbacks(){
		$root = new \Illuminate\Config\Repository(null,null);
		return $root->getAfterLoadCallbacks();
	 }

	/**
	 * Get all of the configuration items.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getItems(){
		$root = new \Illuminate\Config\Repository(null,null);
		return $root->getItems();
	 }

	/**
	 * Determine if the given configuration option exists.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function offsetExists($key){
		$root = new \Illuminate\Config\Repository(null,null);
		return $root->offsetExists($key);
	 }

	/**
	 * Get a configuration option.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function offsetGet($key){
		$root = new \Illuminate\Config\Repository(null,null);
		return $root->offsetGet($key);
	 }

	/**
	 * Set a configuration option.
	 *
	 * @param string  $key
	 * @param string  $value
	 * @return void
	 * @static 
	 */
	 public static function offsetSet($key, $value){
		$root = new \Illuminate\Config\Repository(null,null);
		$root->offsetSet($key, $value);
	 }

	/**
	 * Unset a configuration option.
	 *
	 * @param string  $key
	 * @return void
	 * @static 
	 */
	 public static function offsetUnset($key){
		$root = new \Illuminate\Config\Repository(null,null);
		$root->offsetUnset($key);
	 }

	/**
	 * Parse a key into namespace, group, and item.
	 *
	 * @param string  $key
	 * @return array
	 * @static 
	 */
	 public static function parseKey($key){
		$root = new \Illuminate\Support\NamespacedItemResolver();
		return $root->parseKey($key);
	 }

	/**
	 * Set the parsed value of a key.
	 *
	 * @param string  $key
	 * @param array   $parsed
	 * @return void
	 * @static 
	 */
	 public static function setParsedKey($key, $parsed){
		$root = new \Illuminate\Support\NamespacedItemResolver();
		$root->setParsedKey($key, $parsed);
	 }

}

class Controller extends Illuminate\Routing\Controllers\Controller{
}

class Cookie extends Illuminate\Support\Facades\Cookie{
	/**
	 * Create a new cookie manager instance.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @param \Illuminate\Encryption\Encrypter  $encrypter
	 * @return self 
	 * @static 
	 */
	 public static function __construct($request, $encrypter){
		$root = new \Illuminate\Cookie\CookieJar(null,null);
		$root->__construct($request, $encrypter);
	 }

	/**
	 * Determine if a cookie exists and is not null.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function has($key){
		$root = new \Illuminate\Cookie\CookieJar(null,null);
		return $root->has($key);
	 }

	/**
	 * Get the value of the given cookie.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function get($key, $default = null){
		$root = new \Illuminate\Cookie\CookieJar(null,null);
		return $root->get($key, $default);
	 }

	/**
	 * Create a new cookie instance.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param int     $minutes
	 * @param string  $path
	 * @param string  $domain
	 * @param bool    $secure
	 * @param bool    $httpOnly
	 * @return \Symfony\Component\HttpFoundation\Cookie
	 * @static 
	 */
	 public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true){
		$root = new \Illuminate\Cookie\CookieJar(null,null);
		return $root->make($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
	 }

	/**
	 * Create a cookie that lasts "forever" (five years).
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param string  $path
	 * @param string  $domain
	 * @param bool    $secure
	 * @param bool    $httpOnly
	 * @return \Symfony\Component\HttpFoundation\Cookie
	 * @static 
	 */
	 public static function forever($name, $value, $path = null, $domain = null, $secure = false, $httpOnly = true){
		$root = new \Illuminate\Cookie\CookieJar(null,null);
		return $root->forever($name, $value, $path, $domain, $secure, $httpOnly);
	 }

	/**
	 * Expire the given cookie.
	 *
	 * @param string  $name
	 * @return \Symfony\Component\HttpFoundation\Cookie
	 * @static 
	 */
	 public static function forget($name){
		$root = new \Illuminate\Cookie\CookieJar(null,null);
		return $root->forget($name);
	 }

	/**
	 * Set the default path and domain for the jar.
	 *
	 * @param string  $path
	 * @param string  $domain
	 * @return void
	 * @static 
	 */
	 public static function setDefaultPathAndDomain($path, $domain){
		$root = new \Illuminate\Cookie\CookieJar(null,null);
		$root->setDefaultPathAndDomain($path, $domain);
	 }

	/**
	 * Get the request instance.
	 *
	 * @return \Symfony\Component\HttpFoundation\Request
	 * @static 
	 */
	 public static function getRequest(){
		$root = new \Illuminate\Cookie\CookieJar(null,null);
		return $root->getRequest();
	 }

	/**
	 * Get the encrypter instance.
	 *
	 * @return \Illuminate\Encryption\Encrypter
	 * @static 
	 */
	 public static function getEncrypter(){
		$root = new \Illuminate\Cookie\CookieJar(null,null);
		return $root->getEncrypter();
	 }

}

class Crypt extends Illuminate\Support\Facades\Crypt{
	/**
	 * Create a new encrypter instance.
	 *
	 * @param string  $key
	 * @return self 
	 * @static 
	 */
	 public static function __construct($key){
		$root = new \Illuminate\Encryption\Encrypter(null);
		$root->__construct($key);
	 }

	/**
	 * Encrypt the given value.
	 *
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function encrypt($value){
		$root = new \Illuminate\Encryption\Encrypter(null);
		return $root->encrypt($value);
	 }

	/**
	 * Decrypt the given value.
	 *
	 * @param string  $payload
	 * @return string
	 * @static 
	 */
	 public static function decrypt($payload){
		$root = new \Illuminate\Encryption\Encrypter(null);
		return $root->decrypt($payload);
	 }

	/**
	 * Set the encryption key.
	 *
	 * @param string  $key
	 * @return void
	 * @static 
	 */
	 public static function setKey($key){
		$root = new \Illuminate\Encryption\Encrypter(null);
		$root->setKey($key);
	 }

	/**
	 * Set the encryption cipher.
	 *
	 * @param string  $cipher
	 * @return void
	 * @static 
	 */
	 public static function setCipher($cipher){
		$root = new \Illuminate\Encryption\Encrypter(null);
		$root->setCipher($cipher);
	 }

	/**
	 * Set the encryption mode.
	 *
	 * @param string  $mode
	 * @return void
	 * @static 
	 */
	 public static function setMode($mode){
		$root = new \Illuminate\Encryption\Encrypter(null);
		$root->setMode($mode);
	 }

}

class DB extends Illuminate\Support\Facades\DB{
	/**
	 * Create a new database manager instance.
	 *
	 * @param \Illuminate\Foundation\Application  $app
	 * @param \Illuminate\Database\Connectors\ConnectionFactory  $factory
	 * @return self 
	 * @static 
	 */
	 public static function __construct($app, $factory){
		$root = new \Illuminate\Database\DatabaseManager(null,null);
		$root->__construct($app, $factory);
	 }

	/**
	 * Get a database connection instance.
	 *
	 * @param string  $name
	 * @return \Illuminate\Database\Connection
	 * @static 
	 */
	 public static function connection($name = null){
		$root = new \Illuminate\Database\DatabaseManager(null,null);
		return $root->connection($name);
	 }

	/**
	 * Reconnect to the given database.
	 *
	 * @param string  $name
	 * @return \Illuminate\Database\Connection
	 * @static 
	 */
	 public static function reconnect($name = null){
		$root = new \Illuminate\Database\DatabaseManager(null,null);
		return $root->reconnect($name);
	 }

	/**
	 * Get the default connection name.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getDefaultConnection(){
		$root = new \Illuminate\Database\DatabaseManager(null,null);
		return $root->getDefaultConnection();
	 }

	/**
	 * Set the default connection name.
	 *
	 * @param string  $name
	 * @return void
	 * @static 
	 */
	 public static function setDefaultConnection($name){
		$root = new \Illuminate\Database\DatabaseManager(null,null);
		$root->setDefaultConnection($name);
	 }

	/**
	 * Register an extension connection resolver.
	 *
	 * @param string    $name
	 * @param callable  $resolver
	 * @return void
	 * @static 
	 */
	 public static function extend($name, $resolver){
		$root = new \Illuminate\Database\DatabaseManager(null,null);
		$root->extend($name, $resolver);
	 }

	/**
	 * Dynamically pass methods to the default connection.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
		$root = new \Illuminate\Database\DatabaseManager(null,null);
		return $root->__call($method, $parameters);
	 }

class Eloquent extends Illuminate\Database\Eloquent\Model{
	/**
	 * Execute the query and get the first result.
	 *
	 * @param array  $columns
	 * @return \Illuminate\Database\Eloquent\Model|static|null
	 * @static 
	 */
	 public static function first($columns = array()){
		$root = new \Illuminate\Database\Eloquent\Builder(null);
		return $root->first($columns);
	 }

	/**
	 * Execute the query and get the first result or throw an exception.
	 *
	 * @param array  $columns
	 * @return \Illuminate\Database\Eloquent\Model|static
	 * @static 
	 */
	 public static function firstOrFail($columns = array()){
		$root = new \Illuminate\Database\Eloquent\Builder(null);
		return $root->firstOrFail($columns);
	 }

	/**
	 * Execute the query as a "select" statement.
	 *
	 * @param array  $columns
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 * @static 
	 */
	 public static function get($columns = array()){
		$root = new \Illuminate\Database\Eloquent\Builder(null);
		return $root->get($columns);
	 }

	/**
	 * Pluck a single column from the database.
	 *
	 * @param string  $column
	 * @return mixed
	 * @static 
	 */
	 public static function pluck($column){
		$root = new \Illuminate\Database\Eloquent\Builder(null);
		return $root->pluck($column);
	 }

	/**
	 * Get an array with the values of a given column.
	 *
	 * @param string  $column
	 * @param string  $key
	 * @return array
	 * @static 
	 */
	 public static function lists($column, $key = null){
		$root = new \Illuminate\Database\Eloquent\Builder(null);
		return $root->lists($column, $key);
	 }

	/**
	 * Get a paginator for the "select" statement.
	 *
	 * @param int    $perPage
	 * @param array  $columns
	 * @return \Illuminate\Pagination\Paginator
	 * @static 
	 */
	 public static function paginate($perPage = null, $columns = array()){
		$root = new \Illuminate\Database\Eloquent\Builder(null);
		return $root->paginate($perPage, $columns);
	 }

	/**
	 * Increment a column's value by a given amount.
	 *
	 * @param string  $column
	 * @param int     $amount
	 * @param array   $extra
	 * @return int
	 * @static 
	 */
	 public static function increment($column, $amount = 1, $extra = array()){
		$root = new \Illuminate\Database\Eloquent\Builder(null);
		return $root->increment($column, $amount, $extra);
	 }

	/**
	 * Decrement a column's value by a given amount.
	 *
	 * @param string  $column
	 * @param int     $amount
	 * @param array   $extra
	 * @return int
	 * @static 
	 */
	 public static function decrement($column, $amount = 1, $extra = array()){
		$root = new \Illuminate\Database\Eloquent\Builder(null);
		return $root->decrement($column, $amount, $extra);
	 }

	/**
	 * Get the hydrated models without eager loading.
	 *
	 * @param array  $columns
	 * @return array|static[]
	 * @static 
	 */
	 public static function getModels($columns = array()){
		$root = new \Illuminate\Database\Eloquent\Builder(null);
		return $root->getModels($columns);
	 }

	/**
	 * Eager load the relationships for the models.
	 *
	 * @param array  $models
	 * @return array
	 * @static 
	 */
	 public static function eagerLoadRelations($models){
		$root = new \Illuminate\Database\Eloquent\Builder(null);
		return $root->eagerLoadRelations($models);
	 }

	/**
	 * Add a relationship count condition to the query.
	 *
	 * @param string  $relation
	 * @param string  $operator
	 * @param int     $count
	 * @param string  $boolean
	 * @return \Illuminate\Database\Eloquent\Builder|static
	 * @static 
	 */
	 public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and'){
		$root = new \Illuminate\Database\Eloquent\Builder(null);
		return $root->has($relation, $operator, $count, $boolean);
	 }

	/**
	 * Add a relationship count condition to the query with an "or".
	 *
	 * @param string  $relation
	 * @param string  $operator
	 * @param int     $count
	 * @return \Illuminate\Database\Eloquent\Builder|static
	 * @static 
	 */
	 public static function orHas($relation, $operator = '>=', $count = 1){
		$root = new \Illuminate\Database\Eloquent\Builder(null);
		return $root->orHas($relation, $operator, $count);
	 }

	/**
	 * Get the underlying query builder instance.
	 *
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function getQuery(){
		$root = new \Illuminate\Database\Eloquent\Builder(null);
		return $root->getQuery();
	 }

	/**
	 * Set the underlying query builder instance.
	 *
	 * @param \Illuminate\Database\Query\Builder  $query
	 * @return void
	 * @static 
	 */
	 public static function setQuery($query){
		$root = new \Illuminate\Database\Eloquent\Builder(null);
		$root->setQuery($query);
	 }

	/**
	 * Get the relationships being eagerly loaded.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getEagerLoads(){
		$root = new \Illuminate\Database\Eloquent\Builder(null);
		return $root->getEagerLoads();
	 }

	/**
	 * Set the relationships being eagerly loaded.
	 *
	 * @param array  $eagerLoad
	 * @return void
	 * @static 
	 */
	 public static function setEagerLoads($eagerLoad){
		$root = new \Illuminate\Database\Eloquent\Builder(null);
		$root->setEagerLoads($eagerLoad);
	 }

	/**
	 * Get the model instance being queried.
	 *
	 * @return \Illuminate\Database\Eloquent\Model
	 * @static 
	 */
	 public static function getModel(){
		$root = new \Illuminate\Database\Eloquent\Builder(null);
		return $root->getModel();
	 }

	/**
	 * Set a model instance for the model being queried.
	 *
	 * @param \Illuminate\Database\Eloquent\Model  $model
	 * @return \Illuminate\Database\Eloquent\Builder
	 * @static 
	 */
	 public static function setModel($model){
		$root = new \Illuminate\Database\Eloquent\Builder(null);
		return $root->setModel($model);
	 }

	/**
	 * Set the columns to be selected.
	 *
	 * @param array  $columns
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function select($columns = array()){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->select($columns);
	 }

	/**
	 * Add a new select column to the query.
	 *
	 * @param mixed  $column
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function addSelect($column){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->addSelect($column);
	 }

	/**
	 * Force the query to only return distinct results.
	 *
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function distinct(){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->distinct();
	 }

	/**
	 * Set the table which the query is targeting.
	 *
	 * @param string  $table
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function from($table){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->from($table);
	 }

	/**
	 * Add a join clause to the query.
	 *
	 * @param string  $table
	 * @param string  $first
	 * @param string  $operator
	 * @param string  $second
	 * @param string  $type
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function join($table, $first, $operator = null, $second = null, $type = 'inner'){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->join($table, $first, $operator, $second, $type);
	 }

	/**
	 * Add a left join to the query.
	 *
	 * @param string  $table
	 * @param string  $first
	 * @param string  $operator
	 * @param string  $second
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function leftJoin($table, $first, $operator = null, $second = null){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->leftJoin($table, $first, $operator, $second);
	 }

	/**
	 * Add a basic where clause to the query.
	 *
	 * @param string  $column
	 * @param string  $operator
	 * @param mixed   $value
	 * @param string  $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function where($column, $operator = null, $value = null, $boolean = 'and'){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->where($column, $operator, $value, $boolean);
	 }

	/**
	 * Add an "or where" clause to the query.
	 *
	 * @param string  $column
	 * @param string  $operator
	 * @param mixed   $value
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhere($column, $operator = null, $value = null){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->orWhere($column, $operator, $value);
	 }

	/**
	 * Add a raw where clause to the query.
	 *
	 * @param string  $sql
	 * @param array   $bindings
	 * @param string  $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereRaw($sql, $bindings = array(), $boolean = 'and'){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->whereRaw($sql, $bindings, $boolean);
	 }

	/**
	 * Add a raw or where clause to the query.
	 *
	 * @param string  $sql
	 * @param array   $bindings
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereRaw($sql, $bindings = array()){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->orWhereRaw($sql, $bindings);
	 }

	/**
	 * Add a where between statement to the query.
	 *
	 * @param string  $column
	 * @param array   $values
	 * @param string  $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereBetween($column, $values, $boolean = 'and'){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->whereBetween($column, $values, $boolean);
	 }

	/**
	 * Add an or where between statement to the query.
	 *
	 * @param string  $column
	 * @param array   $values
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereBetween($column, $values){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->orWhereBetween($column, $values);
	 }

	/**
	 * Add a nested where statement to the query.
	 *
	 * @param \Closure $callback
	 * @param string   $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereNested($callback, $boolean = 'and'){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->whereNested($callback, $boolean);
	 }

	/**
	 * Add an exists clause to the query.
	 *
	 * @param \Closure $callback
	 * @param string   $boolean
	 * @param bool     $not
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereExists($callback, $boolean = 'and', $not = false){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->whereExists($callback, $boolean, $not);
	 }

	/**
	 * Add an or exists clause to the query.
	 *
	 * @param \Closure $callback
	 * @param bool     $not
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereExists($callback, $not = false){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->orWhereExists($callback, $not);
	 }

	/**
	 * Add a where not exists clause to the query.
	 *
	 * @param \Closure $callback
	 * @param string   $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereNotExists($callback, $boolean = 'and'){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->whereNotExists($callback, $boolean);
	 }

	/**
	 * Add a where not exists clause to the query.
	 *
	 * @param \Closure  $callback
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereNotExists($callback){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->orWhereNotExists($callback);
	 }

	/**
	 * Add a "where in" clause to the query.
	 *
	 * @param string  $column
	 * @param mixed   $values
	 * @param string  $boolean
	 * @param bool    $not
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereIn($column, $values, $boolean = 'and', $not = false){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->whereIn($column, $values, $boolean, $not);
	 }

	/**
	 * Add an "or where in" clause to the query.
	 *
	 * @param string  $column
	 * @param mixed   $values
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereIn($column, $values){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->orWhereIn($column, $values);
	 }

	/**
	 * Add a "where not in" clause to the query.
	 *
	 * @param string  $column
	 * @param mixed   $values
	 * @param string  $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereNotIn($column, $values, $boolean = 'and'){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->whereNotIn($column, $values, $boolean);
	 }

	/**
	 * Add an "or where not in" clause to the query.
	 *
	 * @param string  $column
	 * @param mixed   $values
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereNotIn($column, $values){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->orWhereNotIn($column, $values);
	 }

	/**
	 * Add a "where null" clause to the query.
	 *
	 * @param string  $column
	 * @param string  $boolean
	 * @param bool    $not
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereNull($column, $boolean = 'and', $not = false){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->whereNull($column, $boolean, $not);
	 }

	/**
	 * Add an "or where null" clause to the query.
	 *
	 * @param string  $column
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereNull($column){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->orWhereNull($column);
	 }

	/**
	 * Add a "where not null" clause to the query.
	 *
	 * @param string  $column
	 * @param string  $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereNotNull($column, $boolean = 'and'){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->whereNotNull($column, $boolean);
	 }

	/**
	 * Add an "or where not null" clause to the query.
	 *
	 * @param string  $column
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereNotNull($column){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->orWhereNotNull($column);
	 }

	/**
	 * Handles dynamic "where" clauses to the query.
	 *
	 * @param string  $method
	 * @param string  $parameters
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function dynamicWhere($method, $parameters){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->dynamicWhere($method, $parameters);
	 }

	/**
	 * Add a "group by" clause to the query.
	 *
	 * @param dynamic  $columns
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function groupBy(){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->groupBy();
	 }

	/**
	 * Add a "having" clause to the query.
	 *
	 * @param string  $column
	 * @param string  $operator
	 * @param string  $value
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function having($column, $operator = null, $value = null){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->having($column, $operator, $value);
	 }

	/**
	 * Add a raw having clause to the query.
	 *
	 * @param string  $sql
	 * @param array   $bindings
	 * @param string  $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function havingRaw($sql, $bindings = array(), $boolean = 'and'){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->havingRaw($sql, $bindings, $boolean);
	 }

	/**
	 * Add a raw or having clause to the query.
	 *
	 * @param string  $sql
	 * @param array   $bindings
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orHavingRaw($sql, $bindings = array()){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->orHavingRaw($sql, $bindings);
	 }

	/**
	 * Add an "order by" clause to the query.
	 *
	 * @param string  $column
	 * @param string  $direction
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orderBy($column, $direction = 'asc'){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->orderBy($column, $direction);
	 }

	/**
	 * Set the "offset" value of the query.
	 *
	 * @param int  $value
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function skip($value){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->skip($value);
	 }

	/**
	 * Set the "limit" value of the query.
	 *
	 * @param int  $value
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function take($value){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->take($value);
	 }

	/**
	 * Set the limit and offset for a given page.
	 *
	 * @param int  $page
	 * @param int  $perPage
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function forPage($page, $perPage = 15){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->forPage($page, $perPage);
	 }

	/**
	 * Add a union statement to the query.
	 *
	 * @param \Illuminate\Database\Query\Builder|\Closure  $query
	 * @param bool $all
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function union($query, $all = false){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->union($query, $all);
	 }

	/**
	 * Add a union all statement to the query.
	 *
	 * @param \Illuminate\Database\Query\Builder|\Closure  $query
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function unionAll($query){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->unionAll($query);
	 }

	/**
	 * Get the SQL representation of the query.
	 *
	 * @return string
	 * @static 
	 */
	 public static function toSql(){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->toSql();
	 }

	/**
	 * Indicate that the query results should be cached.
	 *
	 * @param int  $minutes
	 * @param string  $key
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function remember($minutes, $key = null){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->remember($minutes, $key);
	 }

	/**
	 * Execute the query as a fresh "select" statement.
	 *
	 * @param array  $columns
	 * @return array|static[]
	 * @static 
	 */
	 public static function getFresh($columns = array()){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->getFresh($columns);
	 }

	/**
	 * Execute the query as a cached "select" statement.
	 *
	 * @param array  $columns
	 * @return array
	 * @static 
	 */
	 public static function getCached($columns = array()){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->getCached($columns);
	 }

	/**
	 * Get a unique cache key for the complete query.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getCacheKey(){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->getCacheKey();
	 }

	/**
	 * Generate the unique cache key for the query.
	 *
	 * @return string
	 * @static 
	 */
	 public static function generateCacheKey(){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->generateCacheKey();
	 }

	/**
	 * Concatenate values of a given column as a string.
	 *
	 * @param string  $column
	 * @param string  $glue
	 * @return string
	 * @static 
	 */
	 public static function implode($column, $glue = null){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->implode($column, $glue);
	 }

	/**
	 * Build a paginator instance from a raw result array.
	 *
	 * @param \Illuminate\Pagination\Environment  $paginator
	 * @param array  $results
	 * @param int    $perPage
	 * @return \Illuminate\Pagination\Paginator
	 * @static 
	 */
	 public static function buildRawPaginator($paginator, $results, $perPage){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->buildRawPaginator($paginator, $results, $perPage);
	 }

	/**
	 * Get the count of the total records for pagination.
	 *
	 * @return int
	 * @static 
	 */
	 public static function getPaginationCount(){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->getPaginationCount();
	 }

	/**
	 * Determine if any rows exist for the current query.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function exists(){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->exists();
	 }

	/**
	 * Retrieve the "count" result of the query.
	 *
	 * @param string  $column
	 * @return int
	 * @static 
	 */
	 public static function count($column = '*'){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->count($column);
	 }

	/**
	 * Retrieve the minimum value of a given column.
	 *
	 * @param string  $column
	 * @return mixed
	 * @static 
	 */
	 public static function min($column){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->min($column);
	 }

	/**
	 * Retrieve the maximum value of a given column.
	 *
	 * @param string  $column
	 * @return mixed
	 * @static 
	 */
	 public static function max($column){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->max($column);
	 }

	/**
	 * Retrieve the sum of the values of a given column.
	 *
	 * @param string  $column
	 * @return mixed
	 * @static 
	 */
	 public static function sum($column){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->sum($column);
	 }

	/**
	 * Retrieve the average of the values of a given column.
	 *
	 * @param string  $column
	 * @return mixed
	 * @static 
	 */
	 public static function avg($column){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->avg($column);
	 }

	/**
	 * Execute an aggregate function on the database.
	 *
	 * @param string  $function
	 * @param array   $columns
	 * @return mixed
	 * @static 
	 */
	 public static function aggregate($function, $columns = array()){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->aggregate($function, $columns);
	 }

	/**
	 * Insert a new record into the database.
	 *
	 * @param array  $values
	 * @return bool
	 * @static 
	 */
	 public static function insert($values){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->insert($values);
	 }

	/**
	 * Insert a new record and get the value of the primary key.
	 *
	 * @param array   $values
	 * @param string  $sequence
	 * @return int
	 * @static 
	 */
	 public static function insertGetId($values, $sequence = null){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->insertGetId($values, $sequence);
	 }

	/**
	 * Run a truncate statement on the table.
	 *
	 * @return void
	 * @static 
	 */
	 public static function truncate(){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		$root->truncate();
	 }

	/**
	 * Merge an array of where clauses and bindings.
	 *
	 * @param array  $wheres
	 * @param array  $bindings
	 * @return void
	 * @static 
	 */
	 public static function mergeWheres($wheres, $bindings){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		$root->mergeWheres($wheres, $bindings);
	 }

	/**
	 * Get a copy of the where clauses and bindings in an array.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getAndResetWheres(){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->getAndResetWheres();
	 }

	/**
	 * Create a raw database expression.
	 *
	 * @param mixed  $value
	 * @return \Illuminate\Database\Query\Expression
	 * @static 
	 */
	 public static function raw($value){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->raw($value);
	 }

	/**
	 * Get the current query value bindings.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getBindings(){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->getBindings();
	 }

	/**
	 * Set the bindings on the query builder.
	 *
	 * @param array  $bindings
	 * @return void
	 * @static 
	 */
	 public static function setBindings($bindings){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		$root->setBindings($bindings);
	 }

	/**
	 * Merge an array of bindings into our bindings.
	 *
	 * @param \Illuminate\Database\Query\Builder  $query
	 * @return \Illuminate\Database\Query\Builder
	 * @static 
	 */
	 public static function mergeBindings($query){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->mergeBindings($query);
	 }

	/**
	 * Get the database query processor instance.
	 *
	 * @return \Illuminate\Database\Query\Processors\Processor
	 * @static 
	 */
	 public static function getProcessor(){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->getProcessor();
	 }

	/**
	 * Get the query grammar instance.
	 *
	 * @return \Illuminate\Database\Grammar
	 * @static 
	 */
	 public static function getGrammar(){
		$root = new \Illuminate\Database\Query\Builder(null,null,null);
		return $root->getGrammar();
	 }

}

class Event extends Illuminate\Support\Facades\Event{
	/**
	 * Create a new event dispatcher instance.
	 *
	 * @param \Illuminate\Container\Container  $container
	 * @return self 
	 * @static 
	 */
	 public static function __construct($container = null){
		$root = new \Illuminate\Events\Dispatcher();
		$root->__construct($container);
	 }

	/**
	 * Register an event listener with the dispatcher.
	 *
	 * @param string  $event
	 * @param mixed   $listener
	 * @param int     $priority
	 * @return void
	 * @static 
	 */
	 public static function listen($event, $listener, $priority = 0){
		$root = new \Illuminate\Events\Dispatcher();
		$root->listen($event, $listener, $priority);
	 }

	/**
	 * Determine if a given event has listeners.
	 *
	 * @param string  $eventName
	 * @return bool
	 * @static 
	 */
	 public static function hasListeners($eventName){
		$root = new \Illuminate\Events\Dispatcher();
		return $root->hasListeners($eventName);
	 }

	/**
	 * Register a queued event and payload.
	 *
	 * @param string  $event
	 * @param array   $payload
	 * @return void
	 * @static 
	 */
	 public static function queue($event, $payload = array()){
		$root = new \Illuminate\Events\Dispatcher();
		$root->queue($event, $payload);
	 }

	/**
	 * Register an event subscriber with the dispatcher.
	 *
	 * @param string  $subscriber
	 * @return void
	 * @static 
	 */
	 public static function subscribe($subscriber){
		$root = new \Illuminate\Events\Dispatcher();
		$root->subscribe($subscriber);
	 }

	/**
	 * Fire an event until the first non-null response is returned.
	 *
	 * @param string  $event
	 * @param array   $payload
	 * @return mixed
	 * @static 
	 */
	 public static function until($event, $payload = array()){
		$root = new \Illuminate\Events\Dispatcher();
		return $root->until($event, $payload);
	 }

	/**
	 * Flush a set of queued events.
	 *
	 * @param string  $event
	 * @return void
	 * @static 
	 */
	 public static function flush($event){
		$root = new \Illuminate\Events\Dispatcher();
		$root->flush($event);
	 }

	/**
	 * Fire an event and call the listeners.
	 *
	 * @param string  $event
	 * @param mixed   $payload
	 * @param boolean $halt
	 * @return void
	 * @static 
	 */
	 public static function fire($event, $payload = array(), $halt = false){
		$root = new \Illuminate\Events\Dispatcher();
		$root->fire($event, $payload, $halt);
	 }

	/**
	 * Get all of the listeners for a given event name.
	 *
	 * @param string  $eventName
	 * @return array
	 * @static 
	 */
	 public static function getListeners($eventName){
		$root = new \Illuminate\Events\Dispatcher();
		return $root->getListeners($eventName);
	 }

	/**
	 * Register an event listener with the dispatcher.
	 *
	 * @param mixed   $listener
	 * @return void
	 * @static 
	 */
	 public static function makeListener($listener){
		$root = new \Illuminate\Events\Dispatcher();
		$root->makeListener($listener);
	 }

	/**
	 * Create a class based listener using the IoC container.
	 *
	 * @param mixed    $listener
	 * @return Closure
	 * @static 
	 */
	 public static function createClassListener($listener){
		$root = new \Illuminate\Events\Dispatcher();
		return $root->createClassListener($listener);
	 }

	/**
	 * Remove a set of listeners from the dispatcher.
	 *
	 * @param string  $event
	 * @return void
	 * @static 
	 */
	 public static function forget($event){
		$root = new \Illuminate\Events\Dispatcher();
		$root->forget($event);
	 }

}

class File extends Illuminate\Support\Facades\File{
	/**
	 * Determine if a file exists.
	 *
	 * @param string  $path
	 * @return bool
	 * @static 
	 */
	 public static function exists($path){
		$root = new \Illuminate\Filesystem\Filesystem();
		return $root->exists($path);
	 }

	/**
	 * Get the contents of a file.
	 *
	 * @param string  $path
	 * @return string
	 * @static 
	 */
	 public static function get($path){
		$root = new \Illuminate\Filesystem\Filesystem();
		return $root->get($path);
	 }

	/**
	 * Get the contents of a remote file.
	 *
	 * @param string  $path
	 * @return string
	 * @static 
	 */
	 public static function getRemote($path){
		$root = new \Illuminate\Filesystem\Filesystem();
		return $root->getRemote($path);
	 }

	/**
	 * Get the returned value of a file.
	 *
	 * @param string  $path
	 * @return mixed
	 * @static 
	 */
	 public static function getRequire($path){
		$root = new \Illuminate\Filesystem\Filesystem();
		return $root->getRequire($path);
	 }

	/**
	 * Require the given file once.
	 *
	 * @param string  $file
	 * @return void
	 * @static 
	 */
	 public static function requireOnce($file){
		$root = new \Illuminate\Filesystem\Filesystem();
		$root->requireOnce($file);
	 }

	/**
	 * Write the contents of a file.
	 *
	 * @param string  $path
	 * @param string  $contents
	 * @return int
	 * @static 
	 */
	 public static function put($path, $contents){
		$root = new \Illuminate\Filesystem\Filesystem();
		return $root->put($path, $contents);
	 }

	/**
	 * Append to a file.
	 *
	 * @param string  $path
	 * @param string  $data
	 * @return int
	 * @static 
	 */
	 public static function append($path, $data){
		$root = new \Illuminate\Filesystem\Filesystem();
		return $root->append($path, $data);
	 }

	/**
	 * Delete the file at a given path.
	 *
	 * @param string  $path
	 * @return bool
	 * @static 
	 */
	 public static function delete($path){
		$root = new \Illuminate\Filesystem\Filesystem();
		return $root->delete($path);
	 }

	/**
	 * Move a file to a new location.
	 *
	 * @param string  $path
	 * @param string  $target
	 * @return void
	 * @static 
	 */
	 public static function move($path, $target){
		$root = new \Illuminate\Filesystem\Filesystem();
		$root->move($path, $target);
	 }

	/**
	 * Copy a file to a new location.
	 *
	 * @param string  $path
	 * @param string  $target
	 * @return void
	 * @static 
	 */
	 public static function copy($path, $target){
		$root = new \Illuminate\Filesystem\Filesystem();
		$root->copy($path, $target);
	 }

	/**
	 * Extract the file extension from a file path.
	 *
	 * @param string  $path
	 * @return string
	 * @static 
	 */
	 public static function extension($path){
		$root = new \Illuminate\Filesystem\Filesystem();
		return $root->extension($path);
	 }

	/**
	 * Get the file type of a given file.
	 *
	 * @param string  $path
	 * @return string
	 * @static 
	 */
	 public static function type($path){
		$root = new \Illuminate\Filesystem\Filesystem();
		return $root->type($path);
	 }

	/**
	 * Get the file size of a given file.
	 *
	 * @param string  $path
	 * @return int
	 * @static 
	 */
	 public static function size($path){
		$root = new \Illuminate\Filesystem\Filesystem();
		return $root->size($path);
	 }

	/**
	 * Get the file's last modification time.
	 *
	 * @param string  $path
	 * @return int
	 * @static 
	 */
	 public static function lastModified($path){
		$root = new \Illuminate\Filesystem\Filesystem();
		return $root->lastModified($path);
	 }

	/**
	 * Determine if the given path is a directory.
	 *
	 * @param string  $directory
	 * @return bool
	 * @static 
	 */
	 public static function isDirectory($directory){
		$root = new \Illuminate\Filesystem\Filesystem();
		return $root->isDirectory($directory);
	 }

	/**
	 * Determine if the given path is writable.
	 *
	 * @param string  $path
	 * @return bool
	 * @static 
	 */
	 public static function isWritable($path){
		$root = new \Illuminate\Filesystem\Filesystem();
		return $root->isWritable($path);
	 }

	/**
	 * Determine if the given path is a file.
	 *
	 * @param string  $file
	 * @return bool
	 * @static 
	 */
	 public static function isFile($file){
		$root = new \Illuminate\Filesystem\Filesystem();
		return $root->isFile($file);
	 }

	/**
	 * Find path names matching a given pattern.
	 *
	 * @param string  $pattern
	 * @param int     $flags
	 * @return array
	 * @static 
	 */
	 public static function glob($pattern, $flags = 0){
		$root = new \Illuminate\Filesystem\Filesystem();
		return $root->glob($pattern, $flags);
	 }

	/**
	 * Get an array of all files in a directory.
	 *
	 * @param string  $directory
	 * @return array
	 * @static 
	 */
	 public static function files($directory){
		$root = new \Illuminate\Filesystem\Filesystem();
		return $root->files($directory);
	 }

	/**
	 * Get all of the files from the given directory (recursive).
	 *
	 * @param string  $directory
	 * @return array
	 * @static 
	 */
	 public static function allFiles($directory){
		$root = new \Illuminate\Filesystem\Filesystem();
		return $root->allFiles($directory);
	 }

	/**
	 * Get all of the directories within a given directory.
	 *
	 * @param string  $directory
	 * @return array
	 * @static 
	 */
	 public static function directories($directory){
		$root = new \Illuminate\Filesystem\Filesystem();
		return $root->directories($directory);
	 }

	/**
	 * Create a directory.
	 *
	 * @param string  $path
	 * @param int     $mode
	 * @param bool    $recursive
	 * @return bool
	 * @static 
	 */
	 public static function makeDirectory($path, $mode = 511, $recursive = false){
		$root = new \Illuminate\Filesystem\Filesystem();
		return $root->makeDirectory($path, $mode, $recursive);
	 }

	/**
	 * Copy a directory from one location to another.
	 *
	 * @param string  $directory
	 * @param string  $destination
	 * @param int     $options
	 * @return void
	 * @static 
	 */
	 public static function copyDirectory($directory, $destination, $options = null){
		$root = new \Illuminate\Filesystem\Filesystem();
		$root->copyDirectory($directory, $destination, $options);
	 }

	/**
	 * Recursively delete a directory.
	 * 
	 * The directory itself may be optionally preserved.
	 *
	 * @param string  $directory
	 * @param bool    $preserve
	 * @return void
	 * @static 
	 */
	 public static function deleteDirectory($directory, $preserve = false){
		$root = new \Illuminate\Filesystem\Filesystem();
		$root->deleteDirectory($directory, $preserve);
	 }

	/**
	 * Empty the specified directory of all files and folders.
	 *
	 * @param string  $directory
	 * @return void
	 * @static 
	 */
	 public static function cleanDirectory($directory){
		$root = new \Illuminate\Filesystem\Filesystem();
		$root->cleanDirectory($directory);
	 }

}

class Form extends Illuminate\Support\Facades\Form{
	/**
	 * Create a new form builder instance.
	 *
	 * @param \Illuminate\Routing\UrlGenerator  $url
	 * @param \Illuminate\Html\HtmlBuilder  $html
	 * @param string  $csrfToken
	 * @return self 
	 * @static 
	 */
	 public static function __construct($html, $url, $csrfToken){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		$root->__construct($html, $url, $csrfToken);
	 }

	/**
	 * Open up a new HTML form.
	 *
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function open($options = array()){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->open($options);
	 }

	/**
	 * Create a new model based form builder.
	 *
	 * @param mixed  $model
	 * @param array  $options
	 * @return string
	 * @static 
	 */
	 public static function model($model, $options = array()){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->model($model, $options);
	 }

	/**
	 * Close the current form.
	 *
	 * @return string
	 * @static 
	 */
	 public static function close(){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->close();
	 }

	/**
	 * Generate a hidden field with the current CSRF token.
	 *
	 * @return string
	 * @static 
	 */
	 public static function token(){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->token();
	 }

	/**
	 * Create a form label element.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function label($name, $value = null, $options = array()){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->label($name, $value, $options);
	 }

	/**
	 * Create a form input field.
	 *
	 * @param string  $type
	 * @param string  $name
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function input($type, $name, $value = null, $options = array()){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->input($type, $name, $value, $options);
	 }

	/**
	 * Create a text input field.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function text($name, $value = null, $options = array()){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->text($name, $value, $options);
	 }

	/**
	 * Create a password input field.
	 *
	 * @param string  $name
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function password($name, $options = array()){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->password($name, $options);
	 }

	/**
	 * Create a hidden input field.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function hidden($name, $value = null, $options = array()){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->hidden($name, $value, $options);
	 }

	/**
	 * Create an e-mail input field.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function email($name, $value = null, $options = array()){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->email($name, $value, $options);
	 }

	/**
	 * Create a file input field.
	 *
	 * @param string  $name
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function file($name, $options = array()){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->file($name, $options);
	 }

	/**
	 * Create a textarea input field.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function textarea($name, $value = null, $options = array()){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->textarea($name, $value, $options);
	 }

	/**
	 * Create a select box field.
	 *
	 * @param string  $name
	 * @param array   $list
	 * @param string  $selected
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function select($name, $list = array(), $selected = null, $options = array()){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->select($name, $list, $selected, $options);
	 }

	/**
	 * Create a checkbox input field.
	 *
	 * @param string  $name
	 * @param mixed   $value
	 * @param bool    $checked
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function checkbox($name, $value = 1, $checked = null, $options = array()){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->checkbox($name, $value, $checked, $options);
	 }

	/**
	 * Create a radio button input field.
	 *
	 * @param string  $name
	 * @param mixed   $value
	 * @param bool    $checked
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function radio($name, $value = null, $checked = null, $options = array()){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->radio($name, $value, $checked, $options);
	 }

	/**
	 * Create a HTML reset input element.
	 *
	 * @param string  $value
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function reset($value, $attributes = array()){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->reset($value, $attributes);
	 }

	/**
	 * Create a HTML image input element.
	 *
	 * @param string  $url
	 * @param string  $name
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function image($url, $name = null, $attributes = array()){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->image($url, $name, $attributes);
	 }

	/**
	 * Create a submit button element.
	 *
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function submit($value = null, $options = array()){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->submit($value, $options);
	 }

	/**
	 * Create a button element.
	 *
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function button($value = null, $options = array()){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->button($value, $options);
	 }

	/**
	 * Register a custom form macro.
	 *
	 * @param string    $name
	 * @param callable  $macro
	 * @return void
	 * @static 
	 */
	 public static function macro($name, $macro){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		$root->macro($name, $macro);
	 }

	/**
	 * Get the value that should be assigned to the field.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function getValueAttribute($name, $value = null){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->getValueAttribute($name, $value);
	 }

	/**
	 * Get the session store implementation.
	 *
	 * @return \Illuminate\Session\Store  $session
	 * @static 
	 */
	 public static function getSessionStore(){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->getSessionStore();
	 }

	/**
	 * Set the session store implementation.
	 *
	 * @param \Illuminate\Session\Store  $session
	 * @return \Illuminate\Html\FormBuilder
	 * @static 
	 */
	 public static function setSessionStore($session){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->setSessionStore($session);
	 }

	/**
	 * Dynamically handle calls to the form builder.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
		$root = new \Illuminate\Html\FormBuilder(null,null,null);
		return $root->__call($method, $parameters);
	 }

}

class Hash extends Illuminate\Support\Facades\Hash{
	/**
	 * Hash the given value.
	 *
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function make($value, $options = array()){
		$root = new \Illuminate\Hashing\BcryptHasher();
		return $root->make($value, $options);
	 }

	/**
	 * Check the given plain value against a hash.
	 *
	 * @param string  $value
	 * @param string  $hashedValue
	 * @param array   $options
	 * @return bool
	 * @static 
	 */
	 public static function check($value, $hashedValue, $options = array()){
		$root = new \Illuminate\Hashing\BcryptHasher();
		return $root->check($value, $hashedValue, $options);
	 }

	/**
	 * Check if the given hash has been hashed using the given options.
	 *
	 * @param string  $hashedValue
	 * @param array   $options
	 * @return bool
	 * @static 
	 */
	 public static function needsRehash($hashedValue, $options = array()){
		$root = new \Illuminate\Hashing\BcryptHasher();
		return $root->needsRehash($hashedValue, $options);
	 }

}

class HTML extends Illuminate\Support\Facades\HTML{
	/**
	 * Create a new HTML builder instance.
	 *
	 * @param \Illuminate\Routing\UrlGenerator  $url
	 * @return self 
	 * @static 
	 */
	 public static function __construct($url = null){
		$root = new \Illuminate\Html\HtmlBuilder();
		$root->__construct($url);
	 }

	/**
	 * Register a custom HTML macro.
	 *
	 * @param string    $name
	 * @param callable  $macro
	 * @return void
	 * @static 
	 */
	 public static function macro($name, $macro){
		$root = new \Illuminate\Html\HtmlBuilder();
		$root->macro($name, $macro);
	 }

	/**
	 * Convert an HTML string to entities.
	 *
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function entities($value){
		$root = new \Illuminate\Html\HtmlBuilder();
		return $root->entities($value);
	 }

	/**
	 * Convert entities to HTML characters.
	 *
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function decode($value){
		$root = new \Illuminate\Html\HtmlBuilder();
		return $root->decode($value);
	 }

	/**
	 * Generate a link to a JavaScript file.
	 *
	 * @param string  $url
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function script($url, $attributes = array()){
		$root = new \Illuminate\Html\HtmlBuilder();
		return $root->script($url, $attributes);
	 }

	/**
	 * Generate a link to a CSS file.
	 *
	 * @param string  $url
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function style($url, $attributes = array()){
		$root = new \Illuminate\Html\HtmlBuilder();
		return $root->style($url, $attributes);
	 }

	/**
	 * Generate an HTML image element.
	 *
	 * @param string  $url
	 * @param string  $alt
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function image($url, $alt = null, $attributes = array()){
		$root = new \Illuminate\Html\HtmlBuilder();
		return $root->image($url, $alt, $attributes);
	 }

	/**
	 * Generate a HTML link.
	 *
	 * @param string  $url
	 * @param string  $title
	 * @param array   $attributes
	 * @param bool    $secure
	 * @return string
	 * @static 
	 */
	 public static function link($url, $title = null, $attributes = array(), $secure = null){
		$root = new \Illuminate\Html\HtmlBuilder();
		return $root->link($url, $title, $attributes, $secure);
	 }

	/**
	 * Generate a HTTPS HTML link.
	 *
	 * @param string  $url
	 * @param string  $title
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function secureLink($url, $title = null, $attributes = array()){
		$root = new \Illuminate\Html\HtmlBuilder();
		return $root->secureLink($url, $title, $attributes);
	 }

	/**
	 * Generate a HTML link to an asset.
	 *
	 * @param string  $url
	 * @param string  $title
	 * @param array   $attributes
	 * @param bool    $secure
	 * @return string
	 * @static 
	 */
	 public static function linkAsset($url, $title = null, $attributes = array(), $secure = null){
		$root = new \Illuminate\Html\HtmlBuilder();
		return $root->linkAsset($url, $title, $attributes, $secure);
	 }

	/**
	 * Generate a HTTPS HTML link to an asset.
	 *
	 * @param string  $url
	 * @param string  $title
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function linkSecureAsset($url, $title = null, $attributes = array()){
		$root = new \Illuminate\Html\HtmlBuilder();
		return $root->linkSecureAsset($url, $title, $attributes);
	 }

	/**
	 * Generate a HTML link to a named route.
	 *
	 * @param string  $name
	 * @param string  $title
	 * @param array   $parameters
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function linkRoute($name, $title = null, $parameters = array(), $attributes = array()){
		$root = new \Illuminate\Html\HtmlBuilder();
		return $root->linkRoute($name, $title, $parameters, $attributes);
	 }

	/**
	 * Generate a HTML link to a controller action.
	 *
	 * @param string  $action
	 * @param string  $title
	 * @param array   $parameters
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function linkAction($action, $title = null, $parameters = array(), $attributes = array()){
		$root = new \Illuminate\Html\HtmlBuilder();
		return $root->linkAction($action, $title, $parameters, $attributes);
	 }

	/**
	 * Generate a HTML link to an email address.
	 *
	 * @param string  $email
	 * @param string  $title
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function mailto($email, $title = null, $attributes = array()){
		$root = new \Illuminate\Html\HtmlBuilder();
		return $root->mailto($email, $title, $attributes);
	 }

	/**
	 * Obfuscate an e-mail address to prevent spam-bots from sniffing it.
	 *
	 * @param string  $email
	 * @return string
	 * @static 
	 */
	 public static function email($email){
		$root = new \Illuminate\Html\HtmlBuilder();
		return $root->email($email);
	 }

	/**
	 * Generate an ordered list of items.
	 *
	 * @param array   $list
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function ol($list, $attributes = array()){
		$root = new \Illuminate\Html\HtmlBuilder();
		return $root->ol($list, $attributes);
	 }

	/**
	 * Generate an un-ordered list of items.
	 *
	 * @param array   $list
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function ul($list, $attributes = array()){
		$root = new \Illuminate\Html\HtmlBuilder();
		return $root->ul($list, $attributes);
	 }

	/**
	 * Build an HTML attribute string from an array.
	 *
	 * @param array  $attributes
	 * @return string
	 * @static 
	 */
	 public static function attributes($attributes){
		$root = new \Illuminate\Html\HtmlBuilder();
		return $root->attributes($attributes);
	 }

	/**
	 * Obfuscate a string to prevent spam-bots from sniffing it.
	 *
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function obfuscate($value){
		$root = new \Illuminate\Html\HtmlBuilder();
		return $root->obfuscate($value);
	 }

	/**
	 * Dynamically handle calls to the html class.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
		$root = new \Illuminate\Html\HtmlBuilder();
		return $root->__call($method, $parameters);
	 }

}

class Input extends Illuminate\Support\Facades\Input{
	/**
	 * Return the Request instance.
	 *
	 * @return \Illuminate\Http\Request
	 * @static 
	 */
	 public static function instance(){
		$root = new \Illuminate\Http\Request();
		return $root->instance();
	 }

	/**
	 * Get the root URL for the application.
	 *
	 * @return string
	 * @static 
	 */
	 public static function root(){
		$root = new \Illuminate\Http\Request();
		return $root->root();
	 }

	/**
	 * Get the URL (no query string) for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function url(){
		$root = new \Illuminate\Http\Request();
		return $root->url();
	 }

	/**
	 * Get the full URL for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function fullUrl(){
		$root = new \Illuminate\Http\Request();
		return $root->fullUrl();
	 }

	/**
	 * Get the current path info for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function path(){
		$root = new \Illuminate\Http\Request();
		return $root->path();
	 }

	/**
	 * Get a segment from the URI (1 based index).
	 *
	 * @param string  $index
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function segment($index, $default = null){
		$root = new \Illuminate\Http\Request();
		return $root->segment($index, $default);
	 }

	/**
	 * Get all of the segments for the request path.
	 *
	 * @return array
	 * @static 
	 */
	 public static function segments(){
		$root = new \Illuminate\Http\Request();
		return $root->segments();
	 }

	/**
	 * Determine if the current request URI matches a pattern.
	 *
	 * @param string  $pattern
	 * @return bool
	 * @static 
	 */
	 public static function is($pattern){
		$root = new \Illuminate\Http\Request();
		return $root->is($pattern);
	 }

	/**
	 * Determine if the request is the result of an AJAX call.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function ajax(){
		$root = new \Illuminate\Http\Request();
		return $root->ajax();
	 }

	/**
	 * Determine if the request is over HTTPS.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function secure(){
		$root = new \Illuminate\Http\Request();
		return $root->secure();
	 }

	/**
	 * Determine if the request contains a given input item.
	 *
	 * @param string|array  $key
	 * @return bool
	 * @static 
	 */
	 public static function has($key){
		$root = new \Illuminate\Http\Request();
		return $root->has($key);
	 }

	/**
	 * Get all of the input and files for the request.
	 *
	 * @return array
	 * @static 
	 */
	 public static function all(){
		$root = new \Illuminate\Http\Request();
		return $root->all();
	 }

	/**
	 * Retrieve an input item from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function input($key = null, $default = null){
		$root = new \Illuminate\Http\Request();
		return $root->input($key, $default);
	 }

	/**
	 * Get a subset of the items from the input data.
	 *
	 * @param array  $keys
	 * @return array
	 * @static 
	 */
	 public static function only($keys){
		$root = new \Illuminate\Http\Request();
		return $root->only($keys);
	 }

	/**
	 * Get all of the input except for a specified array of items.
	 *
	 * @param array  $keys
	 * @return array
	 * @static 
	 */
	 public static function except($keys){
		$root = new \Illuminate\Http\Request();
		return $root->except($keys);
	 }

	/**
	 * Retrieve a query string item from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function query($key = null, $default = null){
		$root = new \Illuminate\Http\Request();
		return $root->query($key, $default);
	 }

	/**
	 * Retrieve a cookie from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function cookie($key = null, $default = null){
		$root = new \Illuminate\Http\Request();
		return $root->cookie($key, $default);
	 }

	/**
	 * Retrieve a file from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return \Symfony\Component\HttpFoundation\File\UploadedFile
	 * @static 
	 */
	 public static function file($key = null, $default = null){
		$root = new \Illuminate\Http\Request();
		return $root->file($key, $default);
	 }

	/**
	 * Determine if the uploaded data contains a file.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function hasFile($key){
		$root = new \Illuminate\Http\Request();
		return $root->hasFile($key);
	 }

	/**
	 * Retrieve a header from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function header($key = null, $default = null){
		$root = new \Illuminate\Http\Request();
		return $root->header($key, $default);
	 }

	/**
	 * Retrieve a server variable from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function server($key = null, $default = null){
		$root = new \Illuminate\Http\Request();
		return $root->server($key, $default);
	 }

	/**
	 * Retrieve an old input item.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function old($key = null, $default = null){
		$root = new \Illuminate\Http\Request();
		return $root->old($key, $default);
	 }

	/**
	 * Flash the input for the current request to the session.
	 *
	 * @param string $filter
	 * @param array  $keys
	 * @return void
	 * @static 
	 */
	 public static function flash($filter = null, $keys = array()){
		$root = new \Illuminate\Http\Request();
		$root->flash($filter, $keys);
	 }

	/**
	 * Flash only some of the input to the session.
	 *
	 * @param dynamic  string
	 * @return void
	 * @static 
	 */
	 public static function flashOnly($keys){
		$root = new \Illuminate\Http\Request();
		$root->flashOnly($keys);
	 }

	/**
	 * Flash only some of the input to the session.
	 *
	 * @param dynamic  string
	 * @return void
	 * @static 
	 */
	 public static function flashExcept($keys){
		$root = new \Illuminate\Http\Request();
		$root->flashExcept($keys);
	 }

	/**
	 * Flush all of the old input from the session.
	 *
	 * @return void
	 * @static 
	 */
	 public static function flush(){
		$root = new \Illuminate\Http\Request();
		$root->flush();
	 }

	/**
	 * Merge new input into the current request's input array.
	 *
	 * @param array  $input
	 * @return void
	 * @static 
	 */
	 public static function merge($input){
		$root = new \Illuminate\Http\Request();
		$root->merge($input);
	 }

	/**
	 * Replace the input for the current request.
	 *
	 * @param array  $input
	 * @return void
	 * @static 
	 */
	 public static function replace($input){
		$root = new \Illuminate\Http\Request();
		$root->replace($input);
	 }

	/**
	 * Get the JSON payload for the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function json($key = null, $default = null){
		$root = new \Illuminate\Http\Request();
		return $root->json($key, $default);
	 }

	/**
	 * Determine if the request is sending JSON.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function isJson(){
		$root = new \Illuminate\Http\Request();
		return $root->isJson();
	 }

	/**
	 * Determine if the current request is asking for JSON in return.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function wantsJson(){
		$root = new \Illuminate\Http\Request();
		return $root->wantsJson();
	 }

	/**
	 * Get the Illuminate session store implementation.
	 *
	 * @return \Illuminate\Session\Store
	 * @static 
	 */
	 public static function getSessionStore(){
		$root = new \Illuminate\Http\Request();
		return $root->getSessionStore();
	 }

	/**
	 * Set the Illuminate session store implementation.
	 *
	 * @param \Illuminate\Session\Store  $session
	 * @return void
	 * @static 
	 */
	 public static function setSessionStore($session){
		$root = new \Illuminate\Http\Request();
		$root->setSessionStore($session);
	 }

	/**
	 * Determine if the session store has been set.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function hasSessionStore(){
		$root = new \Illuminate\Http\Request();
		return $root->hasSessionStore();
	 }

	/**
	 * Constructor.
	 *
	 * @param array  $query      The GET parameters
	 * @param array  $request    The POST parameters
	 * @param array  $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array  $cookies    The COOKIE parameters
	 * @param array  $files      The FILES parameters
	 * @param array  $server     The SERVER parameters
	 * @param string $content    The raw body data
	 * @api 
	 * @static 
	 */
	 public static function __construct($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->__construct($query, $request, $attributes, $cookies, $files, $server, $content);
	 }

	/**
	 * Sets the parameters for this request.
	 * 
	 * This method also re-initializes all properties.
	 *
	 * @param array  $query      The GET parameters
	 * @param array  $request    The POST parameters
	 * @param array  $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array  $cookies    The COOKIE parameters
	 * @param array  $files      The FILES parameters
	 * @param array  $server     The SERVER parameters
	 * @param string $content    The raw body data
	 * @api 
	 * @static 
	 */
	 public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->initialize($query, $request, $attributes, $cookies, $files, $server, $content);
	 }

	/**
	 * Creates a new request with values from PHP's super globals.
	 *
	 * @return Request A new request
	 * @api 
	 * @static 
	 */
	 public static function createFromGlobals(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->createFromGlobals();
	 }

	/**
	 * Creates a Request based on a given URI and configuration.
	 * 
	 * The information contained in the URI always take precedence
	 * over the other information (server and parameters).
	 *
	 * @param string $uri        The URI
	 * @param string $method     The HTTP method
	 * @param array  $parameters The query (GET) or request (POST) parameters
	 * @param array  $cookies    The request cookies ($_COOKIE)
	 * @param array  $files      The request files ($_FILES)
	 * @param array  $server     The server parameters ($_SERVER)
	 * @param string $content    The raw body data
	 * @return Request A Request instance
	 * @api 
	 * @static 
	 */
	 public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->create($uri, $method, $parameters, $cookies, $files, $server, $content);
	 }

	/**
	 * Clones a request and overrides some of its parameters.
	 *
	 * @param array $query      The GET parameters
	 * @param array $request    The POST parameters
	 * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array $cookies    The COOKIE parameters
	 * @param array $files      The FILES parameters
	 * @param array $server     The SERVER parameters
	 * @return Request The duplicated request
	 * @api 
	 * @static 
	 */
	 public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->duplicate($query, $request, $attributes, $cookies, $files, $server);
	 }

	/**
	 * Returns the request as a string.
	 *
	 * @return string The request
	 * @static 
	 */
	 public static function __toString(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->__toString();
	 }

	/**
	 * Overrides the PHP global variables according to this request instance.
	 * 
	 * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
	 * $_FILES is never override, see rfc1867
	 *
	 * @api 
	 * @static 
	 */
	 public static function overrideGlobals(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->overrideGlobals();
	 }

	/**
	 * Sets a list of trusted proxies.
	 * 
	 * You should only list the reverse proxies that you manage directly.
	 *
	 * @param array $proxies A list of trusted proxies
	 * @api 
	 * @static 
	 */
	 public static function setTrustedProxies($proxies){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->setTrustedProxies($proxies);
	 }

	/**
	 * Gets the list of trusted proxies.
	 *
	 * @return array An array of trusted proxies.
	 * @static 
	 */
	 public static function getTrustedProxies(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getTrustedProxies();
	 }

	/**
	 * Sets the name for trusted headers.
	 * 
	 * The following header keys are supported:
	 * 
	 *  * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
	 *  * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getClientHost())
	 *  * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getClientPort())
	 *  * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
	 * 
	 * Setting an empty value allows to disable the trusted header for the given key.
	 *
	 * @param string $key   The header key
	 * @param string $value The header name
	 * @throws \InvalidArgumentException
	 * @static 
	 */
	 public static function setTrustedHeaderName($key, $value){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->setTrustedHeaderName($key, $value);
	 }

	/**
	 * Gets the trusted proxy header name.
	 *
	 * @param string $key The header key
	 * @return string The header name
	 * @throws \InvalidArgumentException
	 * @static 
	 */
	 public static function getTrustedHeaderName($key){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getTrustedHeaderName($key);
	 }

	/**
	 * Normalizes a query string.
	 * 
	 * It builds a normalized query string, where keys/value pairs are alphabetized,
	 * have consistent escaping and unneeded delimiters are removed.
	 *
	 * @param string $qs Query string
	 * @return string A normalized query string for the Request
	 * @static 
	 */
	 public static function normalizeQueryString($qs){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->normalizeQueryString($qs);
	 }

	/**
	 * Enables support for the _method request parameter to determine the intended HTTP method.
	 * 
	 * Be warned that enabling this feature might lead to CSRF issues in your code.
	 * Check that you are using CSRF tokens when required.
	 * 
	 * The HTTP method can only be overridden when the real HTTP method is POST.
	 *
	 * @static 
	 */
	 public static function enableHttpMethodParameterOverride(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->enableHttpMethodParameterOverride();
	 }

	/**
	 * Checks whether support for the _method request parameter is enabled.
	 *
	 * @return Boolean True when the _method request parameter is enabled, false otherwise
	 * @static 
	 */
	 public static function getHttpMethodParameterOverride(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getHttpMethodParameterOverride();
	 }

	/**
	 * Gets a "parameter" value.
	 * 
	 * This method is mainly useful for libraries that want to provide some flexibility.
	 * 
	 * Order of precedence: GET, PATH, POST
	 * 
	 * Avoid using this method in controllers:
	 * 
	 *  * slow
	 *  * prefer to get from a "named" source
	 * 
	 * It is better to explicitly get request parameters from the appropriate
	 * public property instead (query, attributes, request).
	 *
	 * @param string  $key     the key
	 * @param mixed   $default the default value
	 * @param Boolean $deep    is parameter deep in multidimensional array
	 * @return mixed
	 * @static 
	 */
	 public static function get($key, $default = null, $deep = false){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->get($key, $default, $deep);
	 }

	/**
	 * Gets the Session.
	 *
	 * @return SessionInterface|null The session
	 * @api 
	 * @static 
	 */
	 public static function getSession(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getSession();
	 }

	/**
	 * Whether the request contains a Session which was started in one of the
	 * previous requests.
	 *
	 * @return Boolean
	 * @api 
	 * @static 
	 */
	 public static function hasPreviousSession(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->hasPreviousSession();
	 }

	/**
	 * Whether the request contains a Session object.
	 * 
	 * This method does not give any information about the state of the session object,
	 * like whether the session is started or not. It is just a way to check if this Request
	 * is associated with a Session instance.
	 *
	 * @return Boolean true when the Request contains a Session object, false otherwise
	 * @api 
	 * @static 
	 */
	 public static function hasSession(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->hasSession();
	 }

	/**
	 * Sets the Session.
	 *
	 * @param SessionInterface $session The Session
	 * @api 
	 * @static 
	 */
	 public static function setSession($session){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->setSession($session);
	 }

	/**
	 * Returns the client IP addresses.
	 * 
	 * The most trusted IP address is first, and the less trusted one last.
	 * The "real" client IP address is the last one, but this is also the
	 * less trusted one.
	 * 
	 * Use this method carefully; you should use getClientIp() instead.
	 *
	 * @return array The client IP addresses
	 * @see getClientIp()
	 * @static 
	 */
	 public static function getClientIps(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getClientIps();
	 }

	/**
	 * Returns the client IP address.
	 * 
	 * This method can read the client IP address from the "X-Forwarded-For" header
	 * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
	 * header value is a comma+space separated list of IP addresses, the left-most
	 * being the original client, and each successive proxy that passed the request
	 * adding the IP address where it received the request from.
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-For",
	 * ("Client-Ip" for instance), configure it via "setTrustedHeaderName()" with
	 * the "client-ip" key.
	 *
	 * @return string The client IP address
	 * @see getClientIps()
	 * @see http://en.wikipedia.org/wiki/X-Forwarded-For
	 * @api 
	 * @static 
	 */
	 public static function getClientIp(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getClientIp();
	 }

	/**
	 * Returns current script name.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getScriptName(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getScriptName();
	 }

	/**
	 * Returns the path being requested relative to the executed script.
	 * 
	 * The path info always starts with a /.
	 * 
	 * Suppose this request is instantiated from /mysite on localhost:
	 * 
	 *  * http://localhost/mysite              returns an empty string
	 *  * http://localhost/mysite/about        returns '/about'
	 *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
	 *  * http://localhost/mysite/about?var=1  returns '/about'
	 *
	 * @return string The raw path (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getPathInfo(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getPathInfo();
	 }

	/**
	 * Returns the root path from which this request is executed.
	 * 
	 * Suppose that an index.php file instantiates this request object:
	 * 
	 *  * http://localhost/index.php         returns an empty string
	 *  * http://localhost/index.php/page    returns an empty string
	 *  * http://localhost/web/index.php     returns '/web'
	 *  * http://localhost/we%20b/index.php  returns '/we%20b'
	 *
	 * @return string The raw path (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getBasePath(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getBasePath();
	 }

	/**
	 * Returns the root url from which this request is executed.
	 * 
	 * The base URL never ends with a /.
	 * 
	 * This is similar to getBasePath(), except that it also includes the
	 * script filename (e.g. index.php) if one exists.
	 *
	 * @return string The raw url (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getBaseUrl(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getBaseUrl();
	 }

	/**
	 * Gets the request's scheme.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getScheme(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getScheme();
	 }

	/**
	 * Returns the port on which the request is made.
	 * 
	 * This method can read the client port from the "X-Forwarded-Port" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * 
	 * The "X-Forwarded-Port" header must contain the client port.
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-Port",
	 * configure it via "setTrustedHeaderName()" with the "client-port" key.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getPort(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getPort();
	 }

	/**
	 * Returns the user.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function getUser(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getUser();
	 }

	/**
	 * Returns the password.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function getPassword(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getPassword();
	 }

	/**
	 * Gets the user info.
	 *
	 * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
	 * @static 
	 */
	 public static function getUserInfo(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getUserInfo();
	 }

	/**
	 * Returns the HTTP host being requested.
	 * 
	 * The port name will be appended to the host if it's non-standard.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getHttpHost(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getHttpHost();
	 }

	/**
	 * Returns the requested URI.
	 *
	 * @return string The raw URI (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getRequestUri(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getRequestUri();
	 }

	/**
	 * Gets the scheme and HTTP host.
	 * 
	 * If the URL was called with basic authentication, the user
	 * and the password are not added to the generated string.
	 *
	 * @return string The scheme and HTTP host
	 * @static 
	 */
	 public static function getSchemeAndHttpHost(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getSchemeAndHttpHost();
	 }

	/**
	 * Generates a normalized URI for the Request.
	 *
	 * @return string A normalized URI for the Request
	 * @see getQueryString()
	 * @api 
	 * @static 
	 */
	 public static function getUri(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getUri();
	 }

	/**
	 * Generates a normalized URI for the given path.
	 *
	 * @param string $path A path to use instead of the current one
	 * @return string The normalized URI for the path
	 * @api 
	 * @static 
	 */
	 public static function getUriForPath($path){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getUriForPath($path);
	 }

	/**
	 * Generates the normalized query string for the Request.
	 * 
	 * It builds a normalized query string, where keys/value pairs are alphabetized
	 * and have consistent escaping.
	 *
	 * @return string|null A normalized query string for the Request
	 * @api 
	 * @static 
	 */
	 public static function getQueryString(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getQueryString();
	 }

	/**
	 * Checks whether the request is secure or not.
	 * 
	 * This method can read the client port from the "X-Forwarded-Proto" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * 
	 * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
	 * ("SSL_HTTPS" for instance), configure it via "setTrustedHeaderName()" with
	 * the "client-proto" key.
	 *
	 * @return Boolean
	 * @api 
	 * @static 
	 */
	 public static function isSecure(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->isSecure();
	 }

	/**
	 * Returns the host name.
	 * 
	 * This method can read the client port from the "X-Forwarded-Host" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * 
	 * The "X-Forwarded-Host" header must contain the client host name.
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-Host",
	 * configure it via "setTrustedHeaderName()" with the "client-host" key.
	 *
	 * @return string
	 * @throws \UnexpectedValueException when the host name is invalid
	 * @api 
	 * @static 
	 */
	 public static function getHost(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getHost();
	 }

	/**
	 * Sets the request method.
	 *
	 * @param string $method
	 * @api 
	 * @static 
	 */
	 public static function setMethod($method){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->setMethod($method);
	 }

	/**
	 * Gets the request "intended" method.
	 * 
	 * If the X-HTTP-Method-Override header is set, and if the method is a POST,
	 * then it is used to determine the "real" intended HTTP method.
	 * 
	 * The _method request parameter can also be used to determine the HTTP method,
	 * but only if enableHttpMethodParameterOverride() has been called.
	 * 
	 * The method is always an uppercased string.
	 *
	 * @return string The request method
	 * @api 
	 * @see getRealMethod
	 * @static 
	 */
	 public static function getMethod(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getMethod();
	 }

	/**
	 * Gets the "real" request method.
	 *
	 * @return string The request method
	 * @see getMethod
	 * @static 
	 */
	 public static function getRealMethod(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getRealMethod();
	 }

	/**
	 * Gets the mime type associated with the format.
	 *
	 * @param string $format The format
	 * @return string The associated mime type (null if not found)
	 * @api 
	 * @static 
	 */
	 public static function getMimeType($format){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getMimeType($format);
	 }

	/**
	 * Gets the format associated with the mime type.
	 *
	 * @param string $mimeType The associated mime type
	 * @return string|null The format (null if not found)
	 * @api 
	 * @static 
	 */
	 public static function getFormat($mimeType){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getFormat($mimeType);
	 }

	/**
	 * Associates a format with mime types.
	 *
	 * @param string       $format    The format
	 * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
	 * @api 
	 * @static 
	 */
	 public static function setFormat($format, $mimeTypes){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->setFormat($format, $mimeTypes);
	 }

	/**
	 * Gets the request format.
	 * 
	 * Here is the process to determine the format:
	 * 
	 *  * format defined by the user (with setRequestFormat())
	 *  * _format request parameter
	 *  * $default
	 *
	 * @param string $default The default format
	 * @return string The request format
	 * @api 
	 * @static 
	 */
	 public static function getRequestFormat($default = 'html'){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getRequestFormat($default);
	 }

	/**
	 * Sets the request format.
	 *
	 * @param string $format The request format.
	 * @api 
	 * @static 
	 */
	 public static function setRequestFormat($format){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->setRequestFormat($format);
	 }

	/**
	 * Gets the format associated with the request.
	 *
	 * @return string|null The format (null if no content type is present)
	 * @api 
	 * @static 
	 */
	 public static function getContentType(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getContentType();
	 }

	/**
	 * Sets the default locale.
	 *
	 * @param string $locale
	 * @api 
	 * @static 
	 */
	 public static function setDefaultLocale($locale){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->setDefaultLocale($locale);
	 }

	/**
	 * Sets the locale.
	 *
	 * @param string $locale
	 * @api 
	 * @static 
	 */
	 public static function setLocale($locale){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->setLocale($locale);
	 }

	/**
	 * Get the locale.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getLocale(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getLocale();
	 }

	/**
	 * Checks if the request method is of specified type.
	 *
	 * @param string $method Uppercase request method (GET, POST etc).
	 * @return Boolean
	 * @static 
	 */
	 public static function isMethod($method){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->isMethod($method);
	 }

	/**
	 * Checks whether the method is safe or not.
	 *
	 * @return Boolean
	 * @api 
	 * @static 
	 */
	 public static function isMethodSafe(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->isMethodSafe();
	 }

	/**
	 * Returns the request body content.
	 *
	 * @param Boolean $asResource If true, a resource will be returned
	 * @return string|resource The request body content or a resource to read the body stream.
	 * @throws \LogicException
	 * @static 
	 */
	 public static function getContent($asResource = false){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getContent($asResource);
	 }

	/**
	 * Gets the Etags.
	 *
	 * @return array The entity tags
	 * @static 
	 */
	 public static function getETags(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getETags();
	 }

	/**
	 * 
	 *
	 * @return Boolean
	 * @static 
	 */
	 public static function isNoCache(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->isNoCache();
	 }

	/**
	 * Returns the preferred language.
	 *
	 * @param array $locales An array of ordered available locales
	 * @return string|null The preferred locale
	 * @api 
	 * @static 
	 */
	 public static function getPreferredLanguage($locales = null){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getPreferredLanguage($locales);
	 }

	/**
	 * Gets a list of languages acceptable by the client browser.
	 *
	 * @return array Languages ordered in the user browser preferences
	 * @api 
	 * @static 
	 */
	 public static function getLanguages(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getLanguages();
	 }

	/**
	 * Gets a list of charsets acceptable by the client browser.
	 *
	 * @return array List of charsets in preferable order
	 * @api 
	 * @static 
	 */
	 public static function getCharsets(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getCharsets();
	 }

	/**
	 * Gets a list of content types acceptable by the client browser
	 *
	 * @return array List of content types in preferable order
	 * @api 
	 * @static 
	 */
	 public static function getAcceptableContentTypes(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getAcceptableContentTypes();
	 }

	/**
	 * Returns true if the request is a XMLHttpRequest.
	 * 
	 * It works if your JavaScript library set an X-Requested-With HTTP header.
	 * It is known to work with common JavaScript frameworks:
	 *
	 * @link http://en.wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
	 * @return Boolean true if the request is an XMLHttpRequest, false otherwise
	 * @api 
	 * @static 
	 */
	 public static function isXmlHttpRequest(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->isXmlHttpRequest();
	 }

}

class Lang extends Illuminate\Support\Facades\Lang{
	/**
	 * Create a new translator instance.
	 *
	 * @param \Illuminate\Translation\LoaderInterface  $loader
	 * @param string  $locale
	 * @return self 
	 * @static 
	 */
	 public static function __construct($loader, $locale){
		$root = new \Illuminate\Translation\Translator(null,null);
		$root->__construct($loader, $locale);
	 }

	/**
	 * Determine if a translation exists.
	 *
	 * @param string  $key
	 * @param string  $locale
	 * @return bool
	 * @static 
	 */
	 public static function has($key, $locale = null){
		$root = new \Illuminate\Translation\Translator(null,null);
		return $root->has($key, $locale);
	 }

	/**
	 * Get the translation for the given key.
	 *
	 * @param string  $key
	 * @param array   $replace
	 * @param string  $locale
	 * @return string
	 * @static 
	 */
	 public static function get($key, $replace = array(), $locale = null){
		$root = new \Illuminate\Translation\Translator(null,null);
		return $root->get($key, $replace, $locale);
	 }

	/**
	 * Get a translation according to an integer value.
	 *
	 * @param string  $key
	 * @param int     $number
	 * @param array   $replace
	 * @param string  $locale
	 * @return string
	 * @static 
	 */
	 public static function choice($key, $number, $replace = array(), $locale = null){
		$root = new \Illuminate\Translation\Translator(null,null);
		return $root->choice($key, $number, $replace, $locale);
	 }

	/**
	 * Get the translation for a given key.
	 *
	 * @param string  $id
	 * @param array   $parameters
	 * @param string  $domain
	 * @param string  $locale
	 * @return string
	 * @static 
	 */
	 public static function trans($id, $parameters = array(), $domain = 'messages', $locale = null){
		$root = new \Illuminate\Translation\Translator(null,null);
		return $root->trans($id, $parameters, $domain, $locale);
	 }

	/**
	 * Get a translation according to an integer value.
	 *
	 * @param string  $id
	 * @param int     $number
	 * @param array   $parameters
	 * @param string  $domain
	 * @param string  $locale
	 * @return string
	 * @static 
	 */
	 public static function transChoice($id, $number, $parameters = array(), $domain = 'messages', $locale = null){
		$root = new \Illuminate\Translation\Translator(null,null);
		return $root->transChoice($id, $number, $parameters, $domain, $locale);
	 }

	/**
	 * Load the specified language group.
	 *
	 * @param string  $namespace
	 * @param string  $group
	 * @param string  $locale
	 * @return void
	 * @static 
	 */
	 public static function load($namespace, $group, $locale){
		$root = new \Illuminate\Translation\Translator(null,null);
		$root->load($namespace, $group, $locale);
	 }

	/**
	 * Add a new namespace to the loader.
	 *
	 * @param string  $namespace
	 * @param string  $hint
	 * @return void
	 * @static 
	 */
	 public static function addNamespace($namespace, $hint){
		$root = new \Illuminate\Translation\Translator(null,null);
		$root->addNamespace($namespace, $hint);
	 }

	/**
	 * Parse a key into namespace, group, and item.
	 *
	 * @param string  $key
	 * @return array
	 * @static 
	 */
	 public static function parseKey($key){
		$root = new \Illuminate\Translation\Translator(null,null);
		return $root->parseKey($key);
	 }

	/**
	 * Get the message selector instance.
	 *
	 * @return \Symfony\Component\Translation\MessageSelector
	 * @static 
	 */
	 public static function getSelector(){
		$root = new \Illuminate\Translation\Translator(null,null);
		return $root->getSelector();
	 }

	/**
	 * Set the message selector instance.
	 *
	 * @param \Symfony\Component\Translation\MessageSelector  $selector
	 * @return void
	 * @static 
	 */
	 public static function setSelector($selector){
		$root = new \Illuminate\Translation\Translator(null,null);
		$root->setSelector($selector);
	 }

	/**
	 * Get the language line loader implementation.
	 *
	 * @return \Illuminate\Translation\LoaderInterface
	 * @static 
	 */
	 public static function getLoader(){
		$root = new \Illuminate\Translation\Translator(null,null);
		return $root->getLoader();
	 }

	/**
	 * Get the default locale being used.
	 *
	 * @return string
	 * @static 
	 */
	 public static function locale(){
		$root = new \Illuminate\Translation\Translator(null,null);
		return $root->locale();
	 }

	/**
	 * Get the default locale being used.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getLocale(){
		$root = new \Illuminate\Translation\Translator(null,null);
		return $root->getLocale();
	 }

	/**
	 * Set the default locale.
	 *
	 * @param string  $locale
	 * @return void
	 * @static 
	 */
	 public static function setLocale($locale){
		$root = new \Illuminate\Translation\Translator(null,null);
		$root->setLocale($locale);
	 }

	/**
	 * Set the parsed value of a key.
	 *
	 * @param string  $key
	 * @param array   $parsed
	 * @return void
	 * @static 
	 */
	 public static function setParsedKey($key, $parsed){
		$root = new \Illuminate\Support\NamespacedItemResolver();
		$root->setParsedKey($key, $parsed);
	 }

}

class Log extends Illuminate\Support\Facades\Log{
	/**
	 * Create a new log writer instance.
	 *
	 * @param \Monolog\Logger  $monolog
	 * @param \Illuminate\Events\Dispatcher  $dispatcher
	 * @return self 
	 * @static 
	 */
	 public static function __construct($monolog, $dispatcher = null){
		$root = new \Illuminate\Log\Writer(null);
		$root->__construct($monolog, $dispatcher);
	 }

	/**
	 * Register a file log handler.
	 *
	 * @param string  $path
	 * @param string  $level
	 * @return void
	 * @static 
	 */
	 public static function useFiles($path, $level = 'debug'){
		$root = new \Illuminate\Log\Writer(null);
		$root->useFiles($path, $level);
	 }

	/**
	 * Register a daily file log handler.
	 *
	 * @param string  $path
	 * @param int     $days
	 * @param string  $level
	 * @return void
	 * @static 
	 */
	 public static function useDailyFiles($path, $days = 0, $level = 'debug'){
		$root = new \Illuminate\Log\Writer(null);
		$root->useDailyFiles($path, $days, $level);
	 }

	/**
	 * Get the underlying Monolog instance.
	 *
	 * @return \Monolog\Logger
	 * @static 
	 */
	 public static function getMonolog(){
		$root = new \Illuminate\Log\Writer(null);
		return $root->getMonolog();
	 }

	/**
	 * Register a new callback handler for when
	 * a log event is triggered.
	 *
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function listen($callback){
		$root = new \Illuminate\Log\Writer(null);
		$root->listen($callback);
	 }

	/**
	 * Get the event dispatcher instance.
	 *
	 * @return \Illuminate\Events\Dispatcher
	 * @static 
	 */
	 public static function getEventDispatcher(){
		$root = new \Illuminate\Log\Writer(null);
		return $root->getEventDispatcher();
	 }

	/**
	 * Set the event dispatcher instance.
	 *
	 * @param \Illuminate\Events\Dispatcher
	 * @return void
	 * @static 
	 */
	 public static function setEventDispatcher($dispatcher){
		$root = new \Illuminate\Log\Writer(null);
		$root->setEventDispatcher($dispatcher);
	 }

	/**
	 * Dynamically handle error additions.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
		$root = new \Illuminate\Log\Writer(null);
		return $root->__call($method, $parameters);
	 }

}

class Mail extends Illuminate\Support\Facades\Mail{
	/**
	 * Create a new Mailer instance.
	 *
	 * @param \Illuminate\View\Environment  $views
	 * @param Swift_Mailer  $swift
	 * @return self 
	 * @static 
	 */
	 public static function __construct($views, $swift){
		$root = new \Illuminate\Mail\Mailer(null,null);
		$root->__construct($views, $swift);
	 }

	/**
	 * Set the global from address and name.
	 *
	 * @param string  $address
	 * @param string  $name
	 * @return void
	 * @static 
	 */
	 public static function alwaysFrom($address, $name = null){
		$root = new \Illuminate\Mail\Mailer(null,null);
		$root->alwaysFrom($address, $name);
	 }

	/**
	 * Send a new message when only a plain part.
	 *
	 * @param string  $view
	 * @param array   $data
	 * @param mixed  $callback
	 * @return void
	 * @static 
	 */
	 public static function plain($view, $data, $callback){
		$root = new \Illuminate\Mail\Mailer(null,null);
		$root->plain($view, $data, $callback);
	 }

	/**
	 * Send a new message using a view.
	 *
	 * @param string|array  $view
	 * @param array  $data
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function send($view, $data, $callback){
		$root = new \Illuminate\Mail\Mailer(null,null);
		$root->send($view, $data, $callback);
	 }

	/**
	 * Queue a new e-mail message for sending.
	 *
	 * @param string|array  $view
	 * @param array   $data
	 * @param Closure|string  $callback
	 * @param string  $queue
	 * @return void
	 * @static 
	 */
	 public static function queue($view, $data, $callback, $queue = null){
		$root = new \Illuminate\Mail\Mailer(null,null);
		$root->queue($view, $data, $callback, $queue);
	 }

	/**
	 * Queue a new e-mail message for sending on the given queue.
	 *
	 * @param string|array  $view
	 * @param array   $data
	 * @param Closure|string  $callback
	 * @param string  $queue
	 * @return void
	 * @static 
	 */
	 public static function queueOn($queue, $view, $data, $callback){
		$root = new \Illuminate\Mail\Mailer(null,null);
		$root->queueOn($queue, $view, $data, $callback);
	 }

	/**
	 * Queue a new e-mail message for sending after (n) seconds.
	 *
	 * @param int  $delay
	 * @param string|array  $view
	 * @param array  $data
	 * @param Closure|string  $callback
	 * @param string  $queue
	 * @return void
	 * @static 
	 */
	 public static function later($delay, $view, $data, $callback, $queue = null){
		$root = new \Illuminate\Mail\Mailer(null,null);
		$root->later($delay, $view, $data, $callback, $queue);
	 }

	/**
	 * Queue a new e-mail message for sending after (n) seconds on the given queue.
	 *
	 * @param string  $queue
	 * @param int  $delay
	 * @param string|array  $view
	 * @param array  $data
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function laterOn($queue, $delay, $view, $data, $callback){
		$root = new \Illuminate\Mail\Mailer(null,null);
		$root->laterOn($queue, $delay, $view, $data, $callback);
	 }

	/**
	 * Handle a queued e-mail message job.
	 *
	 * @param \Illuminate\Queue\Jobs\Job  $job
	 * @param array  $data
	 * @return void
	 * @static 
	 */
	 public static function handleQueuedMessage($job, $data){
		$root = new \Illuminate\Mail\Mailer(null,null);
		$root->handleQueuedMessage($job, $data);
	 }

	/**
	 * Tell the mailer to not really send messages.
	 *
	 * @param bool  $value
	 * @return void
	 * @static 
	 */
	 public static function pretend($value = true){
		$root = new \Illuminate\Mail\Mailer(null,null);
		$root->pretend($value);
	 }

	/**
	 * Get the view environment instance.
	 *
	 * @return \Illuminate\View\Environment
	 * @static 
	 */
	 public static function getViewEnvironment(){
		$root = new \Illuminate\Mail\Mailer(null,null);
		return $root->getViewEnvironment();
	 }

	/**
	 * Get the Swift Mailer instance.
	 *
	 * @return Swift_Mailer
	 * @static 
	 */
	 public static function getSwiftMailer(){
		$root = new \Illuminate\Mail\Mailer(null,null);
		return $root->getSwiftMailer();
	 }

	/**
	 * Set the Swift Mailer instance.
	 *
	 * @param Swift_Mailer  $swift
	 * @return void
	 * @static 
	 */
	 public static function setSwiftMailer($swift){
		$root = new \Illuminate\Mail\Mailer(null,null);
		$root->setSwiftMailer($swift);
	 }

	/**
	 * Set the log writer instance.
	 *
	 * @param \Illuminate\Log\Writer  $logger
	 * @return \Illuminate\Mail\Mailer
	 * @static 
	 */
	 public static function setLogger($logger){
		$root = new \Illuminate\Mail\Mailer(null,null);
		return $root->setLogger($logger);
	 }

	/**
	 * Set the queue manager instance.
	 *
	 * @param \Illuminate\Queue\QueueManager  $queue
	 * @return \Illuminate\Mail\Mailer
	 * @static 
	 */
	 public static function setQueue($queue){
		$root = new \Illuminate\Mail\Mailer(null,null);
		return $root->setQueue($queue);
	 }

	/**
	 * Set the IoC container instance.
	 *
	 * @param \Illuminate\Container\Container  $container
	 * @return void
	 * @static 
	 */
	 public static function setContainer($container){
		$root = new \Illuminate\Mail\Mailer(null,null);
		$root->setContainer($container);
	 }

}

class Paginator extends Illuminate\Support\Facades\Paginator{
	/**
	 * Create a new pagination environment.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @param \Illuminate\View\Environment  $view
	 * @param \Symfony\Component\Translation\TranslatorInterface  $trans
	 * @param string  $pageName
	 * @return self 
	 * @static 
	 */
	 public static function __construct($request, $view, $trans, $pageName = 'page'){
		$root = new \Illuminate\Pagination\Environment(null,null,null);
		$root->__construct($request, $view, $trans, $pageName);
	 }

	/**
	 * Get a new paginator instance.
	 *
	 * @param array  $items
	 * @param int    $total
	 * @param int    $perPage
	 * @return \Illuminate\Pagination\Paginator
	 * @static 
	 */
	 public static function make($items, $total, $perPage){
		$root = new \Illuminate\Pagination\Environment(null,null,null);
		return $root->make($items, $total, $perPage);
	 }

	/**
	 * Get the pagination view.
	 *
	 * @param \Illuminate\Pagination\Paginator  $paginator
	 * @return \Illuminate\View\View
	 * @static 
	 */
	 public static function getPaginationView($paginator){
		$root = new \Illuminate\Pagination\Environment(null,null,null);
		return $root->getPaginationView($paginator);
	 }

	/**
	 * Get the number of the current page.
	 *
	 * @return int
	 * @static 
	 */
	 public static function getCurrentPage(){
		$root = new \Illuminate\Pagination\Environment(null,null,null);
		return $root->getCurrentPage();
	 }

	/**
	 * Set the number of the current page.
	 *
	 * @param int  $number
	 * @return void
	 * @static 
	 */
	 public static function setCurrentPage($number){
		$root = new \Illuminate\Pagination\Environment(null,null,null);
		$root->setCurrentPage($number);
	 }

	/**
	 * Get the root URL for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getCurrentUrl(){
		$root = new \Illuminate\Pagination\Environment(null,null,null);
		return $root->getCurrentUrl();
	 }

	/**
	 * Set the base URL in use by the paginator.
	 *
	 * @param string  $baseUrl
	 * @return void
	 * @static 
	 */
	 public static function setBaseUrl($baseUrl){
		$root = new \Illuminate\Pagination\Environment(null,null,null);
		$root->setBaseUrl($baseUrl);
	 }

	/**
	 * Set the input page parameter name used by the paginator.
	 *
	 * @param string  $pageName
	 * @return void
	 * @static 
	 */
	 public static function setPageName($pageName){
		$root = new \Illuminate\Pagination\Environment(null,null,null);
		$root->setPageName($pageName);
	 }

	/**
	 * Get the input page parameter name used by the paginator.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getPageName(){
		$root = new \Illuminate\Pagination\Environment(null,null,null);
		return $root->getPageName();
	 }

	/**
	 * Get the name of the pagination view.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getViewName(){
		$root = new \Illuminate\Pagination\Environment(null,null,null);
		return $root->getViewName();
	 }

	/**
	 * Set the name of the pagination view.
	 *
	 * @param string  $viewName
	 * @return void
	 * @static 
	 */
	 public static function setViewName($viewName){
		$root = new \Illuminate\Pagination\Environment(null,null,null);
		$root->setViewName($viewName);
	 }

	/**
	 * Get the locale of the paginator.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getLocale(){
		$root = new \Illuminate\Pagination\Environment(null,null,null);
		return $root->getLocale();
	 }

	/**
	 * Set the locale of the paginator.
	 *
	 * @param string  $locale
	 * @return void
	 * @static 
	 */
	 public static function setLocale($locale){
		$root = new \Illuminate\Pagination\Environment(null,null,null);
		$root->setLocale($locale);
	 }

	/**
	 * Get the active request instance.
	 *
	 * @return \Symfony\Component\HttpFoundation\Request
	 * @static 
	 */
	 public static function getRequest(){
		$root = new \Illuminate\Pagination\Environment(null,null,null);
		return $root->getRequest();
	 }

	/**
	 * Set the active request instance.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @return void
	 * @static 
	 */
	 public static function setRequest($request){
		$root = new \Illuminate\Pagination\Environment(null,null,null);
		$root->setRequest($request);
	 }

	/**
	 * Get the current view driver.
	 *
	 * @return \Illuminate\View\Environment
	 * @static 
	 */
	 public static function getViewDriver(){
		$root = new \Illuminate\Pagination\Environment(null,null,null);
		return $root->getViewDriver();
	 }

	/**
	 * Set the current view driver.
	 *
	 * @param \Illuminate\View\Environment  $view
	 * @return void
	 * @static 
	 */
	 public static function setViewDriver($view){
		$root = new \Illuminate\Pagination\Environment(null,null,null);
		$root->setViewDriver($view);
	 }

	/**
	 * Get the translator instance.
	 *
	 * @return \Symfony\Component\Translation\TranslatorInterface
	 * @static 
	 */
	 public static function getTranslator(){
		$root = new \Illuminate\Pagination\Environment(null,null,null);
		return $root->getTranslator();
	 }

}

class Queue extends Illuminate\Support\Facades\Queue{
	/**
	 * Create a new queue manager instance.
	 *
	 * @param \Illuminate\Foundation\Application  $app
	 * @return self 
	 * @static 
	 */
	 public static function __construct($app){
		$root = new \Illuminate\Queue\QueueManager(null);
		$root->__construct($app);
	 }

	/**
	 * Resolve a queue connection instance.
	 *
	 * @param string  $name
	 * @return \Illuminate\Queue\QueueInterface
	 * @static 
	 */
	 public static function connection($name = null){
		$root = new \Illuminate\Queue\QueueManager(null);
		return $root->connection($name);
	 }

	/**
	 * Add a queue connection resolver.
	 *
	 * @param string   $driver
	 * @param Closure  $resolver
	 * @return void
	 * @static 
	 */
	 public static function addConnector($driver, $resolver){
		$root = new \Illuminate\Queue\QueueManager(null);
		$root->addConnector($driver, $resolver);
	 }

	/**
	 * Dynamically pass calls to the default connection.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
		$root = new \Illuminate\Queue\QueueManager(null);
		return $root->__call($method, $parameters);
	 }

	/**
	 * Push a new job onto the queue.
	 *
	 * @param string  $job
	 * @param mixed   $data
	 * @param string  $queue
	 * @return void
	 * @static 
	 */
	 public static function push($job, $data = '', $queue = null){
		$root = new \Illuminate\Queue\SyncQueue();
		$root->push($job, $data, $queue);
	 }

	/**
	 * Push a new job onto the queue after a delay.
	 *
	 * @param int     $delay
	 * @param string  $job
	 * @param mixed   $data
	 * @param string  $queue
	 * @return void
	 * @static 
	 */
	 public static function later($delay, $job, $data = '', $queue = null){
		$root = new \Illuminate\Queue\SyncQueue();
		$root->later($delay, $job, $data, $queue);
	 }

	/**
	 * Pop the next job off of the queue.
	 *
	 * @param string  $queue
	 * @return \Illuminate\Queue\Jobs\Job|null
	 * @static 
	 */
	 public static function pop($queue = null){
		$root = new \Illuminate\Queue\SyncQueue();
		return $root->pop($queue);
	 }

	/**
	 * Marshal a push queue request and fire the job.
	 *
	 * @return Illuminate\Http\Response
	 * @static 
	 */
	 public static function marshal(){
		$root = new \Illuminate\Queue\SyncQueue();
		return $root->marshal();
	 }

	/**
	 * Set the IoC container instance.
	 *
	 * @param \Illuminate\Container  $container
	 * @return void
	 * @static 
	 */
	 public static function setContainer($container){
		$root = new \Illuminate\Queue\SyncQueue();
		$root->setContainer($container);
	 }

}

class Redirect extends Illuminate\Support\Facades\Redirect{
	/**
	 * Create a new Redirector instance.
	 *
	 * @param \Illuminate\Routing\UrlGenerator  $generator
	 * @return self 
	 * @static 
	 */
	 public static function __construct($generator){
		$root = new \Illuminate\Routing\Redirector(null);
		$root->__construct($generator);
	 }

	/**
	 * Create a new redirect response to the "home" route.
	 *
	 * @param int  $status
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function home($status = 302){
		$root = new \Illuminate\Routing\Redirector(null);
		return $root->home($status);
	 }

	/**
	 * Create a new redirect response to the previous location.
	 *
	 * @param int    $status
	 * @param array  $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function back($status = 302, $headers = array()){
		$root = new \Illuminate\Routing\Redirector(null);
		return $root->back($status, $headers);
	 }

	/**
	 * Create a new redirect response to the current URI.
	 *
	 * @param int    $status
	 * @param array  $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function refresh($status = 302, $headers = array()){
		$root = new \Illuminate\Routing\Redirector(null);
		return $root->refresh($status, $headers);
	 }

	/**
	 * Create a new redirect response, while putting the current URL in the session.
	 *
	 * @param string  $path
	 * @param int     $status
	 * @param array   $headers
	 * @param bool    $secure
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function guest($path, $status = 302, $headers = array(), $secure = null){
		$root = new \Illuminate\Routing\Redirector(null);
		return $root->guest($path, $status, $headers, $secure);
	 }

	/**
	 * Create a new redirect response to the previously intended location.
	 *
	 * @param string  $default
	 * @param int     $status
	 * @param array   $headers
	 * @param bool    $secure
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function intended($default, $status = 302, $headers = array(), $secure = null){
		$root = new \Illuminate\Routing\Redirector(null);
		return $root->intended($default, $status, $headers, $secure);
	 }

	/**
	 * Create a new redirect response to the given path.
	 *
	 * @param string  $path
	 * @param int     $status
	 * @param array   $headers
	 * @param bool    $secure
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function to($path, $status = 302, $headers = array(), $secure = null){
		$root = new \Illuminate\Routing\Redirector(null);
		return $root->to($path, $status, $headers, $secure);
	 }

	/**
	 * Create a new redirect response to the given HTTPS path.
	 *
	 * @param string  $path
	 * @param int     $status
	 * @param array   $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function secure($path, $status = 302, $headers = array()){
		$root = new \Illuminate\Routing\Redirector(null);
		return $root->secure($path, $status, $headers);
	 }

	/**
	 * Create a new redirect response to a named route.
	 *
	 * @param string  $route
	 * @param array   $parameters
	 * @param int     $status
	 * @param array   $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function route($route, $parameters = array(), $status = 302, $headers = array()){
		$root = new \Illuminate\Routing\Redirector(null);
		return $root->route($route, $parameters, $status, $headers);
	 }

	/**
	 * Create a new redirect response to a controller action.
	 *
	 * @param string  $action
	 * @param array   $parameters
	 * @param int     $status
	 * @param array   $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function action($action, $parameters = array(), $status = 302, $headers = array()){
		$root = new \Illuminate\Routing\Redirector(null);
		return $root->action($action, $parameters, $status, $headers);
	 }

	/**
	 * Get the URL generator instance.
	 *
	 * @return \Illuminate\Routing\UrlGenerator
	 * @static 
	 */
	 public static function getUrlGenerator(){
		$root = new \Illuminate\Routing\Redirector(null);
		return $root->getUrlGenerator();
	 }

	/**
	 * Set the active session store.
	 *
	 * @param \Illuminate\Session\Store  $session
	 * @return void
	 * @static 
	 */
	 public static function setSession($session){
		$root = new \Illuminate\Routing\Redirector(null);
		$root->setSession($session);
	 }

}

class Redis extends Illuminate\Support\Facades\Redis{
	/**
	 * Create a new Redis connection instance.
	 *
	 * @param array  $servers
	 * @return self 
	 * @static 
	 */
	 public static function __construct($servers = array()){
		$root = new \Illuminate\Redis\Database();
		$root->__construct($servers);
	 }

	/**
	 * Get a specific Redis connection instance.
	 *
	 * @param string  $name
	 * @return \Predis\Connection\SingleConnectionInterface
	 * @static 
	 */
	 public static function connection($name = 'default'){
		$root = new \Illuminate\Redis\Database();
		return $root->connection($name);
	 }

	/**
	 * Run a command against the Redis database.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function command($method, $parameters = array()){
		$root = new \Illuminate\Redis\Database();
		return $root->command($method, $parameters);
	 }

	/**
	 * Dynamically make a Redis command.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
		$root = new \Illuminate\Redis\Database();
		return $root->__call($method, $parameters);
	 }

}

class Request extends Illuminate\Support\Facades\Request{
	/**
	 * Return the Request instance.
	 *
	 * @return \Illuminate\Http\Request
	 * @static 
	 */
	 public static function instance(){
		$root = new \Illuminate\Http\Request();
		return $root->instance();
	 }

	/**
	 * Get the root URL for the application.
	 *
	 * @return string
	 * @static 
	 */
	 public static function root(){
		$root = new \Illuminate\Http\Request();
		return $root->root();
	 }

	/**
	 * Get the URL (no query string) for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function url(){
		$root = new \Illuminate\Http\Request();
		return $root->url();
	 }

	/**
	 * Get the full URL for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function fullUrl(){
		$root = new \Illuminate\Http\Request();
		return $root->fullUrl();
	 }

	/**
	 * Get the current path info for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function path(){
		$root = new \Illuminate\Http\Request();
		return $root->path();
	 }

	/**
	 * Get a segment from the URI (1 based index).
	 *
	 * @param string  $index
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function segment($index, $default = null){
		$root = new \Illuminate\Http\Request();
		return $root->segment($index, $default);
	 }

	/**
	 * Get all of the segments for the request path.
	 *
	 * @return array
	 * @static 
	 */
	 public static function segments(){
		$root = new \Illuminate\Http\Request();
		return $root->segments();
	 }

	/**
	 * Determine if the current request URI matches a pattern.
	 *
	 * @param string  $pattern
	 * @return bool
	 * @static 
	 */
	 public static function is($pattern){
		$root = new \Illuminate\Http\Request();
		return $root->is($pattern);
	 }

	/**
	 * Determine if the request is the result of an AJAX call.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function ajax(){
		$root = new \Illuminate\Http\Request();
		return $root->ajax();
	 }

	/**
	 * Determine if the request is over HTTPS.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function secure(){
		$root = new \Illuminate\Http\Request();
		return $root->secure();
	 }

	/**
	 * Determine if the request contains a given input item.
	 *
	 * @param string|array  $key
	 * @return bool
	 * @static 
	 */
	 public static function has($key){
		$root = new \Illuminate\Http\Request();
		return $root->has($key);
	 }

	/**
	 * Get all of the input and files for the request.
	 *
	 * @return array
	 * @static 
	 */
	 public static function all(){
		$root = new \Illuminate\Http\Request();
		return $root->all();
	 }

	/**
	 * Retrieve an input item from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function input($key = null, $default = null){
		$root = new \Illuminate\Http\Request();
		return $root->input($key, $default);
	 }

	/**
	 * Get a subset of the items from the input data.
	 *
	 * @param array  $keys
	 * @return array
	 * @static 
	 */
	 public static function only($keys){
		$root = new \Illuminate\Http\Request();
		return $root->only($keys);
	 }

	/**
	 * Get all of the input except for a specified array of items.
	 *
	 * @param array  $keys
	 * @return array
	 * @static 
	 */
	 public static function except($keys){
		$root = new \Illuminate\Http\Request();
		return $root->except($keys);
	 }

	/**
	 * Retrieve a query string item from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function query($key = null, $default = null){
		$root = new \Illuminate\Http\Request();
		return $root->query($key, $default);
	 }

	/**
	 * Retrieve a cookie from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function cookie($key = null, $default = null){
		$root = new \Illuminate\Http\Request();
		return $root->cookie($key, $default);
	 }

	/**
	 * Retrieve a file from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return \Symfony\Component\HttpFoundation\File\UploadedFile
	 * @static 
	 */
	 public static function file($key = null, $default = null){
		$root = new \Illuminate\Http\Request();
		return $root->file($key, $default);
	 }

	/**
	 * Determine if the uploaded data contains a file.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function hasFile($key){
		$root = new \Illuminate\Http\Request();
		return $root->hasFile($key);
	 }

	/**
	 * Retrieve a header from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function header($key = null, $default = null){
		$root = new \Illuminate\Http\Request();
		return $root->header($key, $default);
	 }

	/**
	 * Retrieve a server variable from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function server($key = null, $default = null){
		$root = new \Illuminate\Http\Request();
		return $root->server($key, $default);
	 }

	/**
	 * Retrieve an old input item.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function old($key = null, $default = null){
		$root = new \Illuminate\Http\Request();
		return $root->old($key, $default);
	 }

	/**
	 * Flash the input for the current request to the session.
	 *
	 * @param string $filter
	 * @param array  $keys
	 * @return void
	 * @static 
	 */
	 public static function flash($filter = null, $keys = array()){
		$root = new \Illuminate\Http\Request();
		$root->flash($filter, $keys);
	 }

	/**
	 * Flash only some of the input to the session.
	 *
	 * @param dynamic  string
	 * @return void
	 * @static 
	 */
	 public static function flashOnly($keys){
		$root = new \Illuminate\Http\Request();
		$root->flashOnly($keys);
	 }

	/**
	 * Flash only some of the input to the session.
	 *
	 * @param dynamic  string
	 * @return void
	 * @static 
	 */
	 public static function flashExcept($keys){
		$root = new \Illuminate\Http\Request();
		$root->flashExcept($keys);
	 }

	/**
	 * Flush all of the old input from the session.
	 *
	 * @return void
	 * @static 
	 */
	 public static function flush(){
		$root = new \Illuminate\Http\Request();
		$root->flush();
	 }

	/**
	 * Merge new input into the current request's input array.
	 *
	 * @param array  $input
	 * @return void
	 * @static 
	 */
	 public static function merge($input){
		$root = new \Illuminate\Http\Request();
		$root->merge($input);
	 }

	/**
	 * Replace the input for the current request.
	 *
	 * @param array  $input
	 * @return void
	 * @static 
	 */
	 public static function replace($input){
		$root = new \Illuminate\Http\Request();
		$root->replace($input);
	 }

	/**
	 * Get the JSON payload for the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function json($key = null, $default = null){
		$root = new \Illuminate\Http\Request();
		return $root->json($key, $default);
	 }

	/**
	 * Determine if the request is sending JSON.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function isJson(){
		$root = new \Illuminate\Http\Request();
		return $root->isJson();
	 }

	/**
	 * Determine if the current request is asking for JSON in return.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function wantsJson(){
		$root = new \Illuminate\Http\Request();
		return $root->wantsJson();
	 }

	/**
	 * Get the Illuminate session store implementation.
	 *
	 * @return \Illuminate\Session\Store
	 * @static 
	 */
	 public static function getSessionStore(){
		$root = new \Illuminate\Http\Request();
		return $root->getSessionStore();
	 }

	/**
	 * Set the Illuminate session store implementation.
	 *
	 * @param \Illuminate\Session\Store  $session
	 * @return void
	 * @static 
	 */
	 public static function setSessionStore($session){
		$root = new \Illuminate\Http\Request();
		$root->setSessionStore($session);
	 }

	/**
	 * Determine if the session store has been set.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function hasSessionStore(){
		$root = new \Illuminate\Http\Request();
		return $root->hasSessionStore();
	 }

	/**
	 * Constructor.
	 *
	 * @param array  $query      The GET parameters
	 * @param array  $request    The POST parameters
	 * @param array  $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array  $cookies    The COOKIE parameters
	 * @param array  $files      The FILES parameters
	 * @param array  $server     The SERVER parameters
	 * @param string $content    The raw body data
	 * @api 
	 * @static 
	 */
	 public static function __construct($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->__construct($query, $request, $attributes, $cookies, $files, $server, $content);
	 }

	/**
	 * Sets the parameters for this request.
	 * 
	 * This method also re-initializes all properties.
	 *
	 * @param array  $query      The GET parameters
	 * @param array  $request    The POST parameters
	 * @param array  $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array  $cookies    The COOKIE parameters
	 * @param array  $files      The FILES parameters
	 * @param array  $server     The SERVER parameters
	 * @param string $content    The raw body data
	 * @api 
	 * @static 
	 */
	 public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->initialize($query, $request, $attributes, $cookies, $files, $server, $content);
	 }

	/**
	 * Creates a new request with values from PHP's super globals.
	 *
	 * @return Request A new request
	 * @api 
	 * @static 
	 */
	 public static function createFromGlobals(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->createFromGlobals();
	 }

	/**
	 * Creates a Request based on a given URI and configuration.
	 * 
	 * The information contained in the URI always take precedence
	 * over the other information (server and parameters).
	 *
	 * @param string $uri        The URI
	 * @param string $method     The HTTP method
	 * @param array  $parameters The query (GET) or request (POST) parameters
	 * @param array  $cookies    The request cookies ($_COOKIE)
	 * @param array  $files      The request files ($_FILES)
	 * @param array  $server     The server parameters ($_SERVER)
	 * @param string $content    The raw body data
	 * @return Request A Request instance
	 * @api 
	 * @static 
	 */
	 public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->create($uri, $method, $parameters, $cookies, $files, $server, $content);
	 }

	/**
	 * Clones a request and overrides some of its parameters.
	 *
	 * @param array $query      The GET parameters
	 * @param array $request    The POST parameters
	 * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array $cookies    The COOKIE parameters
	 * @param array $files      The FILES parameters
	 * @param array $server     The SERVER parameters
	 * @return Request The duplicated request
	 * @api 
	 * @static 
	 */
	 public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->duplicate($query, $request, $attributes, $cookies, $files, $server);
	 }

	/**
	 * Returns the request as a string.
	 *
	 * @return string The request
	 * @static 
	 */
	 public static function __toString(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->__toString();
	 }

	/**
	 * Overrides the PHP global variables according to this request instance.
	 * 
	 * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
	 * $_FILES is never override, see rfc1867
	 *
	 * @api 
	 * @static 
	 */
	 public static function overrideGlobals(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->overrideGlobals();
	 }

	/**
	 * Sets a list of trusted proxies.
	 * 
	 * You should only list the reverse proxies that you manage directly.
	 *
	 * @param array $proxies A list of trusted proxies
	 * @api 
	 * @static 
	 */
	 public static function setTrustedProxies($proxies){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->setTrustedProxies($proxies);
	 }

	/**
	 * Gets the list of trusted proxies.
	 *
	 * @return array An array of trusted proxies.
	 * @static 
	 */
	 public static function getTrustedProxies(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getTrustedProxies();
	 }

	/**
	 * Sets the name for trusted headers.
	 * 
	 * The following header keys are supported:
	 * 
	 *  * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
	 *  * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getClientHost())
	 *  * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getClientPort())
	 *  * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
	 * 
	 * Setting an empty value allows to disable the trusted header for the given key.
	 *
	 * @param string $key   The header key
	 * @param string $value The header name
	 * @throws \InvalidArgumentException
	 * @static 
	 */
	 public static function setTrustedHeaderName($key, $value){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->setTrustedHeaderName($key, $value);
	 }

	/**
	 * Gets the trusted proxy header name.
	 *
	 * @param string $key The header key
	 * @return string The header name
	 * @throws \InvalidArgumentException
	 * @static 
	 */
	 public static function getTrustedHeaderName($key){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getTrustedHeaderName($key);
	 }

	/**
	 * Normalizes a query string.
	 * 
	 * It builds a normalized query string, where keys/value pairs are alphabetized,
	 * have consistent escaping and unneeded delimiters are removed.
	 *
	 * @param string $qs Query string
	 * @return string A normalized query string for the Request
	 * @static 
	 */
	 public static function normalizeQueryString($qs){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->normalizeQueryString($qs);
	 }

	/**
	 * Enables support for the _method request parameter to determine the intended HTTP method.
	 * 
	 * Be warned that enabling this feature might lead to CSRF issues in your code.
	 * Check that you are using CSRF tokens when required.
	 * 
	 * The HTTP method can only be overridden when the real HTTP method is POST.
	 *
	 * @static 
	 */
	 public static function enableHttpMethodParameterOverride(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->enableHttpMethodParameterOverride();
	 }

	/**
	 * Checks whether support for the _method request parameter is enabled.
	 *
	 * @return Boolean True when the _method request parameter is enabled, false otherwise
	 * @static 
	 */
	 public static function getHttpMethodParameterOverride(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getHttpMethodParameterOverride();
	 }

	/**
	 * Gets a "parameter" value.
	 * 
	 * This method is mainly useful for libraries that want to provide some flexibility.
	 * 
	 * Order of precedence: GET, PATH, POST
	 * 
	 * Avoid using this method in controllers:
	 * 
	 *  * slow
	 *  * prefer to get from a "named" source
	 * 
	 * It is better to explicitly get request parameters from the appropriate
	 * public property instead (query, attributes, request).
	 *
	 * @param string  $key     the key
	 * @param mixed   $default the default value
	 * @param Boolean $deep    is parameter deep in multidimensional array
	 * @return mixed
	 * @static 
	 */
	 public static function get($key, $default = null, $deep = false){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->get($key, $default, $deep);
	 }

	/**
	 * Gets the Session.
	 *
	 * @return SessionInterface|null The session
	 * @api 
	 * @static 
	 */
	 public static function getSession(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getSession();
	 }

	/**
	 * Whether the request contains a Session which was started in one of the
	 * previous requests.
	 *
	 * @return Boolean
	 * @api 
	 * @static 
	 */
	 public static function hasPreviousSession(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->hasPreviousSession();
	 }

	/**
	 * Whether the request contains a Session object.
	 * 
	 * This method does not give any information about the state of the session object,
	 * like whether the session is started or not. It is just a way to check if this Request
	 * is associated with a Session instance.
	 *
	 * @return Boolean true when the Request contains a Session object, false otherwise
	 * @api 
	 * @static 
	 */
	 public static function hasSession(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->hasSession();
	 }

	/**
	 * Sets the Session.
	 *
	 * @param SessionInterface $session The Session
	 * @api 
	 * @static 
	 */
	 public static function setSession($session){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->setSession($session);
	 }

	/**
	 * Returns the client IP addresses.
	 * 
	 * The most trusted IP address is first, and the less trusted one last.
	 * The "real" client IP address is the last one, but this is also the
	 * less trusted one.
	 * 
	 * Use this method carefully; you should use getClientIp() instead.
	 *
	 * @return array The client IP addresses
	 * @see getClientIp()
	 * @static 
	 */
	 public static function getClientIps(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getClientIps();
	 }

	/**
	 * Returns the client IP address.
	 * 
	 * This method can read the client IP address from the "X-Forwarded-For" header
	 * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
	 * header value is a comma+space separated list of IP addresses, the left-most
	 * being the original client, and each successive proxy that passed the request
	 * adding the IP address where it received the request from.
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-For",
	 * ("Client-Ip" for instance), configure it via "setTrustedHeaderName()" with
	 * the "client-ip" key.
	 *
	 * @return string The client IP address
	 * @see getClientIps()
	 * @see http://en.wikipedia.org/wiki/X-Forwarded-For
	 * @api 
	 * @static 
	 */
	 public static function getClientIp(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getClientIp();
	 }

	/**
	 * Returns current script name.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getScriptName(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getScriptName();
	 }

	/**
	 * Returns the path being requested relative to the executed script.
	 * 
	 * The path info always starts with a /.
	 * 
	 * Suppose this request is instantiated from /mysite on localhost:
	 * 
	 *  * http://localhost/mysite              returns an empty string
	 *  * http://localhost/mysite/about        returns '/about'
	 *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
	 *  * http://localhost/mysite/about?var=1  returns '/about'
	 *
	 * @return string The raw path (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getPathInfo(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getPathInfo();
	 }

	/**
	 * Returns the root path from which this request is executed.
	 * 
	 * Suppose that an index.php file instantiates this request object:
	 * 
	 *  * http://localhost/index.php         returns an empty string
	 *  * http://localhost/index.php/page    returns an empty string
	 *  * http://localhost/web/index.php     returns '/web'
	 *  * http://localhost/we%20b/index.php  returns '/we%20b'
	 *
	 * @return string The raw path (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getBasePath(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getBasePath();
	 }

	/**
	 * Returns the root url from which this request is executed.
	 * 
	 * The base URL never ends with a /.
	 * 
	 * This is similar to getBasePath(), except that it also includes the
	 * script filename (e.g. index.php) if one exists.
	 *
	 * @return string The raw url (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getBaseUrl(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getBaseUrl();
	 }

	/**
	 * Gets the request's scheme.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getScheme(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getScheme();
	 }

	/**
	 * Returns the port on which the request is made.
	 * 
	 * This method can read the client port from the "X-Forwarded-Port" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * 
	 * The "X-Forwarded-Port" header must contain the client port.
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-Port",
	 * configure it via "setTrustedHeaderName()" with the "client-port" key.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getPort(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getPort();
	 }

	/**
	 * Returns the user.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function getUser(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getUser();
	 }

	/**
	 * Returns the password.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function getPassword(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getPassword();
	 }

	/**
	 * Gets the user info.
	 *
	 * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
	 * @static 
	 */
	 public static function getUserInfo(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getUserInfo();
	 }

	/**
	 * Returns the HTTP host being requested.
	 * 
	 * The port name will be appended to the host if it's non-standard.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getHttpHost(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getHttpHost();
	 }

	/**
	 * Returns the requested URI.
	 *
	 * @return string The raw URI (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getRequestUri(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getRequestUri();
	 }

	/**
	 * Gets the scheme and HTTP host.
	 * 
	 * If the URL was called with basic authentication, the user
	 * and the password are not added to the generated string.
	 *
	 * @return string The scheme and HTTP host
	 * @static 
	 */
	 public static function getSchemeAndHttpHost(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getSchemeAndHttpHost();
	 }

	/**
	 * Generates a normalized URI for the Request.
	 *
	 * @return string A normalized URI for the Request
	 * @see getQueryString()
	 * @api 
	 * @static 
	 */
	 public static function getUri(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getUri();
	 }

	/**
	 * Generates a normalized URI for the given path.
	 *
	 * @param string $path A path to use instead of the current one
	 * @return string The normalized URI for the path
	 * @api 
	 * @static 
	 */
	 public static function getUriForPath($path){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getUriForPath($path);
	 }

	/**
	 * Generates the normalized query string for the Request.
	 * 
	 * It builds a normalized query string, where keys/value pairs are alphabetized
	 * and have consistent escaping.
	 *
	 * @return string|null A normalized query string for the Request
	 * @api 
	 * @static 
	 */
	 public static function getQueryString(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getQueryString();
	 }

	/**
	 * Checks whether the request is secure or not.
	 * 
	 * This method can read the client port from the "X-Forwarded-Proto" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * 
	 * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
	 * ("SSL_HTTPS" for instance), configure it via "setTrustedHeaderName()" with
	 * the "client-proto" key.
	 *
	 * @return Boolean
	 * @api 
	 * @static 
	 */
	 public static function isSecure(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->isSecure();
	 }

	/**
	 * Returns the host name.
	 * 
	 * This method can read the client port from the "X-Forwarded-Host" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * 
	 * The "X-Forwarded-Host" header must contain the client host name.
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-Host",
	 * configure it via "setTrustedHeaderName()" with the "client-host" key.
	 *
	 * @return string
	 * @throws \UnexpectedValueException when the host name is invalid
	 * @api 
	 * @static 
	 */
	 public static function getHost(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getHost();
	 }

	/**
	 * Sets the request method.
	 *
	 * @param string $method
	 * @api 
	 * @static 
	 */
	 public static function setMethod($method){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->setMethod($method);
	 }

	/**
	 * Gets the request "intended" method.
	 * 
	 * If the X-HTTP-Method-Override header is set, and if the method is a POST,
	 * then it is used to determine the "real" intended HTTP method.
	 * 
	 * The _method request parameter can also be used to determine the HTTP method,
	 * but only if enableHttpMethodParameterOverride() has been called.
	 * 
	 * The method is always an uppercased string.
	 *
	 * @return string The request method
	 * @api 
	 * @see getRealMethod
	 * @static 
	 */
	 public static function getMethod(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getMethod();
	 }

	/**
	 * Gets the "real" request method.
	 *
	 * @return string The request method
	 * @see getMethod
	 * @static 
	 */
	 public static function getRealMethod(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getRealMethod();
	 }

	/**
	 * Gets the mime type associated with the format.
	 *
	 * @param string $format The format
	 * @return string The associated mime type (null if not found)
	 * @api 
	 * @static 
	 */
	 public static function getMimeType($format){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getMimeType($format);
	 }

	/**
	 * Gets the format associated with the mime type.
	 *
	 * @param string $mimeType The associated mime type
	 * @return string|null The format (null if not found)
	 * @api 
	 * @static 
	 */
	 public static function getFormat($mimeType){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getFormat($mimeType);
	 }

	/**
	 * Associates a format with mime types.
	 *
	 * @param string       $format    The format
	 * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
	 * @api 
	 * @static 
	 */
	 public static function setFormat($format, $mimeTypes){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->setFormat($format, $mimeTypes);
	 }

	/**
	 * Gets the request format.
	 * 
	 * Here is the process to determine the format:
	 * 
	 *  * format defined by the user (with setRequestFormat())
	 *  * _format request parameter
	 *  * $default
	 *
	 * @param string $default The default format
	 * @return string The request format
	 * @api 
	 * @static 
	 */
	 public static function getRequestFormat($default = 'html'){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getRequestFormat($default);
	 }

	/**
	 * Sets the request format.
	 *
	 * @param string $format The request format.
	 * @api 
	 * @static 
	 */
	 public static function setRequestFormat($format){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->setRequestFormat($format);
	 }

	/**
	 * Gets the format associated with the request.
	 *
	 * @return string|null The format (null if no content type is present)
	 * @api 
	 * @static 
	 */
	 public static function getContentType(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getContentType();
	 }

	/**
	 * Sets the default locale.
	 *
	 * @param string $locale
	 * @api 
	 * @static 
	 */
	 public static function setDefaultLocale($locale){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->setDefaultLocale($locale);
	 }

	/**
	 * Sets the locale.
	 *
	 * @param string $locale
	 * @api 
	 * @static 
	 */
	 public static function setLocale($locale){
		$root = new \Symfony\Component\HttpFoundation\Request();
		$root->setLocale($locale);
	 }

	/**
	 * Get the locale.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getLocale(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getLocale();
	 }

	/**
	 * Checks if the request method is of specified type.
	 *
	 * @param string $method Uppercase request method (GET, POST etc).
	 * @return Boolean
	 * @static 
	 */
	 public static function isMethod($method){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->isMethod($method);
	 }

	/**
	 * Checks whether the method is safe or not.
	 *
	 * @return Boolean
	 * @api 
	 * @static 
	 */
	 public static function isMethodSafe(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->isMethodSafe();
	 }

	/**
	 * Returns the request body content.
	 *
	 * @param Boolean $asResource If true, a resource will be returned
	 * @return string|resource The request body content or a resource to read the body stream.
	 * @throws \LogicException
	 * @static 
	 */
	 public static function getContent($asResource = false){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getContent($asResource);
	 }

	/**
	 * Gets the Etags.
	 *
	 * @return array The entity tags
	 * @static 
	 */
	 public static function getETags(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getETags();
	 }

	/**
	 * 
	 *
	 * @return Boolean
	 * @static 
	 */
	 public static function isNoCache(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->isNoCache();
	 }

	/**
	 * Returns the preferred language.
	 *
	 * @param array $locales An array of ordered available locales
	 * @return string|null The preferred locale
	 * @api 
	 * @static 
	 */
	 public static function getPreferredLanguage($locales = null){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getPreferredLanguage($locales);
	 }

	/**
	 * Gets a list of languages acceptable by the client browser.
	 *
	 * @return array Languages ordered in the user browser preferences
	 * @api 
	 * @static 
	 */
	 public static function getLanguages(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getLanguages();
	 }

	/**
	 * Gets a list of charsets acceptable by the client browser.
	 *
	 * @return array List of charsets in preferable order
	 * @api 
	 * @static 
	 */
	 public static function getCharsets(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getCharsets();
	 }

	/**
	 * Gets a list of content types acceptable by the client browser
	 *
	 * @return array List of content types in preferable order
	 * @api 
	 * @static 
	 */
	 public static function getAcceptableContentTypes(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->getAcceptableContentTypes();
	 }

	/**
	 * Returns true if the request is a XMLHttpRequest.
	 * 
	 * It works if your JavaScript library set an X-Requested-With HTTP header.
	 * It is known to work with common JavaScript frameworks:
	 *
	 * @link http://en.wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
	 * @return Boolean true if the request is an XMLHttpRequest, false otherwise
	 * @api 
	 * @static 
	 */
	 public static function isXmlHttpRequest(){
		$root = new \Symfony\Component\HttpFoundation\Request();
		return $root->isXmlHttpRequest();
	 }

}

class Response extends Illuminate\Support\Facades\Response{
}

class Route extends Illuminate\Support\Facades\Route{
	/**
	 * Create a new router instance.
	 *
	 * @param \Illuminate\Container\Container  $container
	 * @return self 
	 * @static 
	 */
	 public static function __construct($container = null){
		$root = new \Illuminate\Routing\Router();
		$root->__construct($container);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function get($pattern, $action){
		$root = new \Illuminate\Routing\Router();
		return $root->get($pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function post($pattern, $action){
		$root = new \Illuminate\Routing\Router();
		return $root->post($pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function put($pattern, $action){
		$root = new \Illuminate\Routing\Router();
		return $root->put($pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function patch($pattern, $action){
		$root = new \Illuminate\Routing\Router();
		return $root->patch($pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function delete($pattern, $action){
		$root = new \Illuminate\Routing\Router();
		return $root->delete($pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function options($pattern, $action){
		$root = new \Illuminate\Routing\Router();
		return $root->options($pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $method
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function match($method, $pattern, $action){
		$root = new \Illuminate\Routing\Router();
		return $root->match($method, $pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function any($pattern, $action){
		$root = new \Illuminate\Routing\Router();
		return $root->any($pattern, $action);
	 }

	/**
	 * Register an array of controllers with wildcard routing.
	 *
	 * @param array  $controllers
	 * @return void
	 * @static 
	 */
	 public static function controllers($controllers){
		$root = new \Illuminate\Routing\Router();
		$root->controllers($controllers);
	 }

	/**
	 * Route a controller to a URI with wildcard routing.
	 *
	 * @param string  $uri
	 * @param string  $controller
	 * @param array   $names
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function controller($uri, $controller, $names = array()){
		$root = new \Illuminate\Routing\Router();
		return $root->controller($uri, $controller, $names);
	 }

	/**
	 * Route a resource to a controller.
	 *
	 * @param string  $resource
	 * @param string  $controller
	 * @param array   $options
	 * @return void
	 * @static 
	 */
	 public static function resource($resource, $controller, $options = array()){
		$root = new \Illuminate\Routing\Router();
		$root->resource($resource, $controller, $options);
	 }

	/**
	 * Get the base resource URI for a given resource.
	 *
	 * @param string  $resource
	 * @return string
	 * @static 
	 */
	 public static function getResourceUri($resource){
		$root = new \Illuminate\Routing\Router();
		return $root->getResourceUri($resource);
	 }

	/**
	 * Format a resource wildcard parameter.
	 *
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function getResourceWildcard($value){
		$root = new \Illuminate\Routing\Router();
		return $root->getResourceWildcard($value);
	 }

	/**
	 * Create a route group with shared attributes.
	 *
	 * @param array    $attributes
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function group($attributes, $callback){
		$root = new \Illuminate\Routing\Router();
		$root->group($attributes, $callback);
	 }

	/**
	 * Get the response for a given request.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @static 
	 */
	 public static function dispatch($request){
		$root = new \Illuminate\Routing\Router();
		return $root->dispatch($request);
	 }

	/**
	 * Register a "before" routing filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function before($callback){
		$root = new \Illuminate\Routing\Router();
		$root->before($callback);
	 }

	/**
	 * Register an "after" routing filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function after($callback){
		$root = new \Illuminate\Routing\Router();
		$root->after($callback);
	 }

	/**
	 * Register a "close" routing filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function close($callback){
		$root = new \Illuminate\Routing\Router();
		$root->close($callback);
	 }

	/**
	 * Register a "finish" routing filters.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function finish($callback){
		$root = new \Illuminate\Routing\Router();
		$root->finish($callback);
	 }

	/**
	 * Register a new filter with the application.
	 *
	 * @param string   $name
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function filter($name, $callback){
		$root = new \Illuminate\Routing\Router();
		$root->filter($name, $callback);
	 }

	/**
	 * Get a registered filter callback.
	 *
	 * @param string   $name
	 * @return Closure
	 * @static 
	 */
	 public static function getFilter($name){
		$root = new \Illuminate\Routing\Router();
		return $root->getFilter($name);
	 }

	/**
	 * Tie a registered filter to a URI pattern.
	 *
	 * @param string  $pattern
	 * @param string|array  $names
	 * @param array|null  $methods
	 * @return void
	 * @static 
	 */
	 public static function when($pattern, $names, $methods = null){
		$root = new \Illuminate\Routing\Router();
		$root->when($pattern, $names, $methods);
	 }

	/**
	 * Find the patterned filters matching a request.
	 *
	 * @param \Illuminate\Http\Request  $request
	 * @return array
	 * @static 
	 */
	 public static function findPatternFilters($request){
		$root = new \Illuminate\Routing\Router();
		return $root->findPatternFilters($request);
	 }

	/**
	 * Call the finish" global filter.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request   $request
	 * @param \Symfony\Component\HttpFoundation\Response  $response
	 * @return mixed
	 * @static 
	 */
	 public static function callFinishFilter($request, $response){
		$root = new \Illuminate\Routing\Router();
		return $root->callFinishFilter($request, $response);
	 }

	/**
	 * Call the "close" global filter.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request   $request
	 * @param \Symfony\Component\HttpFoundation\Response  $response
	 * @return mixed
	 * @static 
	 */
	 public static function callCloseFilter($request, $response){
		$root = new \Illuminate\Routing\Router();
		return $root->callCloseFilter($request, $response);
	 }

	/**
	 * Set a global where pattern on all routes
	 *
	 * @param string  $key
	 * @param string  $pattern
	 * @return void
	 * @static 
	 */
	 public static function pattern($key, $pattern){
		$root = new \Illuminate\Routing\Router();
		$root->pattern($key, $pattern);
	 }

	/**
	 * Register a model binder for a wildcard.
	 *
	 * @param string  $key
	 * @param string  $class
	 * @return void
	 * @static 
	 */
	 public static function model($key, $class, $callback = null){
		$root = new \Illuminate\Routing\Router();
		$root->model($key, $class, $callback);
	 }

	/**
	 * Register a custom parameter binder.
	 *
	 * @param string  $key
	 * @param mixed   $binder
	 * @static 
	 */
	 public static function bind($key, $binder){
		$root = new \Illuminate\Routing\Router();
		$root->bind($key, $binder);
	 }

	/**
	 * Determine if a given key has a registered binder.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function hasBinder($key){
		$root = new \Illuminate\Routing\Router();
		return $root->hasBinder($key);
	 }

	/**
	 * Call a binder for a given wildcard.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @param \Illuminate\Routing\Route  $route
	 * @return mixed
	 * @static 
	 */
	 public static function performBinding($key, $value, $route){
		$root = new \Illuminate\Routing\Router();
		return $root->performBinding($key, $value, $route);
	 }

	/**
	 * Prepare the given value as a Response object.
	 *
	 * @param mixed  $value
	 * @param \Illuminate\Http\Request  $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @static 
	 */
	 public static function prepare($value, $request){
		$root = new \Illuminate\Routing\Router();
		return $root->prepare($value, $request);
	 }

	/**
	 * Get the current route name.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function currentRouteName(){
		$root = new \Illuminate\Routing\Router();
		return $root->currentRouteName();
	 }

	/**
	 * Determine if the current route has a given name.
	 *
	 * @param string  $name
	 * @return bool
	 * @static 
	 */
	 public static function currentRouteNamed($name){
		$root = new \Illuminate\Routing\Router();
		return $root->currentRouteNamed($name);
	 }

	/**
	 * Get the current route action.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function currentRouteAction(){
		$root = new \Illuminate\Routing\Router();
		return $root->currentRouteAction();
	 }

	/**
	 * Determine if the current route uses a given controller action.
	 *
	 * @param string  $action
	 * @return bool
	 * @static 
	 */
	 public static function currentRouteUses($action){
		$root = new \Illuminate\Routing\Router();
		return $root->currentRouteUses($action);
	 }

	/**
	 * Determine if route filters are enabled.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function filtersEnabled(){
		$root = new \Illuminate\Routing\Router();
		return $root->filtersEnabled();
	 }

	/**
	 * Enable the running of filters.
	 *
	 * @return void
	 * @static 
	 */
	 public static function enableFilters(){
		$root = new \Illuminate\Routing\Router();
		$root->enableFilters();
	 }

	/**
	 * Disable the running of all filters.
	 *
	 * @return void
	 * @static 
	 */
	 public static function disableFilters(){
		$root = new \Illuminate\Routing\Router();
		$root->disableFilters();
	 }

	/**
	 * Retrieve the entire route collection.
	 *
	 * @return \Symfony\Component\Routing\RouteCollection
	 * @static 
	 */
	 public static function getRoutes(){
		$root = new \Illuminate\Routing\Router();
		return $root->getRoutes();
	 }

	/**
	 * Get the current request being dispatched.
	 *
	 * @return \Symfony\Component\HttpFoundation\Request
	 * @static 
	 */
	 public static function getRequest(){
		$root = new \Illuminate\Routing\Router();
		return $root->getRequest();
	 }

	/**
	 * Get the current route being executed.
	 *
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function getCurrentRoute(){
		$root = new \Illuminate\Routing\Router();
		return $root->getCurrentRoute();
	 }

	/**
	 * Set the current route on the router.
	 *
	 * @param \Illuminate\Routing\Route  $route
	 * @return void
	 * @static 
	 */
	 public static function setCurrentRoute($route){
		$root = new \Illuminate\Routing\Router();
		$root->setCurrentRoute($route);
	 }

	/**
	 * Get the filters defined on the router.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getFilters(){
		$root = new \Illuminate\Routing\Router();
		return $root->getFilters();
	 }

	/**
	 * Get the global filters defined on the router.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getGlobalFilters(){
		$root = new \Illuminate\Routing\Router();
		return $root->getGlobalFilters();
	 }

	/**
	 * Get the controller inspector instance.
	 *
	 * @return \Illuminate\Routing\Controllers\Inspector
	 * @static 
	 */
	 public static function getInspector(){
		$root = new \Illuminate\Routing\Router();
		return $root->getInspector();
	 }

	/**
	 * Set the controller inspector instance.
	 *
	 * @param \Illuminate\Routing\Controllers\Inspector  $inspector
	 * @return void
	 * @static 
	 */
	 public static function setInspector($inspector){
		$root = new \Illuminate\Routing\Router();
		$root->setInspector($inspector);
	 }

	/**
	 * Get the container used by the router.
	 *
	 * @return \Illuminate\Container\Container
	 * @static 
	 */
	 public static function getContainer(){
		$root = new \Illuminate\Routing\Router();
		return $root->getContainer();
	 }

	/**
	 * Set the container instance on the router.
	 *
	 * @param \Illuminate\Container\Container  $container
	 * @return void
	 * @static 
	 */
	 public static function setContainer($container){
		$root = new \Illuminate\Routing\Router();
		$root->setContainer($container);
	 }

}

class Seeder extends Illuminate\Database\Seeder{
}

class Session extends Illuminate\Support\Facades\Session{
	/**
	 * Starts the session storage.
	 *
	 * @return Boolean True if session started.
	 * @throws \RuntimeException If session fails to start.
	 * @api 
	 * @static 
	 */
	 public static function start(){
		$root = new \Illuminate\Session\Store();
		return $root->start();
	 }

	/**
	 * Force the session to be saved and closed.
	 * 
	 * This method is generally not required for real sessions as
	 * the session will be automatically saved at the end of
	 * code execution.
	 *
	 * @static 
	 */
	 public static function save(){
		$root = new \Illuminate\Session\Store();
		$root->save();
	 }

	/**
	 * Checks if an attribute is defined.
	 *
	 * @param string $name The attribute name
	 * @return Boolean true if the attribute is defined, false otherwise
	 * @api 
	 * @static 
	 */
	 public static function has($name){
		$root = new \Illuminate\Session\Store();
		return $root->has($name);
	 }

	/**
	 * Returns an attribute.
	 *
	 * @param string $name    The attribute name
	 * @param mixed  $default The default value if not found.
	 * @return mixed
	 * @api 
	 * @static 
	 */
	 public static function get($name, $default = null){
		$root = new \Illuminate\Session\Store();
		return $root->get($name, $default);
	 }

	/**
	 * Determine if the session contains old input.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function hasOldInput($key = null){
		$root = new \Illuminate\Session\Store();
		return $root->hasOldInput($key);
	 }

	/**
	 * Get the requested item from the flashed input array.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function getOldInput($key = null, $default = null){
		$root = new \Illuminate\Session\Store();
		return $root->getOldInput($key, $default);
	 }

	/**
	 * Get the CSRF token value.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getToken(){
		$root = new \Illuminate\Session\Store();
		return $root->getToken();
	 }

	/**
	 * Get the CSRF token value.
	 *
	 * @return string
	 * @static 
	 */
	 public static function token(){
		$root = new \Illuminate\Session\Store();
		return $root->token();
	 }

	/**
	 * Put a key / value pair in the session.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function put($key, $value){
		$root = new \Illuminate\Session\Store();
		$root->put($key, $value);
	 }

	/**
	 * Push a value onto a session array.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function push($key, $value){
		$root = new \Illuminate\Session\Store();
		$root->push($key, $value);
	 }

	/**
	 * Flash a key / value pair to the session.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function flash($key, $value){
		$root = new \Illuminate\Session\Store();
		$root->flash($key, $value);
	 }

	/**
	 * Flash an input array to the session.
	 *
	 * @param array  $value
	 * @return void
	 * @static 
	 */
	 public static function flashInput($value){
		$root = new \Illuminate\Session\Store();
		$root->flashInput($value);
	 }

	/**
	 * Reflash all of the session flash data.
	 *
	 * @return void
	 * @static 
	 */
	 public static function reflash(){
		$root = new \Illuminate\Session\Store();
		$root->reflash();
	 }

	/**
	 * Reflash a subset of the current flash data.
	 *
	 * @param array|dynamic  $keys
	 * @return void
	 * @static 
	 */
	 public static function keep($keys = null){
		$root = new \Illuminate\Session\Store();
		$root->keep($keys);
	 }

	/**
	 * Remove an item from the session.
	 *
	 * @param string  $key
	 * @return void
	 * @static 
	 */
	 public static function forget($key){
		$root = new \Illuminate\Session\Store();
		$root->forget($key);
	 }

	/**
	 * Remove all of the items from the session.
	 *
	 * @return void
	 * @static 
	 */
	 public static function flush(){
		$root = new \Illuminate\Session\Store();
		$root->flush();
	 }

	/**
	 * Generate a new session identifier.
	 *
	 * @return string
	 * @static 
	 */
	 public static function regenerate(){
		$root = new \Illuminate\Session\Store();
		return $root->regenerate();
	 }

	/**
	 * Constructor.
	 *
	 * @param SessionStorageInterface $storage    A SessionStorageInterface instance.
	 * @param AttributeBagInterface   $attributes An AttributeBagInterface instance, (defaults null for default AttributeBag)
	 * @param FlashBagInterface       $flashes    A FlashBagInterface instance (defaults null for default FlashBag)
	 * @static 
	 */
	 public static function __construct($storage = null, $attributes = null, $flashes = null){
		$root = new \Symfony\Component\HttpFoundation\Session\Session();
		$root->__construct($storage, $attributes, $flashes);
	 }

	/**
	 * Sets an attribute.
	 *
	 * @param string $name
	 * @param mixed  $value
	 * @api 
	 * @static 
	 */
	 public static function set($name, $value){
		$root = new \Symfony\Component\HttpFoundation\Session\Session();
		$root->set($name, $value);
	 }

	/**
	 * Returns attributes.
	 *
	 * @return array Attributes
	 * @api 
	 * @static 
	 */
	 public static function all(){
		$root = new \Symfony\Component\HttpFoundation\Session\Session();
		return $root->all();
	 }

	/**
	 * Sets attributes.
	 *
	 * @param array $attributes Attributes
	 * @static 
	 */
	 public static function replace($attributes){
		$root = new \Symfony\Component\HttpFoundation\Session\Session();
		$root->replace($attributes);
	 }

	/**
	 * Removes an attribute.
	 *
	 * @param string $name
	 * @return mixed The removed value
	 * @api 
	 * @static 
	 */
	 public static function remove($name){
		$root = new \Symfony\Component\HttpFoundation\Session\Session();
		return $root->remove($name);
	 }

	/**
	 * Clears all attributes.
	 *
	 * @api 
	 * @static 
	 */
	 public static function clear(){
		$root = new \Symfony\Component\HttpFoundation\Session\Session();
		$root->clear();
	 }

	/**
	 * Checks if the session was started.
	 *
	 * @return Boolean
	 * @static 
	 */
	 public static function isStarted(){
		$root = new \Symfony\Component\HttpFoundation\Session\Session();
		return $root->isStarted();
	 }

	/**
	 * Returns an iterator for attributes.
	 *
	 * @return \ArrayIterator An \ArrayIterator instance
	 * @static 
	 */
	 public static function getIterator(){
		$root = new \Symfony\Component\HttpFoundation\Session\Session();
		return $root->getIterator();
	 }

	/**
	 * Returns the number of attributes.
	 *
	 * @return int The number of attributes
	 * @static 
	 */
	 public static function count(){
		$root = new \Symfony\Component\HttpFoundation\Session\Session();
		return $root->count();
	 }

	/**
	 * Invalidates the current session.
	 * 
	 * Clears all session attributes and flashes and regenerates the
	 * session and deletes the old session from persistence.
	 *
	 * @param integer $lifetime Sets the cookie lifetime for the session cookie. A null value
	 *                          will leave the system settings unchanged, 0 sets the cookie
	 *                          to expire with browser session. Time is in seconds, and is
	 *                          not a Unix timestamp.
	 * @return Boolean True if session invalidated, false if error.
	 * @api 
	 * @static 
	 */
	 public static function invalidate($lifetime = null){
		$root = new \Symfony\Component\HttpFoundation\Session\Session();
		return $root->invalidate($lifetime);
	 }

	/**
	 * Migrates the current session to a new session id while maintaining all
	 * session attributes.
	 *
	 * @param Boolean $destroy  Whether to delete the old session or leave it to garbage collection.
	 * @param integer $lifetime Sets the cookie lifetime for the session cookie. A null value
	 *                          will leave the system settings unchanged, 0 sets the cookie
	 *                          to expire with browser session. Time is in seconds, and is
	 *                          not a Unix timestamp.
	 * @return Boolean True if session migrated, false if error.
	 * @api 
	 * @static 
	 */
	 public static function migrate($destroy = false, $lifetime = null){
		$root = new \Symfony\Component\HttpFoundation\Session\Session();
		return $root->migrate($destroy, $lifetime);
	 }

	/**
	 * Returns the session ID.
	 *
	 * @return string The session ID.
	 * @api 
	 * @static 
	 */
	 public static function getId(){
		$root = new \Symfony\Component\HttpFoundation\Session\Session();
		return $root->getId();
	 }

	/**
	 * Sets the session ID
	 *
	 * @param string $id
	 * @api 
	 * @static 
	 */
	 public static function setId($id){
		$root = new \Symfony\Component\HttpFoundation\Session\Session();
		$root->setId($id);
	 }

	/**
	 * Returns the session name.
	 *
	 * @return mixed The session name.
	 * @api 
	 * @static 
	 */
	 public static function getName(){
		$root = new \Symfony\Component\HttpFoundation\Session\Session();
		return $root->getName();
	 }

	/**
	 * Sets the session name.
	 *
	 * @param string $name
	 * @api 
	 * @static 
	 */
	 public static function setName($name){
		$root = new \Symfony\Component\HttpFoundation\Session\Session();
		$root->setName($name);
	 }

	/**
	 * Gets session meta.
	 *
	 * @return MetadataBag
	 * @static 
	 */
	 public static function getMetadataBag(){
		$root = new \Symfony\Component\HttpFoundation\Session\Session();
		return $root->getMetadataBag();
	 }

	/**
	 * Registers a SessionBagInterface with the session.
	 *
	 * @param SessionBagInterface $bag
	 * @static 
	 */
	 public static function registerBag($bag){
		$root = new \Symfony\Component\HttpFoundation\Session\Session();
		$root->registerBag($bag);
	 }

	/**
	 * Gets a bag instance by name.
	 *
	 * @param string $name
	 * @return SessionBagInterface
	 * @static 
	 */
	 public static function getBag($name){
		$root = new \Symfony\Component\HttpFoundation\Session\Session();
		return $root->getBag($name);
	 }

	/**
	 * Gets the flashbag interface.
	 *
	 * @return FlashBagInterface
	 * @static 
	 */
	 public static function getFlashBag(){
		$root = new \Symfony\Component\HttpFoundation\Session\Session();
		return $root->getFlashBag();
	 }

}

class Str extends Illuminate\Support\Str{
}

class URL extends Illuminate\Support\Facades\URL{
	/**
	 * Create a new URL Generator instance.
	 *
	 * @param \Symfony\Component\Routing\RouteCollection  $routes
	 * @param \Symfony\Component\HttpFoundation\Request   $request
	 * @return self 
	 * @static 
	 */
	 public static function __construct($routes, $request){
		$root = new \Illuminate\Routing\UrlGenerator(null,null);
		$root->__construct($routes, $request);
	 }

	/**
	 * Get the full URL for the current request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function full(){
		$root = new \Illuminate\Routing\UrlGenerator(null,null);
		return $root->full();
	 }

	/**
	 * Get the current URL for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function current(){
		$root = new \Illuminate\Routing\UrlGenerator(null,null);
		return $root->current();
	 }

	/**
	 * Get the URL for the previous request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function previous(){
		$root = new \Illuminate\Routing\UrlGenerator(null,null);
		return $root->previous();
	 }

	/**
	 * Generate a absolute URL to the given path.
	 *
	 * @param string  $path
	 * @param mixed   $parameters
	 * @param bool    $secure
	 * @return string
	 * @static 
	 */
	 public static function to($path, $parameters = array(), $secure = null){
		$root = new \Illuminate\Routing\UrlGenerator(null,null);
		return $root->to($path, $parameters, $secure);
	 }

	/**
	 * Generate a secure, absolute URL to the given path.
	 *
	 * @param string  $path
	 * @param array   $parameters
	 * @return string
	 * @static 
	 */
	 public static function secure($path, $parameters = array()){
		$root = new \Illuminate\Routing\UrlGenerator(null,null);
		return $root->secure($path, $parameters);
	 }

	/**
	 * Generate a URL to an application asset.
	 *
	 * @param string  $path
	 * @param bool    $secure
	 * @return string
	 * @static 
	 */
	 public static function asset($path, $secure = null){
		$root = new \Illuminate\Routing\UrlGenerator(null,null);
		return $root->asset($path, $secure);
	 }

	/**
	 * Generate a URL to a secure asset.
	 *
	 * @param string  $path
	 * @return string
	 * @static 
	 */
	 public static function secureAsset($path){
		$root = new \Illuminate\Routing\UrlGenerator(null,null);
		return $root->secureAsset($path);
	 }

	/**
	 * Get the URL to a named route.
	 *
	 * @param string  $name
	 * @param mixed   $parameters
	 * @param bool    $absolute
	 * @return string
	 * @static 
	 */
	 public static function route($name, $parameters = array(), $absolute = true){
		$root = new \Illuminate\Routing\UrlGenerator(null,null);
		return $root->route($name, $parameters, $absolute);
	 }

	/**
	 * Get the URL to a controller action.
	 *
	 * @param string  $action
	 * @param mixed   $parameters
	 * @param bool    $absolute
	 * @return string
	 * @static 
	 */
	 public static function action($action, $parameters = array(), $absolute = true){
		$root = new \Illuminate\Routing\UrlGenerator(null,null);
		return $root->action($action, $parameters, $absolute);
	 }

	/**
	 * Determine if the given path is a valid URL.
	 *
	 * @param string  $path
	 * @return bool
	 * @static 
	 */
	 public static function isValidUrl($path){
		$root = new \Illuminate\Routing\UrlGenerator(null,null);
		return $root->isValidUrl($path);
	 }

	/**
	 * Get the request instance.
	 *
	 * @return \Symfony\Component\HttpFoundation\Request
	 * @static 
	 */
	 public static function getRequest(){
		$root = new \Illuminate\Routing\UrlGenerator(null,null);
		return $root->getRequest();
	 }

	/**
	 * Set the current request instance.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @return void
	 * @static 
	 */
	 public static function setRequest($request){
		$root = new \Illuminate\Routing\UrlGenerator(null,null);
		$root->setRequest($request);
	 }

	/**
	 * Get the Symfony URL generator instance.
	 *
	 * @return \Symfony\Component\Routing\Generator\UrlGenerator
	 * @static 
	 */
	 public static function getGenerator(){
		$root = new \Illuminate\Routing\UrlGenerator(null,null);
		return $root->getGenerator();
	 }

	/**
	 * Set the Symfony URL generator instance.
	 *
	 * @param \Symfony\Component\Routing\Generator\UrlGenerator  $generator
	 * @return void
	 * @static 
	 */
	 public static function setGenerator($generator){
		$root = new \Illuminate\Routing\UrlGenerator(null,null);
		$root->setGenerator($generator);
	 }

}

class Validator extends Illuminate\Support\Facades\Validator{
	/**
	 * Create a new Validator factory instance.
	 *
	 * @param \Symfony\Component\Translation\TranslatorInterface  $translator
	 * @param \Illuminate\Container\Container  $container
	 * @return self 
	 * @static 
	 */
	 public static function __construct($translator, $container = null){
		$root = new \Illuminate\Validation\Factory(null);
		$root->__construct($translator, $container);
	 }

	/**
	 * Create a new Validator instance.
	 *
	 * @param array  $data
	 * @param array  $rules
	 * @param array  $messages
	 * @return \Illuminate\Validation\Validator
	 * @static 
	 */
	 public static function make($data, $rules, $messages = array()){
		$root = new \Illuminate\Validation\Factory(null);
		return $root->make($data, $rules, $messages);
	 }

	/**
	 * Register a custom validator extension.
	 *
	 * @param string  $rule
	 * @param Closure|string  $extension
	 * @return void
	 * @static 
	 */
	 public static function extend($rule, $extension){
		$root = new \Illuminate\Validation\Factory(null);
		$root->extend($rule, $extension);
	 }

	/**
	 * Register a custom implicit validator extension.
	 *
	 * @param string  $rule
	 * @param Closure $extension
	 * @return void
	 * @static 
	 */
	 public static function extendImplicit($rule, $extension){
		$root = new \Illuminate\Validation\Factory(null);
		$root->extendImplicit($rule, $extension);
	 }

	/**
	 * Set the Validator instance resolver.
	 *
	 * @param Closure  $resolver
	 * @return void
	 * @static 
	 */
	 public static function resolver($resolver){
		$root = new \Illuminate\Validation\Factory(null);
		$root->resolver($resolver);
	 }

	/**
	 * Get the Translator implementation.
	 *
	 * @return \Symfony\Component\Translation\TranslatorInterface
	 * @static 
	 */
	 public static function getTranslator(){
		$root = new \Illuminate\Validation\Factory(null);
		return $root->getTranslator();
	 }

	/**
	 * Get the Presence Verifier implementation.
	 *
	 * @return \Illuminate\Validation\PresenceVerifierInterface
	 * @static 
	 */
	 public static function getPresenceVerifier(){
		$root = new \Illuminate\Validation\Factory(null);
		return $root->getPresenceVerifier();
	 }

	/**
	 * Set the Presence Verifier implementation.
	 *
	 * @param \Illuminate\Validation\PresenceVerifierInterface  $presenceVerifier
	 * @return void
	 * @static 
	 */
	 public static function setPresenceVerifier($presenceVerifier){
		$root = new \Illuminate\Validation\Factory(null);
		$root->setPresenceVerifier($presenceVerifier);
	 }

}

class View extends Illuminate\Support\Facades\View{
	/**
	 * Create a new view environment instance.
	 *
	 * @param \Illuminate\View\Engines\EngineResolver  $engines
	 * @param \Illuminate\View\ViewFinderInterface  $finder
	 * @param \Illuminate\Events\Dispatcher  $events
	 * @return self 
	 * @static 
	 */
	 public static function __construct($engines, $finder, $events){
		$root = new \Illuminate\View\Environment(null,null,null);
		$root->__construct($engines, $finder, $events);
	 }

	/**
	 * Get a evaluated view contents for the given view.
	 *
	 * @param string  $view
	 * @param array   $data
	 * @param array   $mergeData
	 * @return \Illuminate\View\View
	 * @static 
	 */
	 public static function make($view, $data = array(), $mergeData = array()){
		$root = new \Illuminate\View\Environment(null,null,null);
		return $root->make($view, $data, $mergeData);
	 }

	/**
	 * Get a evaluated view contents for a named view.
	 *
	 * @param string $view
	 * @param mixed $data
	 * @return \Illuminate\View\View
	 * @static 
	 */
	 public static function of($view, $data = array()){
		$root = new \Illuminate\View\Environment(null,null,null);
		return $root->of($view, $data);
	 }

	/**
	 * Register a named view.
	 *
	 * @param string $view
	 * @param string $name
	 * @return void
	 * @static 
	 */
	 public static function name($view, $name){
		$root = new \Illuminate\View\Environment(null,null,null);
		$root->name($view, $name);
	 }

	/**
	 * Determine if a given view exists.
	 *
	 * @param string  $view
	 * @return bool
	 * @static 
	 */
	 public static function exists($view){
		$root = new \Illuminate\View\Environment(null,null,null);
		return $root->exists($view);
	 }

	/**
	 * Get the rendered contents of a partial from a loop.
	 *
	 * @param string  $view
	 * @param array   $data
	 * @param string  $iterator
	 * @param string  $empty
	 * @return string
	 * @static 
	 */
	 public static function renderEach($view, $data, $iterator, $empty = 'raw|'){
		$root = new \Illuminate\View\Environment(null,null,null);
		return $root->renderEach($view, $data, $iterator, $empty);
	 }

	/**
	 * Add a piece of shared data to the environment.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function share($key, $value = null){
		$root = new \Illuminate\View\Environment(null,null,null);
		$root->share($key, $value);
	 }

	/**
	 * Register a view composer event.
	 *
	 * @param array|string  $views
	 * @param Closure|string  $callback
	 * @return Closure
	 * @static 
	 */
	 public static function composer($views, $callback){
		$root = new \Illuminate\View\Environment(null,null,null);
		return $root->composer($views, $callback);
	 }

	/**
	 * Call the composer for a given view.
	 *
	 * @param \Illuminate\View\View  $view
	 * @return void
	 * @static 
	 */
	 public static function callComposer($view){
		$root = new \Illuminate\View\Environment(null,null,null);
		$root->callComposer($view);
	 }

	/**
	 * Start injecting content into a section.
	 *
	 * @param string  $section
	 * @param string  $content
	 * @return void
	 * @static 
	 */
	 public static function startSection($section, $content = ''){
		$root = new \Illuminate\View\Environment(null,null,null);
		$root->startSection($section, $content);
	 }

	/**
	 * Inject inline content into a section.
	 *
	 * @param string  $section
	 * @param string  $content
	 * @return void
	 * @static 
	 */
	 public static function inject($section, $content){
		$root = new \Illuminate\View\Environment(null,null,null);
		$root->inject($section, $content);
	 }

	/**
	 * Stop injecting content into a section and return its contents.
	 *
	 * @return string
	 * @static 
	 */
	 public static function yieldSection(){
		$root = new \Illuminate\View\Environment(null,null,null);
		return $root->yieldSection();
	 }

	/**
	 * Stop injecting content into a section.
	 *
	 * @param bool  $overwrite
	 * @return string
	 * @static 
	 */
	 public static function stopSection($overwrite = false){
		$root = new \Illuminate\View\Environment(null,null,null);
		return $root->stopSection($overwrite);
	 }

	/**
	 * Get the string contents of a section.
	 *
	 * @param string  $section
	 * @param string  $default
	 * @return string
	 * @static 
	 */
	 public static function yieldContent($section, $default = ''){
		$root = new \Illuminate\View\Environment(null,null,null);
		return $root->yieldContent($section, $default);
	 }

	/**
	 * Flush all of the section contents.
	 *
	 * @return void
	 * @static 
	 */
	 public static function flushSections(){
		$root = new \Illuminate\View\Environment(null,null,null);
		$root->flushSections();
	 }

	/**
	 * Increment the rendering counter.
	 *
	 * @return void
	 * @static 
	 */
	 public static function incrementRender(){
		$root = new \Illuminate\View\Environment(null,null,null);
		$root->incrementRender();
	 }

	/**
	 * Decrement the rendering counter.
	 *
	 * @return void
	 * @static 
	 */
	 public static function decrementRender(){
		$root = new \Illuminate\View\Environment(null,null,null);
		$root->decrementRender();
	 }

	/**
	 * Check if there are no active render operations.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function doneRendering(){
		$root = new \Illuminate\View\Environment(null,null,null);
		return $root->doneRendering();
	 }

	/**
	 * Add a location to the array of view locations.
	 *
	 * @param string  $location
	 * @return void
	 * @static 
	 */
	 public static function addLocation($location){
		$root = new \Illuminate\View\Environment(null,null,null);
		$root->addLocation($location);
	 }

	/**
	 * Add a new namespace to the loader.
	 *
	 * @param string  $namespace
	 * @param string|array  $hints
	 * @return void
	 * @static 
	 */
	 public static function addNamespace($namespace, $hints){
		$root = new \Illuminate\View\Environment(null,null,null);
		$root->addNamespace($namespace, $hints);
	 }

	/**
	 * Register a valid view extension and its engine.
	 *
	 * @param string   $extension
	 * @param string   $engine
	 * @param Closure  $resolver
	 * @return void
	 * @static 
	 */
	 public static function addExtension($extension, $engine, $resolver = null){
		$root = new \Illuminate\View\Environment(null,null,null);
		$root->addExtension($extension, $engine, $resolver);
	 }

	/**
	 * Get the extension to engine bindings.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getExtensions(){
		$root = new \Illuminate\View\Environment(null,null,null);
		return $root->getExtensions();
	 }

	/**
	 * Get the engine resolver instance.
	 *
	 * @return \Illuminate\View\Engines\EngineResolver
	 * @static 
	 */
	 public static function getEngineResolver(){
		$root = new \Illuminate\View\Environment(null,null,null);
		return $root->getEngineResolver();
	 }

	/**
	 * Get the view finder instance.
	 *
	 * @return \Illuminate\View\ViewFinderInterface
	 * @static 
	 */
	 public static function getFinder(){
		$root = new \Illuminate\View\Environment(null,null,null);
		return $root->getFinder();
	 }

	/**
	 * Get the event dispatcher instance.
	 *
	 * @return \Illuminate\Events\Dispatcher
	 * @static 
	 */
	 public static function getDispatcher(){
		$root = new \Illuminate\View\Environment(null,null,null);
		return $root->getDispatcher();
	 }

	/**
	 * Get the IoC container instance.
	 *
	 * @return \Illuminate\Container\Container
	 * @static 
	 */
	 public static function getContainer(){
		$root = new \Illuminate\View\Environment(null,null,null);
		return $root->getContainer();
	 }

	/**
	 * Set the IoC container instance.
	 *
	 * @param \Illuminate\Container\Container  $container
	 * @return void
	 * @static 
	 */
	 public static function setContainer($container){
		$root = new \Illuminate\View\Environment(null,null,null);
		$root->setContainer($container);
	 }

	/**
	 * Get all of the shared data for the environment.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getShared(){
		$root = new \Illuminate\View\Environment(null,null,null);
		return $root->getShared();
	 }

	/**
	 * Get the entire array of sections.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getSections(){
		$root = new \Illuminate\View\Environment(null,null,null);
		return $root->getSections();
	 }

	/**
	 * Get all of the registered named views in environment.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getNames(){
		$root = new \Illuminate\View\Environment(null,null,null);
		return $root->getNames();
	 }

}

