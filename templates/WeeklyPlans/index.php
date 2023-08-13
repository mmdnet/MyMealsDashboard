<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\WeeklyPlan> $weeklyPlans
 * @var iterable<\App\Model\Entity\BreakfastMeals $breakfastMeals
 * @var iterable<\App\Model\Entity\LunchMeals $lunchMeals
 * @var iterable<\App\Model\Entity\DinnerMeals $dinnerMeals
 * @var iterable<\App\Model\Entity\Snacks $snacks
 */
$breakfastLoop = 0;
$lunchLoop = 0;
$dinnerLoop = 0;
$snacksLoop = 0;

?>
<div class="weeklyPlans index content">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <style>
    .carousel {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .carousel-item {
            width: calc(100% / 7);
            margin-bottom: 20px;
        }

        .meal-accordion {
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .meal-btn {
            width: 100%;
            padding: 10px;
            background-color: #f8f9fa;
            border: none;
            text-align: left;
            cursor: pointer;
        }

        .meal-btn:hover {
            background-color: #e9ecef;
        }

        .accordion-content {
            display: none;
            padding: 10px;
            background-color: #f8f9fa;
            border-top: 1px solid #ccc;
        }

        .meal-btn.selected {
            background-color: #cce5ff;
        }

        .next-btn {
            display: block;
            margin-top: 20px;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .next-btn:hover {
            background-color: #0056b3;
        }
    </style>
    
    <div class="container mt-5">
        
        <div class="row">
            <div class="col-md-12">
         
            <h1>Weekly Plans</h1>

<div class="carousel">
    <?php foreach (['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'] as $day): ?>
        <div class="carousel-item">
            <h2><?= h($day) ?></h2>
            <!-- Accordion-style dropdown for breakfast meals -->
            <div class="meal-accordion">
                <!-- Loop through the breakfast meals for the current day -->
                <?php foreach ($breakfastMeals as $breakfastMeal): ?>
                    <div class="accordion-item">
                        <?= $this->Form->button($breakfastMeal->title, ['type' => 'button', 'class' => 'meal-btn', 'data-day' => h($day), 'data-meal-id' => h($breakfastMeal->id)]) ?>
                        <div class="accordion-content">
                            <p><strong>Description:</strong> <?= h($breakfastMeal->description) ?></p>
                            <!-- Add more details as needed -->
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Accordion-style dropdown for lunch meals -->
            <div class="meal-accordion">
                <!-- Loop through the lunch meals for the current day -->
                <?php foreach ($lunchMeals as $lunchMeal): ?>
                    <div class="accordion-item">
                        <?= $this->Form->button($lunchMeal->title, ['type' => 'button', 'class' => 'meal-btn', 'data-day' => h($day), 'data-meal-id' => h($lunchMeal->id)]) ?>
                        <div class="accordion-content">
                            <p><strong>Description:</strong> <?= h($lunchMeal->description) ?></p>
                            <!-- Add more details as needed -->
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Accordion-style dropdown for dinner meals -->
            <div class="meal-accordion">
                <!-- Loop through the dinner meals for the current day -->
                <?php foreach ($dinnerMeals as $dinnerMeal): ?>
                    <div class="accordion-item">
                        <?= $this->Form->button($dinnerMeal->title, ['type' => 'button', 'class' => 'meal-btn', 'data-day' => h($day), 'data-meal-id' => h($dinnerMeal->id)]) ?>
                        <div class="accordion-content">
                            <p><strong>Description:</strong> <?= h($dinnerMeal->description) ?></p>
                            <!-- Add more details as needed -->
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Accordion-style dropdown for snack meals -->
            <div class="meal-accordion">
                <!-- Loop through the snacks for the current day -->
                <?php foreach ($snacks as $snack): ?>
                    <div class="accordion-item">
                        <?= $this->Form->button($snack->title, ['type' => 'button', 'class' => 'meal-btn', 'data-day' => h($day), 'data-meal-id' => h($snack->id)]) ?>
                        <div class="accordion-content">
                            <p><strong>Description:</strong> <?= h($snack->description) ?></p>
                            <!-- Add more details as needed -->
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<button class="next-btn">Next</button>


<script>
$(function() {
    // Accordion functionality for meal options
    const accordionItems = document.querySelectorAll('.accordion-item');

    accordionItems.forEach(item => {
        const btn = item.querySelector('.meal-btn');
        const content = item.querySelector('.accordion-content');

        btn.addEventListener('click', function() {
            const day = this.dataset.day;
            const mealId = this.dataset.mealId;

            // Toggle the selected state (you can add CSS class for styling purposes)
            if (this.classList.contains('selected')) {
                this.classList.remove('selected');
            } else {
                this.classList.add('selected');
            }

            // Handle the meal selection logic here, e.g., update the database or perform other actions
            console.log(`Selected meal for ${day}: Meal ID ${mealId}`);
        });
    });
});
</script>
