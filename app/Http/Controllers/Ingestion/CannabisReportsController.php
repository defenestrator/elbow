<?php
namespace Elbow\Http\Controllers\Ingestion;

use Elbow\Ingestors\CannabisReports as CannabisReports;
use Elbow\Http\Controllers\Controller;


class CannabisReportsController extends Controller {


    public function scrape()

    {
        $page = new CannabisReports();
        return $page->iterateOverPages();
    }
    public function seedco()
    {
        $page = new CannabisReports();
        return $page->getSeedCompanyDetails();
    }

    public function getStrainDetails()
    {
        $page = new CannabisReports;
        return $page->getStrainDetails();
    }
    
}