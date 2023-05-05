<?php
require('../../fpdf/fpdf.php');
require '../../../includes/conn.php';



class PDF extends FPDF
{

    // Page header

    function Header()
    {
        // Logo(x axis, y axis, height, width)
        // $this->Image('../../assets/images/auth/logo.jpg', 27, 13, 19, 19);
        // font(font type,style,font size)
        $this->SetFont('Times', 'B', 28);
        $this->SetTextColor(240, 0, 0);
        // Dummy cell
        $this->Cell(50);
        // //cell(width,height,text,border,end line,[align])
        $this->Cell(110, 15, 'Saint Francis of Assisi College', 0, 1, 'C');
        $this->Ln(1);
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Arial', 'B', 11.5);
        $test = utf8_decode("");
        $this->Cell(200, 2, 'Daily Enrollment Update', 0, 0, 'C');
        // Line break
        $this->Ln(4);
        $this->SetFont('Arial', 'B', 12);
        // //cell(width,height,text,border,end line,[align])
        $this->Cell(0, 4, 'HIGHER EDUCATION', 0, 1, 'C');
        // Line break
        $this->Ln(1);
        $this->SetFont('Arial', 'B', 14);
        // //cell(width,height,text,border,end line,[align])
        $this->Cell(0, 6, 'School Year', 0, 1, 'C');
        $this->Ln(1);
        $this->SetTextColor(0, 0, 225);
        $this->Cell(0, 6, 'COLLEGE MAIN CAMPUS', 0, 1, 'C');
        $this->SetFont('Arial', 'B', 10);
        $this->Ln(5);
        $this->Rect(5,11,205,320); // box
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-25);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        $this->SetTextColor(255, 0, 0);
        // Page number
        $this->Cell(0, 5, '', 0, 1, 'C');
        $this->SetFont('Arial', '', 8);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(0, 5, '', 0, 0, 'R');
    }
}

$pdf = new PDF('P', 'mm', 'Legal');
//left top right
$pdf->SetMargins(5, 10, 5);
$pdf->AddPage();
// $pdf ->Rect(7,76,150,64); // box
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(240, 0, 0);
$pdf->Cell(0, 5, 'College', 0, 1);

// college
$pdf->SetTextColor(0, 0, 0);
$pdf->Ln(1);
$pdf->SetFont('Arial', '', 8);
$pdf ->Rect(5,59,35,12);//box
$pdf->Cell(35, 12, 'PARTICULARS', 0, 0,'C');
$pdf ->Rect(40,59,26,12);//box
$pdf->Cell(26, 12, 'SY 2021-2022', 0,0,'C'); // lalagyan ata year dito boi nice galeng
$pdf ->Rect(66,59,26,12);//box
$pdf->Cell(26, 12, 'SY 2022-2023', 0, 0,'C'); // year
$pdf ->Rect(92,59,20,12);//box
$pdf->Cell(20, 12, 'VARIANCE', 0, 0,'C');
//

$pdf->Cell(7, 12, '', 0, 0,'C');
$pdf ->Rect(120,59,30,12); // line Tar
$pdf->Cell(30, 12, 'TARGET', 0, 0,'C');
$pdf ->Rect(150,59,30,12); // line 
$pdf->Cell(30, 12, 'ENROLLEES', 0, 0,'C');
$pdf ->Rect(180,59,30,12); // line v
$pdf->Cell(30, 12, 'VARIANCE', 0, 1,'C');


$pdf->SetFillColor(253, 218,13);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(18, 12, 'INQUIRIES', 1, 0,'C');
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(17,6,'Walk-in',1,0,'C');
$pdf->Cell(26,6,'',1,0,'C');// data
$pdf->Cell(26,6,'',1,0,'C');//
$pdf->Cell(20,6,'',1,0,'C');//

$pdf->Cell(8, 12, '',0, 0,'C');
$pdf->Cell(10,6,'New',1,0,'C');
$pdf->Cell(20,6,'',1,0);//space
$pdf->Cell(10,6,'New',1,0,'C');// for col
$pdf->Cell(20,6,'',1,0,'C',true);// data
$pdf->Cell(10,6,'New',1,0,'C');// for vari
$pdf->Cell(20,6,'',1,1,'C',true);// data

$pdf->SetFillColor(253, 218,13);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(18,2,'',0,0);
$pdf->Cell(17,6,'Online',1,0,'C');
$pdf->Cell(26,6,'',1,0,'C');// data
$pdf->Cell(26,6,'',1,0,'C');//
$pdf->Cell(20,6,'',1,0,'C');//

