<?php

namespace Learnosity\Processors\QtiV2\Out\Documentation\QuestionTypes;

use Learnosity\Processors\QtiV2\Out\Documentation\LearnosityDoc;
use Learnosity\Processors\QtiV2\Out\Documentation\QuestionTypeDocumentationInterface;

class OrderlistDocumentation implements QuestionTypeDocumentationInterface
{
    public static function getDocumentation()
    {
        return [
            'stimulus' => LearnosityDoc::support('This is mapped to `prompt`'),
            'list' => LearnosityDoc::support('This is mapped `simpleChoice` list within the `orderInteraction`')
        ];
    }

    public static function getIntroductionNotes()
    {
        return
            "This question type is mapped to <orderInteraction> with match_correct.xml template" .
            "Therefore, any `alt_responses` are ignored and `valid_response` score can only be mapped to 1";
    }
}
