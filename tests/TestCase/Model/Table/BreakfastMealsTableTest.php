<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BreakfastMealsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BreakfastMealsTable Test Case
 */
class BreakfastMealsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BreakfastMealsTable
     */
    protected $BreakfastMeals;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.BreakfastMeals',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BreakfastMeals') ? [] : ['className' => BreakfastMealsTable::class];
        $this->BreakfastMeals = $this->getTableLocator()->get('BreakfastMeals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BreakfastMeals);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BreakfastMealsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
