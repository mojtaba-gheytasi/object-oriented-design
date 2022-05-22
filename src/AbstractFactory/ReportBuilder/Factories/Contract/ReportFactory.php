<?php

namespace App\AbstractFactory\ReportBuilder\Factories\Contract;

use App\AbstractFactory\ReportBuilder\RelatedObjects\Contract\ReportBody;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Contract\ReportFooter;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Contract\ReportHeader;

interface ReportFactory
{
    public function createReportHeader(): ReportHeader;

    public function createReportBody(): ReportBody;

    public function createReportFooter(): ReportFooter;
}