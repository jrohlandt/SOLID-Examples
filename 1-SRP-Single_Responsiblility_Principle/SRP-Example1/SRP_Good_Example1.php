<?php
/**
*   Acme/Repositories/SalesRepository.php
*/
namespace Acme\Repositories;

use DB;

class SalesRepository {

    public function between($startDate, $endDate)
    {
        return DB::table('sales')->whereBetween('created_at', [$startDate, $endDate])->sum('charge') / 100;
    }
}

/**
*   Acme/Reporting/SalesReporter.php
*/
namespace Acme\Reporting;

use Acme\Repositories\SalesRepository;
use Auth;

class SalesReporter {

    /**
    *   @var SalesRepository
    */
    private $repo;

    public function __construct(SalesRepository $repo)
    {
        $this->repo = $repo;
    }

    public function between($startDate, $endDate)
    {
        $sales = $this->repo->between($startDate, $endDate);

        return $sales; // and let the consumer or view format data.
    }

}

/**
*   app/routes.php
*/
Route::get('/', function()
{
    $report = new Acme\Reporting\SalesReporter(new \Acme\Repositories\SalesRepository;

    $begin = Carbon\Carbon::now()->subDays(10);
    $end = Carbon\Carbon::now();

    return $report->between($begin, $end);
});