<?php

namespace MysoJobMarket\MysoJobmarket\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Ralf Hüskes <r.hueskes@werteins.com>, Wert Eins
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \MysoJobMarket\MysoJobmarket\Domain\Model\Location.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Ralf Hüskes <r.hueskes@werteins.com>
 */
class LocationTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \MysoJobMarket\MysoJobmarket\Domain\Model\Location
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \MysoJobMarket\MysoJobmarket\Domain\Model\Location();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getShortTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getShortTitle()
		);
	}

	/**
	 * @test
	 */
	public function setShortTitleForStringSetsShortTitle() {
		$this->subject->setShortTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'shortTitle',
			$this->subject
		);
	}
}