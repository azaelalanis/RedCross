<?php
// connection with the database
include "../../includes/conexion.php";

// require the PHPExcel file
require '../../includes/PHPExcel.php';

// simple query

$query = "SELECT c.cu_nombre, b.id_curso, a.id_alumno, a.a_nombre, a.a_apellidpaterno, a.a_apellidomaterno, a.a_email, c.id_semestre FROM alumno a INNER JOIN inscritos b ON a.id_alumno=b.id_alumno INNER JOIN curso c ON b.id_curso=c.id_curso ORDER by c.cu_nombre DESC";
$headings = array('Materia', 'Clave Materia', 'Matricula', 'Nombre','Apellido Paterno', 'Apellido Materno', 'Email',  'Semestre');

if ($result = mysql_query($query) or die(mysql_error())) {
  // Create a new PHPExcel object
  $objPHPExcel = new PHPExcel();
  $objPHPExcel->getActiveSheet()->setTitle('Lista de Alumnos por Curso');

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
  header('Content-Disposition: attachment;filename="reporteAlumnosxSemestre.xls"');
  header('Cache-Control: max-age=0');

  $objWriter->save('php://output');
  exit();
}
echo 'A problem has occurred... no data retrieved from the database';
?>
