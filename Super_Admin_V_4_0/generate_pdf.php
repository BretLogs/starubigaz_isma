<?php
// Include TCPDF library
require_once('library/tcpdf.php');

// Start capturing output
ob_start();

// Include your index.php file
$

// Construct the URL with the branch_id parameter
$url = 'index.php?branch_id=' . urlencode($branch_id);

// Include the file
include($url);

// Get the captured HTML content
$html = ob_get_clean();

// Create new TCPDF instance
$pdf = new TCPDF();

// Set document properties
$pdf->SetCreator('Your Name');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Dashboard Report');
$pdf->SetSubject('Dashboard Report');
$pdf->SetKeywords('Dashboard, Report, PDF');

// Add a page
$pdf->AddPage();

// Add HTML content to PDF
$pdf->writeHTML($html);

// Output PDF
$pdf->Output('dashboard_report.pdf', 'D');
?>
