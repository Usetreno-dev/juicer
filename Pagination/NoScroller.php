<?php

namespace Keboola\Juicer\Pagination;

use	Keboola\Juicer\Client\ClientInterface,
	Keboola\Juicer\Config\JobConfig;
/**
 * For extractors with no pagination
 */
class NoScroller implements ScrollerInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function getNextRequest(ClientInterface $client, JobConfig $jobConfig, $response, $data)
	{
		return false;
	}

	/**
	 * {@inheritdoc}
	 */
	public function reset() {}

	/**
	 * {@inheritdoc}
	 */
	public static function create(array $config) {
		return new self;
	}
}