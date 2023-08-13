<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LunchMealsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LunchMealsTable Test Case
 */
class LunchMealsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LunchMealsTable
     */
    protected $LunchMeals;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.LunchMeals',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('LunchMeals') ? [] : ['className' => LunchMealsTable::class];
        $this->LunchMeals = $this->getTableLocator()->get('LunchMeals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->LunchMeals);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LunchMealsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
