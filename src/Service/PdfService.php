<?php

namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;

class PdfService
{
    private $domPdf;

    public function __construct()
    {
        $this->domPdf = new Dompdf();
        $pdfOptions = new Options();
        $pdfOptions->set('DefaultFont', 'Arial');
        $this->domPdf->setOptions($pdfOptions);
    }

    public function showPdf($html)
    {
        $this->domPdf->loadHtml($html);
        $this->domPdf->render();
        $this->domPdf->stream('Ticket.pdf', ['Attachment' => false]);
    }

    public function generateBinaryPdf($html)
    {
        $this->domPdf->loadHtml($html);
        $this->domPdf->render();
        $this->domPdf->output();
    }
}
