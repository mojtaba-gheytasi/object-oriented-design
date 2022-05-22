<?php

namespace App\AbstractFactory\ReportBuilder;

use App\AbstractFactory\ReportBuilder\Factories\Contract\ReportFactory;

class Client
{
    private ReportFactory $reportFactory;

    public function __construct(ReportFactory $reportFactory)
    {
        $this->reportFactory = $reportFactory;
    }

    public function createReport()
    {
        $this->reportFactory->createReportHeader();
        $this->reportFactory->createReportBody();
        $this->reportFactory->createReportFooter();
    }
}