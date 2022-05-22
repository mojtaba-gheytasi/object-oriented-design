<?php

namespace App\AbstractFactory\ReportBuilder\Factories;

use App\AbstractFactory\ReportBuilder\Factories\Contract\ReportFactory;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Concrete\Pdf\PdfReportBody;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Concrete\Pdf\PdfReportFooter;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Concrete\Pdf\PdfReportHeader;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Contract\ReportBody;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Contract\ReportFooter;
use App\AbstractFactory\ReportBuilder\RelatedObjects\Contract\ReportHeader;

class PdfReportFactory implements ReportFactory
{
    // Get DomPDF in constructor

    public function createReportHeader(): ReportHeader
    {
        return new PdfReportHeader();
    }

    public function createReportBody(): ReportBody
    {
        return new PdfReportBody();
    }

    public function createReportFooter(): ReportFooter
    {
        return new PdfReportFooter();
    }
}