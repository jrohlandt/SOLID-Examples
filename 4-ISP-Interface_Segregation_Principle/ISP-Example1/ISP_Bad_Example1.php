<?php
interface WorkerInterface {

    public function work();
    public function sleep();
}

class HumanWorker implements WorkerInterface {

    public function work()
    {
        return 'human working'
    }

    public function sleep()
    {
        return 'human sleeping';
    }
}

class AndroidWorker implements WorkerInterface {

    public function work()
    {
        return 'Android working';
    }

    public function sleep()
    {
        return null;
        // this class is being forced to implement the sleep method
        // by the contract between itself and the WorkerInterface.
        // Some people will work around this by returning null or leaving the method empty.
        // But, this violates the Interface Segregation Principle
    }
}

class Captain {

    public function manage(Worker $worker)
    {
        $worker->work();
        $worker->sleep();
    }
}