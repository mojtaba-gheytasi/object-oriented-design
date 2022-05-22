<?php

namespace App\AbstractFactory\ReportBuilder\Factories;

use App\AbstractFactory\ReportBuilder\Factories\Contract\ReportFactory;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Concrete\Word\WordReportBody;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Concrete\Word\WordReportFooter;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Concrete\Word\WordReportHeader;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Contract\ReportBody;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Contract\ReportFooter;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Contract\ReportHeader;

class WordReportFactory implements ReportFactory
{
    // Get DomPDF in constructor

    public function createReportHeader(): ReportHeader
    {
        return new WordReportHeader();
    }

    public function createReportBody(): ReportBody
    {
        return new WordReportBody();
    }

    public function createReportFooter(): ReportFooter
    {
        return new WordReportFooter();
    }
}