$pdf->Cell(8,6,'',0,0,'C');//
$pdf->Cell(10,6,'Old',1,0,'C');
$pdf->Cell(20,6,'',1,0,'C');// data
$pdf->Cell(10,6,'Old',1,0,'C');
$pdf->Cell(20,6,'',1,0,'C',true);// data
$pdf->Cell(10,6,'Old',1,0,'C');
$pdf->Cell(20,6,'',1,1,'C',true);// data


//
$pdf->SetFillColor(253, 218,13);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(18, 12, 'ENROLLEES', 1, 0,'C');
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(17,6,'Walk-in',1,0,'C');
$pdf->Cell(26,6,'1',1,0,'C');// data
$pdf->Cell(26,6,'2',1,0,'C',true);//
$pdf->Cell(20,6,'3',1,0,'C');//
$pdf->SetFont('Arial', 'B', 8);

$pdf->Cell(8,6,'',0,0,'C');//
$pdf->Cell(10,6,'TOTAL',1,0,'C');
$pdf->Cell(20,6,'',1,0,'C');// data
$pdf->Cell(10,6,'TOTAL',1,0,'C');
$pdf->Cell(20,6,'',1,0,'C',true);// data
$pdf->Cell(10,6,'TOTAL',1,0,'C');
$pdf->Cell(20,6,'1',1,1,'C',true);// data

$pdf->SetTextColor(0, 0, 255);
$pdf->Cell(18,2,'',0,0);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(17,6,'Online',1,0,'C');
$pdf->Cell(26,6,'',1,0,'C');// data
$pdf->Cell(26,6,'',1,0,'C',true);//
$pdf->Cell(20,6,'',1,1,'C');//


// grad school
$pdf->Ln(1);
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(240, 0, 0);
$pdf->Cell(0, 5, 'Graduate School', 0, 1);

$pdf->SetTextColor(0, 0, 0);
$pdf->Ln(1);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(35, 12, 'PARTICULARS', 1, 0,'C');
$pdf ->Rect(40,102,26,12);//box
$pdf->Cell(26, 12, ' S.Y 2021-2022', 0,0,'C'); // lalagyan ata year dito boi nice galeng
$pdf ->Rect(66,102,26,12);//box
$pdf->Cell(26, 12, 'SY 2022-2023', 0, 0,'C'); // year
$pdf ->Rect(92,102,20,12);//box
$pdf->Cell(20, 12, 'VARIANCE', 0, 0,'C');
//

$pdf->Cell(8, 12, '', 0, 0,'C');
$pdf ->Rect(120,102,30,12); // line Tar
$pdf->Cell(30, 12, 'TARGET', 0, 0,'C');
$pdf ->Rect(150,102,30,12); // line 
$pdf->Cell(30, 12, 'ENROLLEES', 0, 0,'C');
$pdf ->Rect(180,102,30,12); // line v
$pdf->Cell(30, 12, 'VARIANCE', 0, 1,'C');


$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(18, 12, 'INQUIRIES', 1, 0,'C');
$pdf->Cell(17,6,'Walk-in', 0,0,'C');
$pdf->Cell(26,6,'',1,0,'C');// data
$pdf->Cell(26,6,'',1,0,'C');//
$pdf->Cell(20,6,'',1,0,'C');//

$pdf->Cell(8,6,'',0,0);//space
$pdf->Cell(10,6,'New',1,0,'C');
$pdf->Cell(20,6,'',1,0,'C');// data
$pdf->Cell(10,6,'New',1,0,'C');// for col
$pdf->Cell(20,6,'',1,0,'C',true);// data
$pdf->Cell(10,6,'New',1,0,'C');// for vari
$pdf->Cell(20,6,'123',1,1,'C',true);// data


$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(18,2,'',0,0);
$pdf->Cell(17,6,'Online',1,0,'C');
$pdf->Cell(26,6,'',1,0,'C');// data
$pdf->Cell(26,6,'',1,0,'C');//
$pdf->Cell(20,6,'',1,0,'C');//

$pdf->Cell(8,6,'',0,0,'C');
$pdf->Cell(10,6,'Old',1,0,'C');
$pdf->Cell(20,6,'',1,0,'C');// data
$pdf->Cell(10,6,'Old',1,0,'C');
$pdf->Cell(20,6,'',1,0,'C',true);// data
$pdf->Cell(10,6,'Old',1,0,'C');
$pdf->Cell(20,6,'123',1,1,'C',true);// data


