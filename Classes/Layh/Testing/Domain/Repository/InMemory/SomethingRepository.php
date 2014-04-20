<?php
namespace Layh\Testing\Domain\Repository\InMemory;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Layh.Testing".          *
 *                                                                        *
 *                                                                        */

use Layh\Testing\Domain\Model\Something;
use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Persistence\Repository;

/**
 * @Flow\Scope("singleton")
 * @Flow\Autowiring(false)
 */
class SomethingRepository extends Repository {

	const ENTITY_CLASSNAME = 'Layh\Testing\Domain\Model\Something';

	public function findAll() {
		$something = new Something();
		$something->setName('InMemory1');

		$something2 = new Something();
		$something2->setName('InMemory2');

		return array($something, $something2);
	}

}