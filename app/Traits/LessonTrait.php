<?php

namespace App\Traits;

trait LessonTrait {

    public function lessonName($request)
    {
        return $request."さん";
    }

    public function lessonNameChange($x)
    {
        $request = $x;
        return $request."さん";
    }
}
