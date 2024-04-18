<?php

namespace App\Traits;

trait LessonTrait {

    public function lessonChange($request)
    {
        return $request."さん";

    }

}
