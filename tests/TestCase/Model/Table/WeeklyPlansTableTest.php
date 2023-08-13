<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WeeklyPlansTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WeeklyPlansTable Test Case
 */
class WeeklyPlansTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WeeklyPlansTable
     */
    protected $WeeklyPlans;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.WeeklyPlans',
        'app.Users',
        'app.BreakfastMeals',
        'app.LunchMeals',
        'app.DinnerMeals',
        'app.Snacks',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('WeeklyPlans') ? [] : ['className' => WeeklyPlansTable::class];
        $this->WeeklyPlans = $this->getTableLocator()->get('WeeklyPlans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->WeeklyPlans);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\WeeklyPlansTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\WeeklyPlansTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
