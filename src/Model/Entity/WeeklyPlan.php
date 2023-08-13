<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WeeklyPlan Entity
 *
 * @property int $id
 * @property int $user_id
 * @property \Cake\I18n\FrozenDate $plan_date
 * @property int $breakfast_id
 * @property int $lunch_id
 * @property int $dinner_id
 * @property int $snack_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\BreakfastMeal $breakfast_meal
 * @property \App\Model\Entity\LunchMeal $lunch_meal
 * @property \App\Model\Entity\DinnerMeal $dinner_meal
 * @property \App\Model\Entity\Snack $snack
 */
class WeeklyPlan extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'user_id' => true,
        'plan_date' => true,
        'breakfast_id' => true,
        'lunch_id' => true,
        'dinner_id' => true,
        'snack_id' => true,
        'user' => true,
        'breakfast_meal' => true,
        'lunch_meal' => true,
        'dinner_meal' => true,
        'snack' => true,
    ];
}
