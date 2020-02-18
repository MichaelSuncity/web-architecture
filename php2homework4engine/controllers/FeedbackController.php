<?php

namespace app\controllers;

use app\models\Feedback;

class FeedbackController extends Controller
{

    public function actionIndex() {
        echo $this->render('index');
    }

    public function actionFeedback() {
        $feedback = Feedback::getAll();
        echo $this->render('feedback', ['feedback' => $feedback]);
    }

}