//
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(18, 12, 'ENROLLEES', 1, 0,'C');
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(17,6,'Walk-in',1,0,'C');
$pdf->Cell(26,6,'',1,0,'C');// data
$pdf->Cell(26,6,'',1,0,'C',true);//
$pdf->Cell(20,6,'',1,0,'C');//
$pdf->SetFont('Arial', 'B', 8);

$pdf->Cell(8,6,'',0,0);//space
$pdf->Cell(10,6,'TOTAL',1,0,'C');
$pdf->Cell(20,6,'',1,0,'C');// data
$pdf->Cell(10,6,'TOTAL',1,0,'C');
$pdf->Cell(20,6,'',1,0,'C',true);// data
$pdf->Cell(10,6,'TOTAL',1,0,'C');
$pdf->Cell(20,6,'',1,1,'C',true);// data

$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(18,2,'',0,0);
$pdf->Cell(17,6,'Online',1,0,'C');
$pdf->Cell(26,6,'',1,0,'C');// data
$pdf->Cell(26,6,'',1,0,'C',true);//
$pdf->Cell(20,6,'',1,1,'C');//

$pdf->Ln(2);
$pdf->SetFont('Arial', 'B', 15);
$pdf->SetTextColor(0, 0, 0);
$pdf ->Rect(5,150,205,0); // line Tol
$pdf ->Rect(5,160,205,0); // line Tol
$pdf->Cell(95,2,'',0,0);//space
$pdf->Cell(20, 30, 'D  E  T  A  I  L  S', 0, 1,'C');


$pdf->Ln(1);

$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(245, 0,0);
$pdf ->Rect(5,170,35,12,true);//box
$pdf ->Rect(5,170,35,12);//box
$pdf->SetFillColor(255, 0,0);
$pdf->Cell(35, 11.5, 'PARTICULARS', 0, 0,'C');

$pdf->SetFillColor(253, 218,13);
$pdf ->Rect(40,170,34,12,true);//box
$pdf ->Rect(40,170,34,12);//box
$pdf->Cell(34, 6, 'Final Enrollment', 0, 0,'C');
$pdf ->Rect(74,170,34,12,true);//box
$pdf ->Rect(74,170,34,12);//box

$pdf->Cell(34, 6, 'Targets/Levels', 0, 0,'C');
$pdf ->Rect(108,170,34,12,true);//box
$pdf ->Rect(108,170,34,12);//box
$pdf->Cell(34, 6, 'Enrollees', 0, 0,'C');
$pdf ->Rect(142,170,34,12,true);//box
$pdf ->Rect(142,170,34,12);//box
$pdf->Cell(34, 6, 'Total Enrollees', 0, 0,'C');
$pdf ->Rect(176,170,34,12,true);//box
$pdf ->Rect(176,170,34,12);//box
$pdf->Cell(34, 6, 'Total Reservation', 0, 1,'C');

// sy year
$pdf->SetFillColor(253, 218,13);
$pdf->Cell(35, 1, '', 0, 0, 'C');//space
$pdf->Cell(34, 1, 'SY ', 0, 0, 'C');
$pdf->Cell(34, 1, 'SY ', 0, 0, 'C');
$pdf->Cell(34, 1, 'for the day', 0, 0,'C');
$pdf->Cell(34, 1, 'S.Y.', 0, 0, 'C');
$pdf->Cell(34, 1, 'S.Y.', 0, 1, 'C');
$pdf->Ln(4);


// DET table  ------------------------


$school = ['College', 'Graduate School'];

$height = 182;

