<?php
namespace Layh\Testing\Tests\Functional\Controller;

use TYPO3\Flow\Tests\FunctionalTestCase;

/**
 * Class StandardControllerTest
 */
class StandardControllerTest extends FunctionalTestCase {

	/**
	 * @test
	 */
	public function canServerHomepage() {
		$this->browser->request('http://localhost/layh.testing/standard/index');
		$response = $this->browser->getLastResponse();
		$this->assertEquals(200, $response->getStatusCode());

		$crawler = $this->browser->getCrawler();

		$this->assertContains('InMemory1', $crawler->filterXPath('//li[1]/text()')->text(), 'InMemory1 not found');
		$this->assertContains('InMemory2', $crawler->filterXPath('//li[2]/text()')->text(), 'InMemory2 not found');
	}

}
