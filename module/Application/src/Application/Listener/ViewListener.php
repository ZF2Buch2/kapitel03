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
namespace Application\Listener;

use Zend\EventManager\EventInterface;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;
use Zend\Mvc\MvcEvent;
use Zend\View\Model\ViewModel;

/**
 * Application listener
 * 
 * Listens on application level
 * 
 * @package    Application
 */
class ViewListener implements ListenerAggregateInterface
{
    /**
     * @var \Zend\Stdlib\CallbackHandler[]
     */
    protected $listeners = array();

    /**
     * Attach to an event manager
     *
     * @param  EventManagerInterface $events
     * @param  integer $priority
     */
    public function attach(EventManagerInterface $events)
    {
        $this->listeners[] = $events->attach(MvcEvent::EVENT_RENDER, array($this, 'renderLayoutSegments'), -100);
    }

    /**
     * Detach all our listeners from the event manager
     *
     * @param  EventManagerInterface $events
     * @return void
     */
    public function detach(EventManagerInterface $events)
    {
        foreach ($this->listeners as $index => $listener) {
            if ($events->detach($listener)) {
                unset($this->listeners[$index]);
            }
        }
    }

    /**
     * Listen to the "render" event and render additional layout segments
     *
     * @param  MvcEvent $e
     * @return null
     */
    public function renderLayoutSegments(EventInterface $e)
    {
        // get view Model
        $viewModel = $e->getViewModel(); /* @var $viewModel ViewModel */
        
        // add an additional header segment to layout
        $header = new ViewModel();
        $header->setTemplate('layout/header');
        $viewModel->addChild($header, 'header');
        
        // add an additional sidebar segment to layout
        $sidebar = new ViewModel();
        $sidebar->setTemplate('layout/sidebar');
        $viewModel->addChild($sidebar, 'sidebar');
        
        // add an additional footer segment to layout
        $footer = new ViewModel();
        $footer->setTemplate('layout/footer');
        $viewModel->addChild($footer, 'footer');
        
        // return response
        return $e->getResponse();
    }
}
