<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SnacksTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SnacksTable Test Case
 */
class SnacksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SnacksTable
     */
    protected $Snacks;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
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
        $config = $this->getTableLocator()->exists('Snacks') ? [] : ['className' => SnacksTable::class];
        $this->Snacks = $this->getTableLocator()->get('Snacks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Snacks);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SnacksTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
