<?php
App::uses('PortfolioCategory', 'Model');

/**
 * PortfolioCategory Test Case
 *
 */
class PortfolioCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.portfolio_category',
		'app.photo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PortfolioCategory = ClassRegistry::init('PortfolioCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PortfolioCategory);

		parent::tearDown();
	}

}
