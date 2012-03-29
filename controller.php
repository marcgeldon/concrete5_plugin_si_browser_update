<?php   
/*
*
* Copyright (c) 2009 Marc Geldon <marc.geldon@scalait.de>, SCALA IT (www.scalait.de)
*
* Permission is hereby granted, free of charge, to any person obtaining a 
* copy of this software and associated documentation files (the 
* "Software"), to deal in the Software without restriction, including 
* without limitation the rights to use, copy, modify, merge, publish, 
* distribute, sublicense, and/or sell copies of the Software, and to 
* permit persons to whom the Software is furnished to do so, subject to 
* the following conditions: 
* 
* The above copyright notice and this permission notice shall be included 
* in all copies or substantial portions of the Software. 
* 
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS 
* OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF 
* MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. 
* IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY 
* CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, 
* TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE 
* SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE. 

* @author Marc Geldon <marc.geldon@scalait.de
* @copyright Copyright (c) 2009 Marc Geldon, SCALA IT (http://www.scalait.de)
* @license MIT License
*/

defined('C5_EXECUTE') or die(_("Access Denied."));

class SiBrowserUpdatePackage extends Package {

	protected $pkgHandle = 'si_browser_update';
	protected $appVersionRequired = '5.3.1';
	protected $pkgVersion = '1.0'; 
	
	public function getPackageName() {
		return t("SCALA IT Browser Update Notification"); 
	}	
	
	public function getPackageDescription() {
		return t("Inform your visitors unobtrusively to switch to a newer browser. Based on the Browser-Update.org initiative.");
	}
	
public function on_start() {   
  Events::extend( 
  'on_before_render', 
  'SiBrowserUpdate', 
  'addPageHeader', 
  'packages/'.$this->pkgHandle.'/models/si_browser_update.php'); 
} 
	
	public function install() {
		$pkg = parent::install();
	}
	
	public function uninstall() {
		$pkg = parent::uninstall();
	}
}
?>