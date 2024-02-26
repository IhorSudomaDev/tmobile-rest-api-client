<?php

namespace TMobileApiClient\Requests\_AbstractRequests;

/*** Interface IRequest */
interface IRequest
{

	/*** @return string */
	public function getUrl(): string;

	/*** @return array */
	public function getData(): array;

}