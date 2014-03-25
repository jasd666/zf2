<?php
/**
 * @namespace Album\Controller
 */
namespace Album\Controller;

use \Zend\Mvc\Controller\AbstractActionController;
use \Zend\View\Model\ViewModel;

/**
 * User: rudenko
 *
 * @category Album
 * @package Controller
 * @subpackage AlbumController
 *
 * @version ...
 */
class AlbumController extends AbstractActionController
{
    public function indexAction()
    {
        echo 'Album\indexAction';
    }
    public function addAction()
    {
        echo 'Album\addAction';
    }
    public function editAction()
    {
        echo 'Album\editAction';
    }
    public function deleteAction()
    {
        echo 'Album\deleteAction';
    }
} 