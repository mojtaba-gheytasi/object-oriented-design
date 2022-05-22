<?php

namespace App\AbstractFactory\ReportBuilder\Factories;

use App\AbstractFactory\ReportBuilder\Factories\Contract\ReportFactory;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Concrete\Html\HtmlReportBody;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Concrete\Html\HtmlReportFooter;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Concrete\Html\HtmlReportHeader;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Contract\ReportBody;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Contract\ReportFooter;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Contract\ReportHeader;

class HtmlReportFactory implements ReportFactory
{
    // Get DomPDF in constructor

    public function createReportHeader(): ReportHeader
    {
        return new HtmlReportHeader();
    }

    public function createReportBody(): ReportBody
    {
        return new HtmlReportBody();
    }

    public function createReportFooter(): ReportFooter
    {
        return new HtmlReportFooter();
    }
}