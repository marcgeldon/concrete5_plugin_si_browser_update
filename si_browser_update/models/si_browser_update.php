<?php 
/*
*
* Copyright (c) 2009-2012 Marc Geldon <mgeldon@mindnet-systemhaus.com>, MindNet Systemhaus GmbH (www.mindnet-systemhaus.com)
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

* @author Marc Geldon <mgeldon@mindnet-systemhaus.com>
* @copyright Copyright (c) 2009-2012 Marc Geldon <mgeldon@mindnet-systemhaus.com>, MindNet Systemhaus GmbH (www.mindnet-systemhaus.com)
* @license MIT License
*/

defined('C5_EXECUTE') or die(_("Access Denied."));

class SiBrowserUpdate {
	public function addPageHeader($pid) {
		$v = View::getInstance();		
		$v->addHeaderItem('<script type="text/javascript"> 
var $buoop = {} 
$buoop.ol = window.onload; 
window.onload=function(){ 
 try {if ($buoop.ol) $buoop.ol();}catch (e) {} 
 var e = document.createElement("script"); 
 e.setAttribute("type", "text/javascript"); 
 e.setAttribute("src", "http://browser-update.org/update.js"); 
 document.body.appendChild(e); 
} 
</script>', 'CONTROLLER');
	}
}