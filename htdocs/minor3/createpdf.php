<?php
if(!empty('submit'))
    {
        $districtname=$_POST['districtname'];
        $policest=$_POST['policest'];
        //Details of complaint/information to Police:
        $complaintype=$_POST['complaintype'];
        $occr_date=$_POST['occr_date'];
        $details=$_POST['details'];
        $Suspectdetails=$_POST['Suspectdetails'];

        //Your details
        $name=$_POST['fname'];
        $gender=$_POST['gender'];
        $fathername=$_POST['faname'];
        $identity=$_POST['identity'];
        $identityno=$_POST['id_no'];
        $caste=$_POST['caste'];
        $perAddr=$_POST['paddress'];
        $contact=$_POST['contact'];
        $email=$_POST['email'];


        if(empty ($districtname) || empty($policest)|| empty($complaintype) || empty($occr_date)|| empty($details)||empty($Suspectdetails) || empty($name)|| empty($gender)||    empty($fathername)||  empty($identity)||  empty($identityno)||    empty($caste)||  empty($PerAdd)||  empty($contact)|| empty($email))
        {
            header("location:minor2/index.php");
        }
        else{
        require('C:/xampp/htdocs/minor2/fpdf/fpdf.php');
        // create a new instance of FPDF to allocate memory for it
        $pdf=new FPDF();

        //add a new page to you
        $pdf->AddPage();
        //Set a font used to print character strings
        //1.Font family
        //2.Font style B I U
        //3.Font size in points
        $pdf->Setfont('Arial','B',16);

        //Prints a cell 
        /*
            1.Cell width
            2.Cell Height
            3.String to Print
            4.Indicates if border must be drawn around the call.The value can be a number or a string .0 for no border ,1 for frame
            5.Line-Indicates where the current position should go after the call .1 equals to beginig of the line
            6.Allows to center or align the text . C for Center
            7.Fill - Indicate if the cell background must be painted (true) or transparent (false).Default value
            8.Link - URL or indentifers returned by addLink().        
        */
        $pdf->Cell(0,10,"Welcome To FIR SYSTEM",1,1,'C');
        $pdf->Cell(0,10,"Your are lodged the fir to the police $policest",1,0);
        
        $pdf->Cell(50,10,"District_Name:",1,0);
        $pdf->Cell(60,10,$districtname,1,1);

        $pdf->Cell(50,10,"Police station:",1,0);
        $pdf->Cell(60,10,$policest,1,1);

        $pdf->Cell(50,10,"Complaintype:",1,0);
        $pdf->Cell(60,10,$complaintype,1,1);

        $pdf->Cell(50,10,"Occrurence Date:",1,0);
        $pdf->Cell(60,10,$occr_date,1,1);

        
        /* 
        $name=$_POST['fname'];
        $gender=$_POST['gender'];
        $fathername=$_POST['faname'];
        $identity=$_POST['identity'];
        $identityno=$_POST['id_no'];
        $caste=$_POST['caste'];
        $perAddr=$_POST['paddress'];
        $contact=$_POST['contact'];
        $email=$_POST['email']; */        

        $pdf->Cell(50,10,"Details of Event:",1,0);
        $pdf->Cell(60,10,$details,1,1);
            
        $pdf->Cell(50,10,"Suspectdetails:",1,0);
        $pdf->Cell(60,10,$Suspectdetails,1,1);
        
        $pdf->Cell(50,10,"I am".$name.",father/husband".$fathername.". of Caste".$caste."is living at ".$perAddr.".I have an identity".$identity." whose Identity number is".$identityno.".And the given Contact no is ".$contact." and Email is".$email,1,0);
        $pdf->Cell(50,10,"I declare everything is correct",1,0);
        
        $pdf->Cell(0,0,"Today is " . date("Y/m/d") . "<br>");

        $pdf->Output();
        }
    }
?>