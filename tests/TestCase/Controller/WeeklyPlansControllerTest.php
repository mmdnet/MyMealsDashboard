<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\WeeklyPlansController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\WeeklyPlansController Test Case
 *
 * @uses \App\Controller\WeeklyPlansController
 */
class WeeklyPlansControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
     * Test index method
     *
     * @return void
     * @uses \App\Controller\WeeklyPlansController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\WeeklyPlansController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\WeeklyPlansController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\WeeklyPlansController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\WeeklyPlansController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
