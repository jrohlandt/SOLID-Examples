<?php

interface ManagableInterface {

    public function beManaged();
}

interface WorkableInterface {

    public function work();
}

interface SleepableInterface {

     public function sleep();
}

class HumanWorker implements WorkableInterface, SleepableInterface, ManagableInterface {

    public function work()
    {
        return 'human working'
    }

    public function sleep()
    {
        return 'human sleeping';
    }

    public function beManaged()
    {
        $this->work();
        $this->sleep();
    }
}

class AndroidWorker implements WorkableInterface, ManagableInterface {

    public function work()
    {
        return 'Android working';
    }

    public function beManaged()
    {
        $this->work();
    }
}

class Captain {

    public function manage(ManagableInterface $worker)
    {
        $worker->beManaged();
    }
}

/**
* Now because the manage method does not depend on a worker object itself,
* we have improved the design and reduced coupling.
*
* Or
*
* Now our client ( the manage method ) can use any object that conforms to the manageble interface,
* without having to depend on any particular implementation of a worker.
*/