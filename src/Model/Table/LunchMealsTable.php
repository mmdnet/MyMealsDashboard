<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LunchMeals Model
 *
 * @method \App\Model\Entity\LunchMeal newEmptyEntity()
 * @method \App\Model\Entity\LunchMeal newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\LunchMeal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LunchMeal get($primaryKey, $options = [])
 * @method \App\Model\Entity\LunchMeal findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\LunchMeal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LunchMeal[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LunchMeal|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LunchMeal saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LunchMeal[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LunchMeal[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\LunchMeal[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LunchMeal[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LunchMealsTable extends Table
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

        $this->setTable('lunch_meals');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
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
            ->scalar('title')
            ->maxLength('title', 100)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('ingredients')
            ->requirePresence('ingredients', 'create')
            ->notEmptyString('ingredients');

        $validator
            ->scalar('recipe')
            ->requirePresence('recipe', 'create')
            ->notEmptyString('recipe');

        return $validator;
    }
}
