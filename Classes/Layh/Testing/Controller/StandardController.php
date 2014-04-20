<?php
namespace Layh\Testing\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Layh.Testing".          *
 *                                                                        *
 *                                                                        */

use Layh\Testing\Domain\Model\Something;
use Layh\Testing\Domain\Repository\SomethingRepository;
use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;

class StandardController extends ActionController {

	/**
	 * @var SomethingRepository
	 * @Flow\Inject
	 */
	protected $somethingRepository;

	/**
	 * @return void
	 */
	public function indexAction() {
		$somethings = $this->somethingRepository->findAll();
		$this->view->assign('somethings', $somethings);
	}

	/**
	 * @param Something $something
	 */
	public function addAction(Something $something) {
		$this->somethingRepository->add($something);
		$this->redirect('index');
	}

}