<?php
// Data import form CSV file functionality
$dataincsv = array();
$dataincsvnew = array();
$dataincsvnewmail = array();
if (isset($_POST["Import"])) {

	$file = $_FILES["file"]["tmp_name"];

	// count row number 
	$row = 0;
	// add you row number for skip 
	// hear we pass 1st row for skip in csv 
	$skip_row_number = array("1");


	$file_open = fopen($file, "r");

	while (($data = fgetcsv($file_open, 10000, ",")) !== FALSE) {
		$row++;
		$num = count($data);

		if (in_array($row, $skip_row_number)) {
			continue;
			// skip row of csv
		} else {

		// Data arrenge in to arry and pass to the database
			$dataincsv['organization']= $data[0];
			$dataincsv['Contact_person_Name']= $data[1];
			$dataincsvnewmail['Email_Address']= $data[2];
			$dataincsv['Address']= $data[3];
			$dataincsvnew['Phone_No']= $data[4];
			$dataincsv['prospected_closing_date']= $data[5];
			$dataincsv['expected_closing_date']= $data[6];
			$dataincsv['status_id']= $data[7];
			$dataincsv['deal_comment']= $data[8];

			$postid = create('deals', $dataincsv);
			$dataincsvnew['deal_id']= $postid;
			$dataincsvnewmail['deal_id']= $postid;
			$postid2 = create('deal_phone_numbers', $dataincsvnew);
			$postid2 = create('deal_email', $dataincsvnewmail);
		}
	}
}