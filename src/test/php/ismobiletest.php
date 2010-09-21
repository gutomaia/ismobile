<?php

class IsMobileTest extends PHPUnit_Framework_TestCase {


	public function testMobiles() {
		$mobiles = array (
			'Nokia6600/1.0 (4.09.1) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0',
			'BlackBerry8330/4.3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 VendorID/105',
			'Opera/8.01 (J2ME/MIDP; Opera Mini/3.0.6306/1528; en; U; ssr)',
			'Mozilla/5.0 (iPhone; U; CPU like Mac OS X; en) AppleWebKit/420+ (KHTML, like Gecko) Version/3.0 Mobile/1A543a Safari/419.3',
			'Mozilla/5.0 (Linux; U; Android 1.6; en-it; HTC_TATTOO_A3288 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
			'Mozilla/5.0(iPad; U; CPU iPhone OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B314 Safari/531.21.10'
		);
		$http_accept = array(
			"text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
			"application/vnd.rim.html,text/html,application/xhtml+xml,application/vnd.wap.xhtml+xml,text/vnd.sun.j2me.app-descriptor,image/vnd.rim.png,image/jpeg,application/x-vnd.rim.pme.b,application/vnd.rim.ucs,image/gif;anim=1,application/vnd.rim.jscriptc;v=0-8-8,application/x-javascript,application/vnd.rim.css;v=1,text/css;media=screen,application/vnd.wap.wmlc;q=0.9,application/vnd.wap.wmlscriptc;q=0.7,text/vnd.wap.wml;q=0.7,*/*;q=0.5"
		);
		foreach ($mobiles as $mobile){
			foreach($http_accept as $accept){
				$message = $mobile.' and '. $accept.' is not a mobile.';
				$ismobile = new IsMobile($mobile, $accept);
				$test = $ismobile->CheckMobile();
				$this->assertTrue($test, $message);
				//$test = new isMobile($mobile, $accept)->CheckMobile();	
				//$this->assertTrue(new isMobile($mobile, $accept)->CheckMobile(), $mobile.' and '.$accept.' is not a mobile.');
			};
		};
	}

	public function testNotMobiles(){
		$browsers = array (
		);
		$this->assertTrue(false);

	}

	
}
