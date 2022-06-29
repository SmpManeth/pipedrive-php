<?php
// Data import form CSV file functionality
$dataincsv = array();
if (isset($_POST["Import"])) {

	$file = $_FILES["file"]["tmp_name"];

	// count row number 
	$row = 0;
	// add you row number for skip 
	// hear we pass 1st row for skip in csv 
	$skip_row_number = array("1");


	$file_open = fopen($file, "r");

	while (($data = fgetcsv($file_open, 1000, ",")) !== FALSE) {
		$row++;
		$num = count($data);

		if (in_array($row, $skip_row_number)) {
			continue;
			// skip row of csv
		} else {

		// Data arrenge in to arry and pass to the database
			$dataincsv['Contact_person_Name']= $data[0];
			$dataincsv['organization']= $data[1];
			$dataincsv['title']= $data[2];
			$dataincsv['value']= $data[3];
			$dataincsv['pipeline']= $data[4];
			$dataincsv['prospected_closing_date']= $data[5];
			$dataincsv['expected_closing_date']= $data[6];
			$dataincsv['project_name']= $data[7];
			$dataincsv['status_id']= $data[8];
			$dataincsv['user_id']= $data[9];
			$dataincsvnew['Phone_No']= $data[10];
			$dataincsvnew['phone_category']= $data[11];
			$dataincsvnew['phone_extra']= $data[12];
			$dataincsvnew['phone_category_extra']= $data[13];
			$dataincsvnewmail['Email_Address']= $data[14];
			$dataincsvnewmail['email_extra']= $data[15];
			$postid = create('deals', $dataincsv);
			$dataincsvnew['deal_id']= $postid;
			$dataincsvnewmail['deal_id']= $postid;
			$postid2 = create('deal_phone_numbers', $dataincsvnew);
			$postid2 = create('deal_email', $dataincsvnewmail);
		}
	}
}