foreach ($school as $index) {


$pdf->SetFont('Arial', '', '9');
//$pdf ->Rect(6,170,30,12);//box
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(3,146,255);
// table new old tol. in col
$pdf ->Rect(5,$height,35,5,true);//box
$pdf ->Rect(5,$height,35,5);//box
$pdf->Cell(35, 5, $index, 0, 0,'C');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(178, 190, 181);

$pdf ->Rect(40,$height,11,5,true);//box
$pdf ->Rect(40,$height,11,5);//box
$pdf->Cell(11,5,'New',0,0,'C');

$pdf ->Rect(51,$height,11,5,true);//box
$pdf ->Rect(51,$height,11,5);//box
$pdf->Cell(11,5,'Old',0,0,'C');

$pdf ->Rect(62,$height,12,5,true);//box
$pdf ->Rect(62,$height,12,5);//box
$pdf->Cell(12,5,'Total',0,0,'C');
//
$pdf ->Rect(74,$height,11,5,true);//box
$pdf ->Rect(74,$height,11,5);//box
$pdf->Cell(11,5,'New',0,0,'C');
$pdf->SetTextColor(0, 0, 0);
$pdf ->Rect(85,$height,11,5,true);//box
$pdf ->Rect(85,$height,11,5);//box
$pdf->Cell(11,5,'Old',0,0,'C');
$pdf ->Rect(96,$height,12,5,true);//box
$pdf ->Rect(96,$height,12,5);//box
$pdf->Cell(12,5,'Total',0,0,'C');
//
$pdf ->Rect(108,$height,11,5,true);//box
$pdf ->Rect(108,$height,11,5);//box
$pdf->Cell(11,5,'New',0,0,'C');
$pdf->SetTextColor(0, 0, 0);
$pdf ->Rect(119,$height,11,5,true);//box
$pdf ->Rect(119,$height,11,5);//box
$pdf->Cell(11,5,'Old',0,0,'C');
$pdf ->Rect(130,$height,12,5,true);//box
$pdf ->Rect(130,$height,12,5);//box
$pdf->Cell(12,5,'Total',0,0,'C');
//
$pdf ->Rect(142,$height,11,5,true);//box
$pdf ->Rect(142,$height,11,5);//box
$pdf->Cell(11,5,'New',0,0,'C');
$pdf->SetTextColor(0, 0, 0);
$pdf ->Rect(153,$height,11,5,true);//box
$pdf ->Rect(153,$height,11,5);//box
$pdf->Cell(11,5,'Old',0,0,'C');
$pdf ->Rect(164,$height,12,5,true);//box
$pdf ->Rect(164,$height,12,5);//box
$pdf->Cell(12,5,'Total',0,0,'C');
//
$pdf ->Rect(176,$height,11,5,true);//box
$pdf ->Rect(176,$height,11,5);//box
$pdf->Cell(11,5,'New',0,0,'C');
$pdf->SetTextColor(0, 0, 0);
$pdf ->Rect(187,$height,11,5,true);//box
$pdf ->Rect(187,$height,11,5);//box
$pdf->Cell(11,5,'Old',0,0,'C');
$pdf ->Rect(198,$height,12,5,true);//box
$pdf ->Rect(198,$height,12,5);//box
$pdf->Cell(12,5,'Total',0,1,'C');

$height = $height + 5;

$department = mysqli_query($db, "SELECT * FROM tbl_departments WHERE department_id NOT IN ('7', '8', '9', '10')");
while ($row = mysqli_fetch_array($department)) {

$pdf ->Rect(5,$height,35,5);//box
$pdf ->Rect(5,$height,35,5);//box
$pdf->Cell(35, 5, $row['dept_abv'], 0, 0,'C');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(178, 190, 181);

$pdf ->Rect(40,$height,11,5);//box
$pdf ->Rect(40,$height,11,5);//box
$pdf->Cell(11,5,'',0,0,'C');

$pdf ->Rect(51,$height,11,5);//box
$pdf ->Rect(51,$height,11,5);//box
$pdf->Cell(11,5,'',0,0,'C');

$pdf ->Rect(62,$height,12,5, true);//box
$pdf ->Rect(62,$height,12,5);//box
$pdf->Cell(12,5,'',0,0,'C');
//
$pdf ->Rect(74,$height,11,5);//box
$pdf ->Rect(74,$height,11,5);//box
$pdf->Cell(11,5,'',0,0,'C');
$pdf->SetTextColor(0, 0, 0);
$pdf ->Rect(85,$height,11,5);//box
$pdf ->Rect(85,$height,11,5);//box
$pdf->Cell(11,5,'',0,0,'C');
$pdf ->Rect(96,$height,12,5, true);//box
$pdf ->Rect(96,$height,12,5);//box
$pdf->Cell(12,5,'',0,0,'C');
//
$pdf ->Rect(108,$height,11,5);//box
$pdf ->Rect(108,$height,11,5);//box
$pdf->Cell(11,5,'',0,0,'C');
$pdf->SetTextColor(0, 0, 0);
$pdf ->Rect(119,$height,11,5);//box
$pdf ->Rect(119,$height,11,5);//box
$pdf->Cell(11,5,'',0,0,'C');
$pdf ->Rect(130,$height,12,5, true);//box
$pdf ->Rect(130,$height,12,5);//box
$pdf->Cell(12,5,'',0,0,'C');
//
$pdf ->Rect(142,$height,11,5);//box
$pdf ->Rect(142,$height,11,5);//box
$pdf->Cell(11,5,'',0,0,'C');
$pdf->SetTextColor(0, 0, 0);
$pdf ->Rect(153,$height,11,5);//box
$pdf ->Rect(153,$height,11,5);//box
$pdf->Cell(11,5,'',0,0,'C');
$pdf ->Rect(164,$height,12,5, true);//box
$pdf ->Rect(164,$height,12,5);//box
$pdf->Cell(12,5,'',0,0,'C');
//
$pdf ->Rect(176,$height,11,5);//box
$pdf ->Rect(176,$height,11,5);//box
$pdf->Cell(11,5,'',0,0,'C');
$pdf->SetTextColor(0, 0, 0);
$pdf ->Rect(187,$height,11,5);//box
$pdf ->Rect(187,$height,11,5);//box
$pdf->Cell(11,5,'',0,0,'C');
$pdf ->Rect(198,$height,12,5, true);//box
$pdf ->Rect(198,$height,12,5);//box
$pdf->Cell(12,5,'',0,1,'C');

$height = $height + 5;
}

///////////////////////////////////////////////////////////////////////////////
$pdf->SetFillColor(245, 0,0);
$pdf->SetFont('Arial', '', '9');
$pdf ->Rect(5,$height,35,5,true);//box
$pdf ->Rect(5,$height,35,5);//box
$pdf->Cell(35, 5, 'SUB-TOTAL', 0, 0,'C');
$pdf->SetTextColor(0, 0, 0);
$pdf ->Rect(40,$height,11,5,true);//box
$pdf ->Rect(40,$height,11,5);//box
$pdf->Cell(11,5,'00',0,0,'C'); //DATA
$pdf ->Rect(51,$height,11,5,true);//box
$pdf ->Rect(51,$height,11,5);//box
$pdf->Cell(11,5,'00',0,0,'C');//DATA
$pdf ->Rect(62,$height,12,5,true);//box
$pdf ->Rect(62,$height,12,5);//box
$pdf->Cell(12,5,'00',0,0,'C');//DATA
//
$pdf->SetTextColor(0, 0, 0);
$pdf ->Rect(74,$height,11,5,true);//box
$pdf ->Rect(74,$height,11,5);//box
$pdf->Cell(11,5,'00',0,0,'C'); //DATA
$pdf ->Rect(85,$height,11,5,true);//box
$pdf ->Rect(85,$height,11,5);//box
$pdf->Cell(11,5,'00',0,0,'C');//DATA
$pdf ->Rect(96,$height,12,5,true);//box
$pdf ->Rect(96,$height,12,5);//box
$pdf->Cell(12,5,'00',0,0,'C');//DATA
//
$pdf->SetTextColor(0, 0, 0);
$pdf ->Rect(108,$height,11,5,true);//box
$pdf ->Rect(108,$height,11,5);//box
$pdf->Cell(11,5,'00',0,0,'C'); //DATA
$pdf ->Rect(119,$height,11,5,true);//box
$pdf ->Rect(119,$height,11,5);//box
$pdf->Cell(11,5,'00',0,0,'C');//DATA
$pdf ->Rect(130,$height,12,5,true);//box
$pdf ->Rect(130,$height,12,5);//box
$pdf->Cell(12,5,'00',0,0,'C');//DATA
//
$pdf->SetTextColor(0, 0, 0);
$pdf ->Rect(142,$height,11,5,true);//box
$pdf ->Rect(142,$height,11,5);//box
$pdf->Cell(11,5,'00',0,0,'C'); //DATA
$pdf ->Rect(153,$height,11,5,true);//box
$pdf ->Rect(153,$height,11,5);//box
$pdf->Cell(11,5,'00',0,0,'C');//DATA
$pdf ->Rect(164,$height,12,5,true);//box
$pdf ->Rect(164,$height,12,5);//box
$pdf->Cell(12,5,'00',0,0,'C');//DATA
//
$pdf ->Rect(176,$height,11,5,true);//box
$pdf ->Rect(176,$height,11,5);//box
$pdf->Cell(11,5,'000',0,0,'C');//DATA
$pdf ->Rect(187,$height,11,5,true);//box
$pdf ->Rect(187,$height,11,5);//box
$pdf->Cell(11,5,'00',0,0,'C');//DATA
$pdf ->Rect(198,$height,12,5,true);//box
$pdf ->Rect(198,$height,12,5);//box
$pdf->Cell(12,5,'00',0,1,'C');//DATA

$height = $height + 5;

}
// total table ---------------------
$pdf->SetFillColor(253, 218,13);
$pdf->SetFont('Arial', '', '9');
$pdf ->Rect(5,$height,35,5,true);//box
$pdf ->Rect(5,$height,35,5);//box
$pdf->Cell(35, 5, 'TOTAL', 0, 0,'C');
$pdf->SetTextColor(0, 0, 0);
$pdf ->Rect(40,$height,11,5,true);//box
$pdf ->Rect(40,$height,11,5);//box
$pdf->Cell(11,5,'00',0,0,'C'); //DATA
$pdf ->Rect(51,$height,11,5,true);//box
$pdf ->Rect(51,$height,11,5);//box
$pdf->Cell(11,5,'00',0,0,'C');//DATA
$pdf ->Rect(62,$height,12,5,true);//box
$pdf ->Rect(62,$height,12,5);//box
$pdf->Cell(12,5,'00',0,0,'C');//DATA
//
$pdf->SetTextColor(0, 0, 0);
$pdf ->Rect(74,$height,11,5,true);//box
$pdf ->Rect(74,$height,11,5);//box
$pdf->Cell(11,5,'00',0,0,'C'); //DATA
$pdf ->Rect(85,$height,11,5,true);//box
$pdf ->Rect(85,$height,11,5);//box
$pdf->Cell(11,5,'00',0,0,'C');//DATA
$pdf ->Rect(96,$height,12,5,true);//box
$pdf ->Rect(96,$height,12,5);//box
$pdf->Cell(12,5,'00',0,0,'C');//DATA
//
$pdf->SetTextColor(0, 0, 0);
$pdf ->Rect(108,$height,11,5,true);//box
$pdf ->Rect(108,$height,11,5);//box
$pdf->Cell(11,5,'00',0,0,'C'); //DATA
$pdf ->Rect(119,$height,11,5,true);//box
$pdf ->Rect(119,$height,11,5);//box
$pdf->Cell(11,5,'00',0,0,'C');//DATA
$pdf ->Rect(130,$height,12,5,true);//box
$pdf ->Rect(130,$height,12,5);//box
$pdf->Cell(12,5,'00',0,0,'C');//DATA
//
$pdf->SetTextColor(0, 0, 0);
$pdf ->Rect(142,$height,11,5,true);//box
$pdf ->Rect(142,$height,11,5);//box
$pdf->Cell(11,5,'00',0,0,'C'); //DATA
$pdf ->Rect(153,$height,11,5,true);//box
$pdf ->Rect(153,$height,11,5);//box
$pdf->Cell(11,5,'00',0,0,'C');//DATA
$pdf ->Rect(164,$height,12,5,true);//box
$pdf ->Rect(164,$height,12,5);//box
$pdf->Cell(12,5,'00',0,0,'C');//DATA
//
$pdf ->Rect(176,$height,11,5,true);//box
$pdf ->Rect(176,$height,11,5);//box
$pdf->Cell(11,5,'000',0,0,'C');//DATA
$pdf ->Rect(187,$height,11,5,true);//box
$pdf ->Rect(187,$height,11,5);//box
$pdf->Cell(11,5,'00',0,0,'C');//DATA
$pdf ->Rect(198,$height,12,5,true);//box
$pdf ->Rect(198,$height,12,5);//box
$pdf->Cell(12,5,'00',0,1,'C');//DATA

