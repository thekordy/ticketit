<?php

namespace Kordy\Ticketit\Tests\Unit;

use Kordy\Ticketit\Dto\TicketQuery;
use Orchestra\Testbench\TestCase;

class TicketQueryTest extends TestCase
{
	public function testChainedQuery()
	{
		$query = new TicketQuery();
		$query->userId(1)->categoryId(2, 'ne')->completedAt('2020-03-03', 'lte');

		$this->assertEquals([
			[
				'field' => 'user_id',
		        'operator' => '=',
		        'value' => 1
			],
			[
				'field' => 'category_id',
		        'operator' => '<>',
		        'value' => 2
			],
			[
				'field' => 'completed_at',
		        'operator' => '<=',
		        'value' => '2020-03-03'
			],
		], $query->getSearchParameters());
	}

	/**
	 * @dataProvider dumpQueryStrings
	 *
	 * @param array  $expectedFields
	 * @param string $queryString
	 *
	 * @throws \Kordy\Ticketit\Exceptions\TicketServiceException
	 */
	public function testBuildFromString(array $expectedMeta, array $expectedFields, string $queryString)
	{
		$result = TicketQuery::buildFromString($queryString);

		$this->assertEquals($expectedFields, $result->getSearchParameters());

		if (!empty($expectedMeta)) {
			foreach ($expectedMeta as $meta => $value) {
				$this->assertSame($value, $result->{'get'.ucfirst($meta)}());
			}
		}
	}

	public function dumpQueryStrings()
	{
		return [
			[
				[
					'orderBy' => ['id', 'desc']
				],
				[
					[
						'field' => 'user_id',
						'operator' => '=',
						'value' => '1'
					],
					[
						'field' => 'category_id',
						'operator' => '<=',
						'value' => '5'
					]
				],
				'user_id=eq:1&category_id=lte:5&orderBy=id:desc'
			],
			[
				[
					'offset' => 1,
					'limit' => 20,
				],
				[
					[
						'field' => 'created_at',
						'operator' => '<=',
						'value' => '2020-03-03'
					],
					[
						'field' => 'category_id',
						'operator' => 'in',
						'value' => [1,2,3]
					]
				],
				'created_at=lte:2020-03-03&category_id=in:1,2,3&offset=1&limit=20'
			]
		];
	}
}
