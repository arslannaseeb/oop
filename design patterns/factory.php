class CarFactory {
 
  protected $car;
  
  // Determine which model to manufacture, and instantiate 
  //  the concrete classes that make each model.
  public function make($model=null)
  {
    if(strtolower($model) == 'r')
      return $this->car = new CarModelR();
  
    return $this->car = new CarModelS();
  }
}

class CarOrder {
  protected $carOrders = array();
  protected $car;
  
  // First, create the carFactory object in the constructor.
  public function __construct()
  {
    $this->car = new CarFactory();
  }
  
  public function order($model=null)
  {
    // Use the make() method from the carFactory.
    $car = $this->car->make($model);
    $this->carOrders[]=$car->getModel();
  }
  
  public function getCarOrders()
  {
    return $this->carOrders;
  }
}
