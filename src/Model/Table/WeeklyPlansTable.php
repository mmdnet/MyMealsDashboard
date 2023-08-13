<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WeeklyPlans Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\BreakfastMealsTable&\Cake\ORM\Association\BelongsTo $BreakfastMeals
 * @property \App\Model\Table\LunchMealsTable&\Cake\ORM\Association\BelongsTo $LunchMeals
 * @property \App\Model\Table\DinnerMealsTable&\Cake\ORM\Association\BelongsTo $DinnerMeals
 * @property \App\Model\Table\SnacksTable&\Cake\ORM\Association\BelongsTo $Snacks
 *
 * @method \App\Model\Entity\WeeklyPlan newEmptyEntity()
 * @method \App\Model\Entity\WeeklyPlan newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\WeeklyPlan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\WeeklyPlan get($primaryKey, $options = [])
 * @method \App\Model\Entity\WeeklyPlan findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\WeeklyPlan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\WeeklyPlan[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\WeeklyPlan|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WeeklyPlan saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WeeklyPlan[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\WeeklyPlan[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\WeeklyPlan[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\WeeklyPlan[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class WeeklyPlansTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('weekly_plans');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('BreakfastMeals', [
            'foreignKey' => 'breakfast_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('LunchMeals', [
            'foreignKey' => 'lunch_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('DinnerMeals', [
            'foreignKey' => 'dinner_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Snacks', [
            'foreignKey' => 'snack_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->date('plan_date')
            ->requirePresence('plan_date', 'create')
            ->notEmptyDate('plan_date');

        $validator
            ->integer('breakfast_id')
            ->notEmptyString('breakfast_id');

        $validator
            ->integer('lunch_id')
            ->notEmptyString('lunch_id');

        $validator
            ->integer('dinner_id')
            ->notEmptyString('dinner_id');

        $validator
            ->integer('snack_id')
            ->notEmptyString('snack_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn('breakfast_id', 'BreakfastMeals'), ['errorField' => 'breakfast_id']);
        $rules->add($rules->existsIn('lunch_id', 'LunchMeals'), ['errorField' => 'lunch_id']);
        $rules->add($rules->existsIn('dinner_id', 'DinnerMeals'), ['errorField' => 'dinner_id']);
        $rules->add($rules->existsIn('snack_id', 'Snacks'), ['errorField' => 'snack_id']);

        return $rules;
    }
}
