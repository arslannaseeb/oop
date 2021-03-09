/**
 * cpu
 */
class Cpu
{
	/**
	 * @return void
	 */
	public function run()
	{
		echo "cpu starts to run";
	}
}

/**
 * memory
 */
class Memory
{
	/**
	 * @return void
	 */
	public function run()
	{
		echo "memory starts to run";
	}
}

/**
 * monitor
 */
class Monitor
{
	/**
	 * @return void
	 */
	public function run()
	{
		echo "monitor starts to run";
	}
}
Step 2: create computer class

/**
 * computer
 */
class ComputerFacade
{

	protected $cpu;
	protected $memory;
	protected $monitor;
	
	public function __construct()
	{
		$this->cpu = new Cpu();
		$this->memory = new Memory();
		$this->monitor = new Monitor();
	}


	public function run()
	{
		$this->cpu->run();
		$this->memory->run();
		$this->monitor->run();
	}
}
Step 3: create computer object and execute it

$computer = new ComputerFacade();
$computer->run();