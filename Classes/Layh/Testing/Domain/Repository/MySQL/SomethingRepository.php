<?php
namespace Layh\Testing\Domain\Repository\MySQL;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Layh.Testing".          *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Persistence\Repository;

/**
 * @Flow\Scope("singleton")
 * @Flow\Autowiring(false)
 */
class SomethingRepository extends Repository {

	const ENTITY_CLASSNAME = 'Layh\Testing\Domain\Model\Something';

}