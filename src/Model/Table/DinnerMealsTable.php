<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DinnerMeals Model
 *
 * @method \App\Model\Entity\DinnerMeal newEmptyEntity()
 * @method \App\Model\Entity\DinnerMeal newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\DinnerMeal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DinnerMeal get($primaryKey, $options = [])
 * @method \App\Model\Entity\DinnerMeal findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\DinnerMeal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DinnerMeal[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DinnerMeal|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DinnerMeal saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DinnerMeal[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DinnerMeal[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\DinnerMeal[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DinnerMeal[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DinnerMealsTable extends Table
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

        $this->setTable('dinner_meals');
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
