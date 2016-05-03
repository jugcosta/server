<?php
/**
 * Copyright (c) 2012 Robin Appelman <icewind@owncloud.com>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

use OC\Archive\TAR;

class Test_Archive_TAR extends Test_Archive {
	protected function setUp() {
		parent::setUp();

		if (OC_Util::runningOnWindows()) {
			$this->markTestSkipped('[Windows] tar archives are not supported on Windows');
		}
	}

	protected function getExisting() {
		$dir = OC::$SERVERROOT . '/tests/data';
		return new TAR($dir . '/data.tar.gz');
	}

	protected function getNew() {
		return new TAR(OCP\Files::tmpFile('.tar.gz'));
	}
}
