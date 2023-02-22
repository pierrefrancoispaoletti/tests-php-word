<?php
require "vendor/autoload.php";
require "datas.php";


$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('template.docx');

foreach ($data as $key => $value) {
    if ($key !== "Articles") {
        $templateProcessor->setValue($key, $value);
    }
}

$templateProcessor->cloneRowAndSetValues('fournisseur', $data['Articles']);

$filename = "template_filled.docx";

$templateProcessor->saveAs($filename);