$height = $height + 17;


$pdf->Ln(2);
$pdf->SetFont('Arial', 'B', '9');
$pdf->SetTextColor(255,0,0);
$pdf->Cell(10, 4, '', 0, 0);//space tol
$pdf->Cell(15, 4, ' *NOTES / REMARKS', 0, 0,'C');

$pdf->SetTextColor(0,0,255);
$pdf->Cell(145, 4, '', 0, 0);//space tol
$pdf->Cell(8,5,'Email (Jpeg file) REPORT to: '. $height,0,1,'C');

$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial', '', '9');
$pdf->Cell(40, 3, '', 0, 0);//space 
$pdf->Cell(262,4,'1 Immediate Heads',0,0,'C');// data for REPORT TO
$pdf->Cell(115, 3, '', 0, 0);//space 
$pdf->Cell(8,4,'',0,1,'C'); // data for REPORT TO
$pdf->Cell(71,5,'',0,0,'C'); //DATA fOR REMARKS
$pdf->Cell(195,5,'2 Central Office',0,0,'C'); //DATA fOR REPORT TO
$pdf ->Rect(35,$height,115,0);// line
$pdf->Cell(33, 3, '', 0, 0);//space 
$pdf->Cell(8,4,'',0,0,'C');// data 
$pdf->Cell(122, 3, '', 0, 0);//space 
$pdf->Cell(8,4,'',0,1,'C'); // data for REPORT TO

