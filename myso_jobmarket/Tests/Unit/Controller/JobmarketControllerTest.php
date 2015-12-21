<?php
namespace MysoJobMarket\MysoJobmarket\Tests\Unit\Controller;
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
 * Test case for class MysoJobMarket\MysoJobmarket\Controller\JobmarketController.
 *
 * @author Ralf Hüskes <r.hueskes@werteins.com>
 */
class JobmarketControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \MysoJobMarket\MysoJobmarket\Controller\JobmarketController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('MysoJobMarket\\MysoJobmarket\\Controller\\JobmarketController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllJobmarketsFromRepositoryAndAssignsThemToView() {

		$allJobmarkets = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$jobmarketRepository = $this->getMock('MysoJobMarket\\MysoJobmarket\\Domain\\Repository\\JobmarketRepository', array('findAll'), array(), '', FALSE);
		$jobmarketRepository->expects($this->once())->method('findAll')->will($this->returnValue($allJobmarkets));
		$this->inject($this->subject, 'jobmarketRepository', $jobmarketRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('jobmarkets', $allJobmarkets);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenJobmarketToView() {
		$jobmarket = new \MysoJobMarket\MysoJobmarket\Domain\Model\Jobmarket();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('jobmarket', $jobmarket);

		$this->subject->showAction($jobmarket);
	}
}
