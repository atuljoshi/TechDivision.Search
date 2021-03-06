<?php

namespace TechDivision\Search\Provider\Solr\Extension\Factories;

/*                                                                        *
 * This belongs to the TYPO3 Flow package "TechDivision.Search"           *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License, either version 3 of the   *
 * License, or (at your option) any later version.                        *
 *                                                                        *
 * Copyright (C) 2013 Matthias Witte                                      *
 * http://www.matthias-witte.net                                          */

use TYPO3\Flow\Annotations as Flow;

/**
 * @Flow\Scope("singleton")
 */
class FieldFactory
{
	/**
	 * Creates an array of Fields by given array of Documents
	 *
	 * @param array $documentArray
	 * @return array contains
	 */
	public function createFieldsWith($documentArray){
		$fields = array();
		// create one field for each field in the response
		foreach($documentArray as $fieldName => $fieldValue){
			$fields[] = new \TechDivision\Search\Field\Field($fieldName, $fieldValue);
		}
		return $fields;
	}
}