$height = $height + 5;

$pdf ->Rect(35,282,115,0);// line
$pdf->Cell(33, 3, '', 0, 0);//space 
$pdf->Cell(8,4,'',0,0,'C');// data for 
$pdf->Cell(-18,5,'',0,0,'C'); //DATA for Remarks
$pdf->Cell(296.5,5,'3 Dr. Edgardo A. Lu',0,0,'C'); //DATA for Report to
$pdf->Cell(129, 3, '', 0, 0);//space 
$pdf->Cell(8,4,'',0,1,'C'); // data for REPORT TO
$pdf->Cell(65,5,'',0,0,'C'); //DATA for Remarks
$pdf->Cell(215,5,'4 Dr. Gilbert C. Sibala',0,0,'C'); //DATA for Report to
$pdf ->Rect(35,$height,115,0);// line
$pdf->Cell(33, 3, '', 0, 0);//space 
$pdf->Cell(8,4,'',0,0,'C');// data for REMARKS
$pdf->Cell(124, 3, '', 0, 0);//space 
$pdf->Cell(8,4,'',0,1,'C'); // data for REPORT TO
$pdf->Cell(33, 3, '', 0, 0);//space 
$pdf->Cell(8,4,'',0,0,'C');
$pdf->Cell(120, 3, '', 0, 0);//space 
$pdf->Cell(8,4,'',0,1,'C'); // data for REPORT TO

