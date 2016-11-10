<?php
namespace Craft;

class ThemerVariable {

  public function settings() {
		return craft()->plugins->getPlugin('themer')->getSettings();
	}

}
