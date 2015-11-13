<?php
// connection with the database
include "../../includes/conexion.php";

// require the PHPExcel file
require '../../includes/PHPExcel.php';

// simple query

$query = "SELECT a.id_maestro, a.m_nombre, a.m_apellidopaterno, a.m_apellidomaterno, a.m_email, b.id_curso, b.cu_nombre, b.id_semestre FROM maestro a INNER JOIN curso b ON a.id_maestro=b.cu_maestroresp ORDER by a.m_nombre DESC";
$headings = array('Matricula', 'Nombre','Apellido Paterno', 'Apellido Materno', 'Email', 'ID Curso', 'Materia', 'Semestre');

if ($result = mysql_query($query) or die(mysql_error())) {
  // Create a new PHPExcel object
  $objPHPExcel = new PHPExcel();
  $objPHPExcel->getActiveSheet()->setTitle('Lista de Cursos por Maestro');

  $rowNumber = 1;
  $col = 'A';
  foreach($headings as $heading) {
    $objPHPExcel->getActiveSheet()->setCellValue($col.$rowNumber,$heading);
    $col++;
  }

  // Loop through the result set
  $rowNumber = 2;
  while ($row = mysql_fetch_row($result)) {
    $col = 'A';
    foreach($row as $cell) {
      $objPHPExcel->getActiveSheet()->setCellValue($col.$rowNumber,$cell);
      $col++;
    }
    $rowNumber++;
  }

  // Freeze pane so that the heading line won't scroll
  $objPHPExcel->getActiveSheet()->freezePane('A2');

  // Save as an Excel BIFF (xls) file
  $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="reporteMaestros.xls"');
  header('Cache-Control: max-age=0');

  $objWriter->save('php://output');
  exit();
}
echo 'A problem has occurred... no data retrieved from the database';
?>
