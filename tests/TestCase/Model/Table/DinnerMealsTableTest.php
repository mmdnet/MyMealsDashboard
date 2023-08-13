<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DinnerMealsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DinnerMealsTable Test Case
 */
class DinnerMealsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DinnerMealsTable
     */
    protected $DinnerMeals;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.DinnerMeals',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DinnerMeals') ? [] : ['className' => DinnerMealsTable::class];
        $this->DinnerMeals = $this->getTableLocator()->get('DinnerMeals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DinnerMeals);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DinnerMealsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
