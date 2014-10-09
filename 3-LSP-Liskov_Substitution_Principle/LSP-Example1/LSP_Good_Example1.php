<?php

interface LessonRepositoryInterface {
    /**
    *   Fetch all records
    * @return array
    */
    public function getAll();
}

class FileLessonRepository implements LesssonRepositoryInterface {

    public function getAll()
    {
        // return through filesystem
        return []; // returns an array
    }
}

class DbLessonRepository implements LessonRepositoryInterface {

    public function getAll()
    {
        return Lesson::all()->toArray(); // now also returns an array
    }
}

function foo(LessonRepositoryInterface $lesson)
{
    $lessons = $lesson->getAll();
}