<?php
	require('fpdf.php');

	$pdf = new FPDF();

	$pdf->AddPage();

	$pdf->SetFont('Arial', 'B', 20);

	$pdf->Cell(71,10,'',0,0);

	$pdf->Cell(51,5, 'ADHIYAMAAN COLLEGE OF ENGINEERING(AUTONOMOUS)',0,0,'C');

	$pdf->Cell(0,10, '',0, 1);

	$pdf->Cell(190,5,'DR.MGR NAGAR,HOSUR-635130',0,0,'C',);

	$pdf->Cell(0,20, '',0, 1);
	
	$pdf->SetFont('Arial', '', 10); 

	$pdf->Cell(71,5, 'Name    GIRISH R',0,0); 

	$pdf->Cell(59,5,'',0,0); 

	$pdf->Cell(59,5, 'DOB    20/02/2004',0,1);

	$pdf->Cell(130,5, 'Reg.No    6716AC21UEC023',0,0); 

	$pdf->Cell(25,5, 'Course    B.E.',0,0); 

	$pdf->Cell(34,5, '',0,1);

	$pdf->Cell(130,5, 'Branch    Electronics and Communication Enginnering',0,0); 

    $pdf->Cell(0,10, '',0, 1);

	$pdf->SetFont('Arial', 'B', 10);

	$pdf->Cell(10,7, 'S.No',1,0,'C');

	$pdf->Cell(25,7, 'Subject Code',1,0,'C');

	$pdf->Cell(93,7, 'Subject Name',1,0, 'C');

	$pdf->Cell(15,7, 'CA',1,0, 'C');

	$pdf->Cell(15,7, 'EA',1,0, 'C');

	$pdf->Cell(15,7, 'Total',1,0, 'C');

	$pdf->Cell(15,7, 'Result',1,1, 'C');

	$pdf->SetFont('Arial', '', 10);

	$pdf->Cell(10,7, '1',1,0,'C');

	$pdf->Cell(25,7, '518ECT01',1,0,'C');

	$pdf->Cell(93,7, 'DIGITAL SIGNAL PROCESSING',1,0);

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, 'A+',1,0, 'C');

	$pdf->Cell(15,7, 'PASS',1,1, 'C');

	$pdf->SetFont('Arial', '', 10);

	$pdf->Cell(10,7, '2',1,0,'C');

	$pdf->Cell(25,7, '518ECT02',1,0,'C');

	$pdf->Cell(93,7, 'MICROPROCESSORS AND MICROCONTROLLERS',1,0);

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, 'A+',1,0, 'C');

	$pdf->Cell(15,7, 'PASS',1,1, 'C');

	$pdf->SetFont('Arial', '', 10);

	$pdf->Cell(10,7, '3',1,0,'C');

	$pdf->Cell(25,7, '518ECT03',1,0,'C');

	$pdf->Cell(93,7, 'COMMUNICATION THEORY',1,0);

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, 'A+',1,0, 'C');

	$pdf->Cell(15,7, 'PASS',1,1, 'C');

	$pdf->SetFont('Arial', '', 10);

	$pdf->Cell(10,7, '4',1,0,'C');

	$pdf->Cell(25,7, '518ECT04',1,0,'C');

	$pdf->Cell(93,7, 'COMPUTER COMMUNICATION AND NETWORKS',1,0);

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, 'A+',1,0, 'C');

	$pdf->Cell(15,7, 'PASS',1,1, 'C');

		$pdf->SetFont('Arial', '', 10);

	$pdf->Cell(10,7, '5',1,0,'C');

	$pdf->Cell(25,7, '518ECT05',1,0,'C');

	$pdf->Cell(93,7, 'TRANSMISSION LINES AND WAVEGUIDES',1,0);

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, 'A+',1,0, 'C');

	$pdf->Cell(15,7, 'PASS',1,1, 'C');

	$pdf->SetFont('Arial', '', 10);

	$pdf->Cell(10,7, '6',1,0,'C');

	$pdf->Cell(25,7, '518MEO01',1,0,'C');

	$pdf->Cell(93,7, 'ROBOTICS PROCESS AND INDUSTRIAL AUTOMATION',1,0);

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, 'A+',1,0, 'C');

	$pdf->Cell(15,7, 'PASS',1,1, 'C');

	$pdf->SetFont('Arial', '', 10);

	$pdf->Cell(10,7, '7',1,0,'C');

	$pdf->Cell(25,7, '518ECP07',1,0,'C');

	$pdf->Cell(93,7, 'DIGITAL SIGNAL PROCESSING LABORATORY',1,0);

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, 'A+',1,0, 'C');

	$pdf->Cell(15,7, 'PASS',1,1, 'C');

	$pdf->SetFont('Arial', '', 10);

	$pdf->Cell(10,7, '8',1,0,'C');

	$pdf->Cell(25,7, '518ECP08',1,0,'C');

	$pdf->Cell(93,7, 'MICROPROCESSORS AND MICROCONTROLLERS LABORATORY',1,0);

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, 'A+',1,0, 'C');

	$pdf->Cell(15,7, 'PASS',1,1, 'C');

	$pdf->SetFont('Arial', '', 10);

	$pdf->Cell(10,7, '9',1,0,'C');

	$pdf->Cell(25,7, '518ECP09',1,0,'C');

	$pdf->Cell(93,7, 'COMPUTER NETWORKS LABORATORY',1,0);

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, 'A+',1,0, 'C');

	$pdf->Cell(15,7, 'PASS',1,1, 'C');

	$pdf->SetFont('Arial', '', 10);

	$pdf->Cell(10,7, '10',1,0,'C');

	$pdf->Cell(25,7, '818ECE08',1,0,'C');

	$pdf->Cell(93,7, 'SATELLITE COMMUNICATION',1,0);

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, '***',1,0, 'C');

	$pdf->Cell(15,7, 'A+',1,0, 'C');

	$pdf->Cell(15,7, 'PASS',1,1, 'C');

	$pdf->Output();
?>