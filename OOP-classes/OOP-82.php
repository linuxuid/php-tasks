<?php 
/**
 * Класс SessionShell
 */ 
class CookieShell
{
	private $name;

	public function __construct()
		{
			if (!isset($_SESSION)) {
				session_start();
			} else {
				return 'session is already exists';
			}
		}
		
		public function set($name, $value)
		{
			$_SESSION[$this->name] = $value;
		}
		
		public function get($name)
		{
			return $_SESSION[$this->name];
		}
		
		public function del($name)
		{
			unset($this->name);
		}
		
		public function exists($name)
		{
			if (isset($_SESSION[$this->name])) {
				echo 'Session is exists : ' . $_SESSION[$this->name];
			} else {
				echo 'session doesn\'t exists';
			}
		}
		
		public function destroy()
		{
			return session_destroy();
		}
}
/**
 * session_start()
 */ 
$csl = new CookieShell();
/**
 * set Session name
 */ 
$csl->set('count', 'user');
echo $csl->get('count'); 
/**
 * checking Session exists
 */ 
$csl->exists('count');
/**
 * 
 */
$csl->del('count');  
/**
 * session destroy
 */ 
echo $csl->destroy();
?>