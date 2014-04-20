<?php
namespace Layh\Testing\Domain\Repository;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Layh.Testing".          *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Persistence\RepositoryInterface;

/**
 * class SomethingRepository
 */
interface SomethingRepository extends RepositoryInterface {

	public function findAll();

}