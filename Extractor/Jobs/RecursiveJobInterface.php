<?php
namespace Keboola\Juicer\Extractor\Jobs;

/**
 * Interface for use of recursive API calls.
 * Based on response from previous calls
 */
interface RecursiveJobInterface
{
	/**
	 * Add parameters from parent call to the Endpoint.
	 * The parameter name in the config's endpoint has to be enclosed in {}
	 * @param array $params
	 * @return void
	 */
	public function setParams(array $params);

	/**
	 * Pass "down" the result to enable its use in subsequent calls.
	 * @param mixed $result
	 * @param mixed $previousParent
	 * @return void
	 */
	public function setParentResult($result, array $previousParent);
}
