<?php 
// Include PhpSpreadsheet classes
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

require '../../../assets/vendors/vendor/autoload.php'; // If you're using Composer (recommended)

if (isset($_POST["file_content"])) {
    $fileContent = $_POST["file_content"];
    $temporaryHtmlFile = tempnam(sys_get_temp_dir(), 'html');
    file_put_contents($temporaryHtmlFile, $fileContent);
    $reader = IOFactory::createReader('Html');
    $spreadsheet = $reader->load($temporaryHtmlFile);
    $filename = 'export' . time();
    // Directly output the Excel file to the browser
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Cache-Control: max-age=0');
    $writer = IOFactory::createWriter($spreadsheet, 'Xls');
    $writer->save('php://output');    
    unlink($temporaryHtmlFile); // Delete the temporary file
    exit;
}
?>