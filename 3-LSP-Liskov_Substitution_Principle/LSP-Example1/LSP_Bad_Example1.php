<?php

interface LessonRepositoryInterface {

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
        return Lesson::all(); // returns a collection, which is different and thus violates the LSP
    }
}