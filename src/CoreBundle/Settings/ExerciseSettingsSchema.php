<?php

declare(strict_types=1);

/* For licensing terms, see /license.txt */

namespace Chamilo\CoreBundle\Settings;

use Chamilo\CoreBundle\Form\Type\YesNoType;
use Sylius\Bundle\SettingsBundle\Schema\AbstractSettingsBuilder;
use Symfony\Component\Form\FormBuilderInterface;

class ExerciseSettingsSchema extends AbstractSettingsSchema
{
    public function buildSettings(AbstractSettingsBuilder $builder): void
    {
        $builder
            ->setDefaults(
                [
                    'exercise_min_score' => '0',
                    'exercise_max_score' => '20',
                    'enable_quiz_scenario' => 'true',
                    'allow_coach_feedback_exercises' => 'true',
                    'show_official_code_exercise_result_list' => 'false',
                    'email_alert_manager_on_new_quiz' => 'true',
                    'exercise_max_ckeditors_in_page' => '0',
                    'configure_exercise_visibility_in_course' => 'false',
                    'exercise_invisible_in_session' => 'false',
                    'allow_edit_exercise_in_lp' => 'false',
                    'exercise_hide_label' => 'false',
                ]
            )
        ;
        $allowedTypes = [
            'exercise_min_score' => ['string', 'null'],
            'exercise_max_score' => ['string', 'null'],
            'enable_quiz_scenario' => ['string'],
        ];
        $this->setMultipleAllowedTypes($allowedTypes, $builder);
    }

    public function buildForm(FormBuilderInterface $builder): void
    {
        $builder
            ->add('exercise_min_score')
            ->add('exercise_max_score')
            ->add('enable_quiz_scenario', YesNoType::class)
            ->add('allow_coach_feedback_exercises', YesNoType::class)
            ->add('show_official_code_exercise_result_list', YesNoType::class)
            ->add('email_alert_manager_on_new_quiz', YesNoType::class)
            ->add('exercise_max_ckeditors_in_page')
            ->add('configure_exercise_visibility_in_course', YesNoType::class)
            ->add('exercise_invisible_in_session', YesNoType::class)
            ->add('exercise_hide_label', YesNoType::class)
        ;
    }
}
