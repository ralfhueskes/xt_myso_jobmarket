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
 * Test case for class \MysoJobMarket\MysoJobmarket\Domain\Model\Jobmarket.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Ralf Hüskes <r.hueskes@werteins.com>
 */
class JobmarketTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \MysoJobMarket\MysoJobmarket\Domain\Model\Jobmarket
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \MysoJobMarket\MysoJobmarket\Domain\Model\Jobmarket();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getIdReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getId()
		);
	}

	/**
	 * @test
	 */
	public function setIdForStringSetsId() {
		$this->subject->setId('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'id',
			$this->subject
		);
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
	public function getSubtitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSubtitle()
		);
	}

	/**
	 * @test
	 */
	public function setSubtitleForStringSetsSubtitle() {
		$this->subject->setSubtitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'subtitle',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCompanyReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCompany()
		);
	}

	/**
	 * @test
	 */
	public function setCompanyForStringSetsCompany() {
		$this->subject->setCompany('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'company',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTaskReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTask()
		);
	}

	/**
	 * @test
	 */
	public function setTaskForStringSetsTask() {
		$this->subject->setTask('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'task',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getProfileReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getProfile()
		);
	}

	/**
	 * @test
	 */
	public function setProfileForStringSetsProfile() {
		$this->subject->setProfile('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'profile',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() {
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getImage()
		);
	}

	/**
	 * @test
	 */
	public function setImageForFileReferenceSetsImage() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'image',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRelationshipsReturnsInitialValueForRelationship() {
		$this->assertEquals(
			NULL,
			$this->subject->getRelationships()
		);
	}

	/**
	 * @test
	 */
	public function setRelationshipsForRelationshipSetsRelationships() {
		$relationshipsFixture = new \MysoJobMarket\MysoJobmarket\Domain\Model\Relationship();
		$this->subject->setRelationships($relationshipsFixture);

		$this->assertAttributeEquals(
			$relationshipsFixture,
			'relationships',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLocationsReturnsInitialValueForLocation() {
		$this->assertEquals(
			NULL,
			$this->subject->getLocations()
		);
	}

	/**
	 * @test
	 */
	public function setLocationsForLocationSetsLocations() {
		$locationsFixture = new \MysoJobMarket\MysoJobmarket\Domain\Model\Location();
		$this->subject->setLocations($locationsFixture);

		$this->assertAttributeEquals(
			$locationsFixture,
			'locations',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getIndustriesReturnsInitialValueForIndustrie() {
		$this->assertEquals(
			NULL,
			$this->subject->getIndustries()
		);
	}

	/**
	 * @test
	 */
	public function setIndustriesForIndustrieSetsIndustries() {
		$industriesFixture = new \MysoJobMarket\MysoJobmarket\Domain\Model\Industrie();
		$this->subject->setIndustries($industriesFixture);

		$this->assertAttributeEquals(
			$industriesFixture,
			'industries',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContractsReturnsInitialValueForContract() {
		$this->assertEquals(
			NULL,
			$this->subject->getContracts()
		);
	}

	/**
	 * @test
	 */
	public function setContractsForContractSetsContracts() {
		$contractsFixture = new \MysoJobMarket\MysoJobmarket\Domain\Model\Contract();
		$this->subject->setContracts($contractsFixture);

		$this->assertAttributeEquals(
			$contractsFixture,
			'contracts',
			$this->subject
		);
	}
}