$pdf->Ln(1);
$pdf->SetFont('Arial', 'B', '9');
$pdf->Cell(5, 2, '', 0, 0);//space tol
$pdf->Cell(15, 2, ' PREPARED BY:', 0, 0,'C');
$pdf->SetTextColor(0,0,255);
$pdf->Cell(150, 4, '', 0, 0);//space tol
$pdf->Cell(8,5,'Private Message / Messenger',0,1,'C');
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial', 'B', '9');
$pdf->Cell(40, 3, '', 0, 0);//space 
$pdf->Cell(8,4,'',0,0,'C');// data for admission office
$pdf->SetFont('Arial', '', '9');
$pdf->Cell(115, 3, '', 0, 0);//space 
$pdf->Cell(8,4,'',0,1,'C'); // data for messenger
$pdf->Cell(40, 3, '', 0, 0);//space 
$pdf->Cell(8,4,'Admission office',0,0,'C');
$pdf->Cell(115, 3, '', 0, 0);//space 
$pdf->Cell(8,4,'',0,1,'C'); // data for  messenger
$pdf ->Rect(30,300,40,0);// line between admissin
$pdf->Cell(33, 3, '', 0, 0);//space 
$pdf->Cell(8,4,'',0,0,);
$pdf->Cell(129, 3, '', 0, 0);//space 
$pdf->Cell(8,4,'',0,1,'C'); // data for messenger
$pdf->Cell(165, 3, '', 0, 0);//space 
$pdf->Cell(8,4,'',0,1,'C'); // data for messenger

$pdf->SetFont('Arial', 'B', '9');
$pdf->Cell(2, 2, '', 0, 0);//space tol
$pdf->Cell(15, 2, ' NOTED BY:', 0, 1,'C');
$pdf->Cell(40, 3, '', 0, 0);//space 
$pdf->Cell(8,4,'',0,1,'C');// data for  immediate head 
$pdf ->Rect(30,318,40,0);// line between immediate head
$pdf->SetFont('Arial', '', '9');
$pdf->Cell(90,4,'Immediate Head',0,0,'C');

$pdf->Output();
