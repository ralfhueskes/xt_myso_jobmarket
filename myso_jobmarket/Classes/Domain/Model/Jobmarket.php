<?php
namespace MysoJobMarket\MysoJobmarket\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Ralf Hüskes <r.hueskes@werteins.com>, Wert Eins
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * Jobmarket
 */
class Jobmarket extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * id
	 *
	 * @var string
	 */
	protected $id = '';

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * subtitle
	 *
	 * @var string
	 */
	protected $subtitle = '';

	/**
	 * company
	 *
	 * @var string
	 */
	protected $company = '';

	/**
	 * task
	 *
	 * @var string
	 */
	protected $task = '';

	/**
	 * profile
	 *
	 * @var string
	 */
	protected $profile = '';

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * image
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $image = NULL;

	/**
	 * relationships
	 *
	 * @var \MysoJobMarket\MysoJobmarket\Domain\Model\Relationship
	 */
	protected $relationships = NULL;

	/**
	 * locations
	 *
	 * @var \MysoJobMarket\MysoJobmarket\Domain\Model\Location
	 */
	protected $locations = NULL;

	/**
	 * industries
	 *
	 * @var \MysoJobMarket\MysoJobmarket\Domain\Model\Industrie
	 */
	protected $industries = NULL;

	/**
	 * contracts
	 *
	 * @var \MysoJobMarket\MysoJobmarket\Domain\Model\Contract
	 */
	protected $contracts = NULL;

	/**
	 * Returns the id
	 *
	 * @return string $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Sets the id
	 *
	 * @param string $id
	 * @return void
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the subtitle
	 *
	 * @return string $subtitle
	 */
	public function getSubtitle() {
		return $this->subtitle;
	}

	/**
	 * Sets the subtitle
	 *
	 * @param string $subtitle
	 * @return void
	 */
	public function setSubtitle($subtitle) {
		$this->subtitle = $subtitle;
	}

	/**
	 * Returns the company
	 *
	 * @return string $company
	 */
	public function getCompany() {
		return $this->company;
	}

	/**
	 * Sets the company
	 *
	 * @param string $company
	 * @return void
	 */
	public function setCompany($company) {
		$this->company = $company;
	}

	/**
	 * Returns the task
	 *
	 * @return string $task
	 */
	public function getTask() {
		return $this->task;
	}

	/**
	 * Sets the task
	 *
	 * @param string $task
	 * @return void
	 */
	public function setTask($task) {
		$this->task = $task;
	}

	/**
	 * Returns the profile
	 *
	 * @return string $profile
	 */
	public function getProfile() {
		return $this->profile;
	}

	/**
	 * Sets the profile
	 *
	 * @param string $profile
	 * @return void
	 */
	public function setProfile($profile) {
		$this->profile = $profile;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the image
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 * @return void
	 */
	public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
		$this->image = $image;
	}

	/**
	 * Returns the relationships
	 *
	 * @return \MysoJobMarket\MysoJobmarket\Domain\Model\Relationship $relationships
	 */
	public function getRelationships() {
		return $this->relationships;
	}

	/**
	 * Sets the relationships
	 *
	 * @param \MysoJobMarket\MysoJobmarket\Domain\Model\Relationship $relationships
	 * @return void
	 */
	public function setRelationships(\MysoJobMarket\MysoJobmarket\Domain\Model\Relationship $relationships) {
		$this->relationships = $relationships;
	}

	/**
	 * Returns the locations
	 *
	 * @return \MysoJobMarket\MysoJobmarket\Domain\Model\Location $locations
	 */
	public function getLocations() {
		return $this->locations;
	}

	/**
	 * Sets the locations
	 *
	 * @param \MysoJobMarket\MysoJobmarket\Domain\Model\Location $locations
	 * @return void
	 */
	public function setLocations(\MysoJobMarket\MysoJobmarket\Domain\Model\Location $locations) {
		$this->locations = $locations;
	}

	/**
	 * Returns the industries
	 *
	 * @return \MysoJobMarket\MysoJobmarket\Domain\Model\Industrie $industries
	 */
	public function getIndustries() {
		return $this->industries;
	}

	/**
	 * Sets the industries
	 *
	 * @param \MysoJobMarket\MysoJobmarket\Domain\Model\Industrie $industries
	 * @return void
	 */
	public function setIndustries(\MysoJobMarket\MysoJobmarket\Domain\Model\Industrie $industries) {
		$this->industries = $industries;
	}

	/**
	 * Returns the contracts
	 *
	 * @return \MysoJobMarket\MysoJobmarket\Domain\Model\Contract $contracts
	 */
	public function getContracts() {
		return $this->contracts;
	}

	/**
	 * Sets the contracts
	 *
	 * @param \MysoJobMarket\MysoJobmarket\Domain\Model\Contract $contracts
	 * @return void
	 */
	public function setContracts(\MysoJobMarket\MysoJobmarket\Domain\Model\Contract $contracts) {
		$this->contracts = $contracts;
	}

}