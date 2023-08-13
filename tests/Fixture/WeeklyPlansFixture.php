<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WeeklyPlansFixture
 */
class WeeklyPlansFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'plan_date' => '2023-08-05',
                'breakfast_id' => 1,
                'lunch_id' => 1,
                'dinner_id' => 1,
                'snack_id' => 1,
            ],
        ];
        parent::init();
    }
}
