<?php
/**
 * ZF2 Buch Kapitel 3
 * 
 * Das Buch "Zend Framework 2 - Von den Grundlagen bis zur fertigen Anwendung"
 * von Ralf Eggert ist im Addison-Wesley Verlag erschienen. 
 * ISBN 978-3-8273-2994-3
 * 
 * @package    Application
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.awl.de/2994
 */

/**
 * namespace definition and usage
 */
namespace Application\Controller;

use Zend\Debug\Debug;
use Zend\Di\Config as DiConfig;
use Zend\Di\Di;
use Zend\Di\DefinitionList;
use Zend\Di\Definition\CompilerDefinition;
use Zend\Di\Definition\ArrayDefinition;
use Zend\Di\Definition\RuntimeDefinition;
use Zend\Math\Rand;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\ServiceManager\Config as ServiceManagerConfig;
use Zend\ServiceManager\ServiceManager;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\View\Model\ViewModel;
use Pizza\Config\ServiceConfiguration;
use Pizza\Crust\WheatFlourAwareInterface;
use Pizza\Topping\ToppingAbstractFactory;

/**
 * Listing controller
 * 
 * Shows and executes the listings
 * 
 * @package    Application
 */
class ListingController extends AbstractActionController
{
    /**
     * Redirects to homepage
     */
    public function indexAction()
    {
        return $this->redirect()->toRoute('home');
    }
    
    /**
     * Show listing 03.01
     */
    public function listing0301Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 03.02
     */
    public function listing0302Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 03.03
     */
    public function listing0303Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 03.04
     */
    public function listing0304Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 03.05
     */
    public function listing0305Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 03.06
     */
    public function listing0306Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 03.07
     */
    public function listing0307Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 03.08
     */
    public function listing0308Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 03.09
     */
    public function listing0309Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 03.10
     */
    public function listing0310Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 03.11
     */
    public function listing0311Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 03.12
     */
    public function listing0312Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 03.13
     */
    public function listing0313Action()
    {
        return new ViewModel();
    }
}
