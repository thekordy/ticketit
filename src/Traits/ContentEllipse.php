<?php


namespace Kordy\Ticketit\Traits;


trait ContentEllipse {
	/**
	 * Cuts the content of a comment or a ticket content if it's too long
	 *
	 * @param int $maxlength
	 * @return string
	 */
	public function getShortContent($maxlength = 50, $attr="content"){
		$content = $this->{$attr};
		if(strlen($content) > $maxlength){
			return substr($content, 0, $maxlength) . "...";
		}

		return $content;
	}
}