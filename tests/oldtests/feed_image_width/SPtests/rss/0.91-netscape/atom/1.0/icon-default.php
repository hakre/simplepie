<?php

class SimplePie_Feed_Image_Width_Test_RSS_091_Netscape_Atom_10_Icon extends SimplePie_Feed_Image_Width_Test
{
	function data()
	{
		$this->data =
'<!DOCTYPE rss SYSTEM "http://my.netscape.com/publish/formats/rss-0.91.dtd">
<rss version="0.91" xmlns:a="http://www.w3.org/2005/Atom">
	<channel>
		<a:icon>http://example.com/</a:icon>
	</channel>
</rss>';
	}

	function expected()
	{
		$this->expected = NULL;
	}
}

?>