<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">

<head>
     <meta http-equiv=Content-Type content="text/html;charset=windows-1252">
     <meta name=ProgId content=Excel.Sheet>
     <meta name=Generator content="Microsoft Excel 11">
     <style>
          /* <!--table @page{}--> */
     </style>
     <!--[if gte mso 9]>
          <xml>
               <x:ExcelWorkbook>
                    <x:ExcelWorksheets>
                         <x:ExcelWorksheet>
                              <x:Name>Patients Record</x:Name>
                              <x:WorksheetOptions>
                                   <x:Panes>
                                   </x:Panes>
                              </x:WorksheetOptions>
                         </x:ExcelWorksheet>
                    </x:ExcelWorksheets>
               </x:ExcelWorkbook>
          </xml>
          <![endif]-->
</head>

<?php

include('../assets/php/connection.php');
$output = '';

if (isset($_POST["export"])) {

     $result_form_1 = mysqli_query($conn, "SELECT * FROM form1");
     $result_form_1_checkbox = mysqli_query($conn, "SELECT * FROM form1_checkbox");
     $result_form_1_contact = mysqli_query($conn, "SELECT * FROM form1_contact");
     $result_form_2 = mysqli_query($conn, "SELECT * FROM form2");
     $result_form_2_checkbox = mysqli_query($conn, "SELECT * FROM form2_checkbox");
     $result_form_2_checkbox2 = mysqli_query($conn, "SELECT * FROM form2_checkbox2");
     $result_form_2_others = mysqli_query($conn, "SELECT * FROM form2_others");
     $result_form_3 = mysqli_query($conn, "SELECT * FROM form3");
     $result_form_3_others = mysqli_query($conn, "SELECT * FROM form3_others");
     $result_form_4 = mysqli_query($conn, "SELECT * FROM form4");
     $result_form_4_checkbox = mysqli_query($conn, "SELECT * FROM form4_checkbox");
     $result_form_4_checkbox2 = mysqli_query($conn, "SELECT * FROM form4_checkbox2");
     $result_form_5 = mysqli_query($conn, "SELECT * FROM form5");
     $result_form_5_checkbox = mysqli_query($conn, "SELECT * FROM form5_checkbox");
     $result_form_5_checkbox2 = mysqli_query($conn, "SELECT * FROM form5_checkbox2");
     $result_form_6 = mysqli_query($conn, "SELECT * FROM form6");
     $result_form_6_checkbox = mysqli_query($conn, "SELECT * FROM form6_checkbox");
     $result_form_6_checkbox2 = mysqli_query($conn, "SELECT * FROM form6_checkbox2");
     $result_form_6_checkbox3 = mysqli_query($conn, "SELECT * FROM form6_checkbox3");
     $result_form_7 = mysqli_query($conn, "SELECT * FROM form7");
     $result_form_8_checkbox = mysqli_query($conn, "SELECT * FROM form8_checkbox");
     $result_form_8_checkbox2 = mysqli_query($conn, "SELECT * FROM form8_checkbox2");

     if (mysqli_num_rows($result_form_1) > 0) {
          $output .= '
              <table class="table">
                   <tr>
                        <th style="color:red">PATIENT RECORDS</th> 
                   </tr>
                   <tr></tr>
              </table>
              <table class="table" border="1" >  
              <tr>
                
                   <th colspan="30" style="background-color:lightgray;color:blue;text-align:left;">Form 1: Initial Assessment Sheet</th>
              </tr>
              <tr>  
                   <TH>PID</TH>  
                   <TH>PATIENT NAME</TH> 
                   <TH>STUDY NUMBER</TH>  
                   <TH>DATE</TH>
                   <TH>STAFF NAME</TH>  
                   <TH>PATIENT NAME1</TH>
                   <TH>CLINIC REGISTRATION NUMBER</TH>  
                   <TH>ADDRESS</TH>
                   <TH>E-MAIL ID</TH>  
                   <TH>LOCAL STAFF CONTACT</TH>
                   <TH>STAFF MOBILE NO.</TH>  
                   <TH>DATE OF STARTING MDT</TH>
                   <TH>DATE OF STARTING RFT</TH>  
                   <TH>SMEAR AT DIAGNOSIS</TH> 
                   <TH>SMEAR DATE</TH>  
                   <TH>WITHING 24 MONTHS OF DIAGNOSIS?</TH>  
                   <TH>TYPE</TH>
                   <TH>AGE</TH>
                   <TH>SEX</TH>    
                   <TH>WEIGHT</TH>
                   <TH>HEIGHT</TH>  
                   <TH>BMI</TH>
                   <TH>ANY CONTRA-INDICATIONS TO STEROIDS/TO CLOFAZIMINE?</TH>  
                   <TH>ABLE TO ATTEND REGULARLY?</TH>
                   <TH>NOT PREGNANT?</TH>
                   <TH>LONG TERM MEDICATION FOR OTHER ILLNESS</TH>  
                   <TH>DOES PATIENT GIVE INFORMED CONSENT</TH>
                   <TH>ALLOCATE STUDY NUMBER</TH>
                   <TH>HISTORY OF ENL</TH>
                   <TH>OTHERS</TH>
              </tr>
      ';
          while ($row_form_1 = mysqli_fetch_array($result_form_1)) {
               $output .= '
        <tr>  
            <td>' . $row_form_1["pid"] . '</td>  
            <td>' . $row_form_1["patient_name"] . '</td>  
            <td>' . $row_form_1["study_no"] . '</td>  
            <td>' . $row_form_1["date"] . '</td>  
            <td>' . $row_form_1["staff_name"] . '</td>  
            <td>' . $row_form_1["patient_name1"] . '</td>  
            <td>' . $row_form_1["clinic_regno"] . '</td>  
            <td>' . $row_form_1["address"] . '</td>  
            <td>' . $row_form_1["email_id"] . '</td>  
            <td>' . $row_form_1["local_staff_contact"] . '</td>  
            <td>' . $row_form_1["staff_mobile_no"] . '</td>  
            <td>' . $row_form_1["dateMDT"] . '</td>  
            <td>' . $row_form_1["dateRFT"] . '</td>  
            <td>' . $row_form_1["SmearDiagnosis"] . '</td>  
            <td>' . $row_form_1["SmearDate"] . '</td>  
            <td>' . $row_form_1["mdiag"] . '</td>  
            <td>' . $row_form_1["type"] . '</td>  
            <td>' . $row_form_1["Age"] . '</td>  
            <td>' . $row_form_1["sex"] . '</td>  
            <td>' . $row_form_1["Weight"] . '</td>  
            <td>' . $row_form_1["Height"] . '</td>  
            <td>' . $row_form_1["BMI"] . '</td>  
            <td>' . $row_form_1["any_contra_indication_steroids"] . '</td>  
            <td>' . $row_form_1["able_to_attend_regularly"] . '</td> 
            <td>' . $row_form_1["not_pregnant"] . '</td>  
            <td>' . $row_form_1["long_term"] . '</td>  
            <td>' . $row_form_1["inform_consent"] . '</td>  
            <td>' . $row_form_1["allocate_study_no"] . '</td>  
            <td>' . $row_form_1["history_of_enl"] . '</td>  
            <td>' . $row_form_1["others"] . '</td>  
             
        </tr>
       ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_1_checkbox) > 0) {
          $output .= '
              <br>
              <table class="table" border="1">  
                   
                   <tr>  
                        <TH>PID</TH>  
                        <TH>HIV</TH> 
                        <TH>CHRONIC MODERATE/SEVERE RENAL IMPAIRMENT</TH>  
                        <TH>TUBERCULOSIS</TH> 
                        <TH>CANCER</TH>  
                        <TH>UNCONTROLLED TYPE-1 DIABETES</TH> 
                        <TH>OTHER ILLNESS</TH>  
                   </tr>
     ';
          while ($row_form_1_checkbox = mysqli_fetch_array($result_form_1_checkbox)) {
               $output .= '
              <tr>  
                   <td>' . $row_form_1_checkbox["pid"] . '</td>  
                   <td>' . $row_form_1_checkbox["HIV"] . '</td>  
                   <td>' . $row_form_1_checkbox["Chronic_Moderate/Severe_Renal_Impairment"] . '</td>  
                   <td>' . $row_form_1_checkbox["Tuberculosis"] . '</td>  
                   <td>' . $row_form_1_checkbox["Cancer"] . '</td>  
                   <td>' . $row_form_1_checkbox["Uncontrolled_Type-1_Diabetes"] . '</td> 
                   <td>' . $row_form_1_checkbox["Other_Illness"] . '</td> 
              </tr>
      ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_1_contact) > 0) {
          $output .= '
              <br>
              <table class="table" border="1">  
                   <TR>  
                        <TH>PID</TH>  
                        <TH>CONTACT NUMBER</TH> 
                   </TR>
      ';
          while ($row_form_1_contact = mysqli_fetch_array($result_form_1_contact)) {
               $output .= '
        <tr>  
            <td>' . $row_form_1_contact["pid"] . '</td>  
            <td>' . $row_form_1_contact["contact_no"] . '</td>  
        </tr>
       ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_2) >= 0) {
          $output .= '
              <br>
             <table class="table" border="1">
             <tr>
                   <th colspan="31" style="color:blue;text-align:left;">Form 2: Baseline Assessment</th>
            </tr>
                  <tr>  
                
                       <TH>PID</TH>
                       <TH>PATIENT NAME</TH>
                       <TH>STUDY NUMBER</TH>
                       <TH>DATE</TH>
                       <TH>STAFF NAME</TH>
                       <TH>CURRENT REACTION STATUS</TH>
                       <TH>WEIGHT</TH>
                       <TH>WHEN FIRST HAD ENL?</TH>
                       <TH>WHEN FIRST HAD PREDNISOLONE FOR ENL?</TH>
                       <TH>WHEN FIRST SYMPTOMS(NUMBER OF DAYS AGO)</TH>
                       <TH>CURRENT ANTI REACTION</TH>
                       <TH>DATE STARTED PREDNISOLONE(FOR THIS EPISODE OF ENL)</TH>
                       <TH>CURRENT DAILY DOSE OF PREDNISLONE (MG/DAY)</TH>
                       <TH>CURRENT DAILY DOSE OF CLOFAZMINE (MG/DAY)</TH>
                       <TH>CURRENT DAILY DOSE OF THALIDAMIDE (MG/DAY)</TH>
                       <TH>NFA</TH>
                       <TH>NEW NFI (I.E. WITHIN PAST 6 MONTHS, NOT YET TREATED WITH STEROIDS)?</TH>
                       <TH>CHANGE IN NFI DESCRIPTION</TH>
                       <TH>EESS</TH>
                       <TH>BP</TH>
                       <TH>HB</TH>
                       <TH>RBSL</TH>
                       <TH>QOL (SF36) SCORE</TH>
                       <TH>VAS FOR PIGMENTATION</TH>
                       <TH>OBSERVATION</TH>
                       <TH>RANDOMISE</TH>
                       <TH>PREDNISOLONE DOSAGE</TH>
                       <TH>PREDNISOLONE DURATION</TH>
                       <TH>CHLOFAZIMINE DOSAGE</TH>
                       <TH>CHLOFAZIMINE DURATION</TH>
                       <TH>DATE OF NEXT ASSESSMENT</TH>
                  </tr>
             ';
          while ($row_form_2 = mysqli_fetch_array($result_form_2)) {
               $output .= '
                  <tr>  
                       <td>' . $row_form_2["pid"] . '</td>
                       <td>' . $row_form_2["patient_name"] . '</td>
                       <td>' . $row_form_2["study_no"] . '</td>
                       <td>' . $row_form_2["date"] . '</td>
                       <td>' . $row_form_2["staff_name"] . '</td>
                       <td>' . $row_form_2["current_reaction_status"] . '</td>
                       <td>' . $row_form_2["weight_2"] . '</td>
                       <td>' . $row_form_2["first_had_enl"] . '</td>
                       <td>' . $row_form_2["firstPDate"] . '</td>
                       <td>' . $row_form_2["first_sym"] . '</td>
                       <td>' . $row_form_2["current_anti_reaction"] . '</td>
                       <td>' . $row_form_2["date_started_predni"] . '</td>
                       <td>' . $row_form_2["current_dose_predni"] . '</td>
                       <td>' . $row_form_2["current_dose_clofa"] . '</td>
                       <td>' . $row_form_2["current_dose_thal"] . '</td>
                       <td>' . $row_form_2["nfa"] . '</td>
                       <td>' . $row_form_2["change_in_nfi"] . '</td>
                       <td>' . $row_form_2["change_in_nfi_desc"] . '</td>
                       <td>' . $row_form_2["eess_2"] . '</td>
                       <td>' . $row_form_2["bp_2"] . '</td>
                       <td>' . $row_form_2["hb_2"] . '</td>
                       <td>' . $row_form_2["rbsl_2"] . '</td>
                       <td>' . $row_form_2["qol_2_score"] . '</td>
                       <td>' . $row_form_2["vas_for_pig_2"] . '</td>
                       <td>' . $row_form_2["obs"] . '</td>
                       <td>' . $row_form_2["ran"] . '</td>
                       <td>' . $row_form_2["drug_dose_predni"] . '</td>
                       <td>' . $row_form_2["drug_dur_predni"] . '</td>
                       <td>' . $row_form_2["drug_dose_clofa"] . '</td>
                       <td>' . $row_form_2["drug_dur_clofa"] . '</td>
                       <td>' . $row_form_2["next_asse_date"] . '</td>
                  </tr>
             ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_2_checkbox) >= 0) {
          $output .= '
        <br>
             <table class="table" border="1">  
                  <tr>   
                       <TH>PID</TH>
                       <TH>MILD INDIGESTION</TH>
                       <TH>PEPTIC ULCER</TH>
                       <TH>STRIAE</TH>
                       <TH>HERPES ZOSTER</TH>
                       <TH>HYPERGLYCAEMIA</TH>
                       <TH>HYPERTENSION</TH>
                       <TH>MALAENA</TH>
                       <TH>GLAUCOMA</TH>
                       <TH>TRUNCAL OBESITY</TH>
                       <TH>OSTEOPOROSIS</TH>
                       <TH>MOON FACE</TH>
                       <TH>PSYCHOSIS</TH>
                       <TH>GASTROINTESTINAL BLEEDING</TH>
                       <TH>HAEMATEMESIS</TH>
                       <TH>EXTENSIVE RINGWORM</TH>
                       <TH>ACNE</TH>
                  </tr>
             ';
          while ($row_form_2_checkbox = mysqli_fetch_array($result_form_2_checkbox)) {
               $output .= '
                  <tr>  
                       <td>' . $row_form_2_checkbox["pid"] . '</td>  
                       <td>' . $row_form_2_checkbox["Mild_Indigestion"] . '</td>  
                       <td>' . $row_form_2_checkbox["Peptic_Ulcer"] . '</td>  
                       <td>' . $row_form_2_checkbox["Striae"] . '</td>
                       <td>' . $row_form_2_checkbox["Herpes_Zoster"] . '</td>
                       <td>' . $row_form_2_checkbox["Hyperglycaemia"] . '</td>
                       <td>' . $row_form_2_checkbox["Hypertension"] . '</td>
                       <td>' . $row_form_2_checkbox["Malaena"] . '</td>
                       <td>' . $row_form_2_checkbox["Glaucoma"] . '</td>
                       <td>' . $row_form_2_checkbox["Truncal_Obesity"] . '</td>
                       <td>' . $row_form_2_checkbox["Osteoporosis"] . '</td>
                       <td>' . $row_form_2_checkbox["Moon_Face"] . '</td>
                       <td>' . $row_form_2_checkbox["Psychosis"] . '</td>
                       <td>' . $row_form_2_checkbox["Gastrointestinal_bleeding"] . '</td>
                       <td>' . $row_form_2_checkbox["Haematemesis"] . '</td>
                       <td>' . $row_form_2_checkbox["Extensive_Ringworm"] . '</td>
                       <td>' . $row_form_2_checkbox["Acne"] . '</td>
                  </tr>
             ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_2_checkbox2) >= 0) {
          $output .= '
        <br>
                  <table class="table" border="1">  
                       <tr>  
                            <TH>PID</TH>  
                            <TH>PREDNISOLONE</TH>
                            <TH>CLOFAZIMINE</TH>
                            <TH>THALIDAMIDE</TH>
                       </tr>
                  ';
          while ($row_form_2_checkbox2 = mysqli_fetch_array($result_form_2_checkbox2)) {
               $output .= '
                       <tr>  
                            <td>' . $row_form_2_checkbox2["pid"] . '</td>  
                            <td>' . $row_form_2_checkbox2["Prednisolone"] . '</td>  
                            <td>' . $row_form_2_checkbox2["Clofazmine"] . '</td>  
                            <td>' . $row_form_2_checkbox2["Thalidamide"] . '</td>  
                       </tr>
                  ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_2_others) >= 0) {
          $output .= '
        <br>
                  <table class="table" border="1">  
                       <tr> 
                            <TH>OID</TH> 
                            <TH>PID</TH>  
                            <TH>OTHERS DRUG NAME</TH>
                            <TH>OTHERS DRUG DOSAGE</TH>
                            <TH>OTHERS DRUG DURATION</TH>
                       </tr>
                  ';
          while ($row_form_2_others = mysqli_fetch_array($result_form_2_others)) {
               $output .= '
                       <tr> 
                            <td>' . $row_form_2_others["oid"] . '</td>
                            <td>' . $row_form_2_others["pid"] . '</td>  
                            <td>' . $row_form_2_others["others_drug_name"] . '</td>  
                            <td>' . $row_form_2_others["others_drug_dosage"] . '</td>  
                            <td>' . $row_form_2_others["others_drug_duration"] . '</td>  
                       </tr>
                  ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_3) >= 0) {
          $output .= '
        <br>
             <table class="table" border="1">  
                <tr>
                   <th colspan="19" style="color:blue;text-align:left;">Form 3: Pre-Randomisation 3 Monthly Routine Follow-Up Sheet</th>
                </tr>
                  <tr>   
                       <TH>F3ID</TH>
                       <TH>PID</TH>
                       <TH>DATE</TH>
                       <TH>TIME POINT</TH>
                       <TH>STAFF NAME</TH>
                       <TH>CURRENT REACTION STATUS</TH>
                       <TH>WEIGHT</TH>
                       <TH>NFA</TH>
                       <TH>NEW NFI</TH>
                       <TH>NOTES</TH>
                       <TH>EESS</TH>
                       <TH>QOL</TH>
                       <TH>VAS FOR PIGMENTATION</TH>
                       <TH>IF FIRST ENL, RANDOMISE</TH>
                       <TH>PREDNISOLONE DOSAGE</TH>
                       <TH>PREDNISOLONE DURATION</TH>
                       <TH>CHLOFAZIMINE DOSAGE</TH>
                       <TH>CHLOFAZIMINE DURATION</TH>
                       <TH>DATE OF NEXT ASSESSMENT</TH>
                  </tr>
             ';
          while ($row_form_3 = mysqli_fetch_array($result_form_3)) {
               $output .= '
                  <tr>  
                       <td>' . $row_form_3["f3id"] . '</td>  
                       <td>' . $row_form_3["pid"] . '</td>  
                       <td>' . $row_form_3["date"] . '</td>  
                       <td>' . $row_form_3["time_point"] . '</td>  
                       <td>' . $row_form_3["staff_name"] . '</td>
                       <td>' . $row_form_3["current_reaction_status"] . '</td>
                       <td>' . $row_form_3["weight"] . '</td>
                       <td>' . $row_form_3["nfa_3"] . '</td>
                       <td>' . $row_form_3["new_nfi_3"] . '</td>
                       <td>' . $row_form_3["Add1"] . '</td>
                       <td>' . $row_form_3["eess_3"] . '</td>
                       <td>' . $row_form_3["qol_3"] . '</td>
                       <td>' . $row_form_3["vas_for_pig_3"] . '</td>
                       <td>' . $row_form_3["rand_date"] . '</td>
                       <td>' . $row_form_3["drug_dose_predni"] . '</td>
                       <td>' . $row_form_3["drug_dura_predni"] . '</td>
                       <td>' . $row_form_3["drug_dose_clofa"] . '</td>
                       <td>' . $row_form_3["drug_dura_clofa"] . '</td>
                       <td>' . $row_form_3["assessment_date"] . '</td>
                  </tr>
             ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_3_others) >= 0) {
          $output .= '
              <br>
              <table class="table" border="1">  
              <tr>  
                   <TH>F3ID</TH>  
                   <TH>PID</TH>
                   <TH>OTHER DRUG NAME</TH>  
                   <TH>OTHER DRUG DOSAGE</TH> 
                   <TH>OTHER DRUG DURATION</TH> 
              </tr>
     ';
          while ($row_form_3_others = mysqli_fetch_array($result_form_3_others)) {
               $output .= '
       <tr>  
                            <td>' . $row_form_3_others["f3id"] . '</td>  
                            <td>' . $row_form_3_others["pid"] . '</td>  
                            <td>' . $row_form_3_others["others_drug_name"] . '</td>  
                            <td>' . $row_form_3_others["others_drug_dosage"] . '</td>  
                            <td>' . $row_form_3_others["others_drug_duration"] . '</td>  
                            
                       </tr>
      ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_4) >= 0) {
          $output .= '
              <br>
             <table class="table" border="1">
                  <tr>
                        <th colspan="18" style="color:blue;text-align:left;">Form 4: Post-Randomisation 3 Monthly Routine Follow-Up Sheet</th>
                  </tr>
                  <tr>  
                       <TH>F4ID</TH>  
                       <TH>PID</TH>
                       <TH>DATE</TH>
                       <TH>TIME POINT</TH>
                       <TH>STAFF NAME</TH>
                       <TH>CURRENR STATUS</TH>
                       <TH>WEIGHT</TH>
                       <TH>NFA</TH>
                       <TH>NEW NFI</TH>
                       <TH>NOTES</TH>
                       <TH>EESS SCORE</TH>
                       <TH>QOL</TH>
                       <TH>VAS</TH>
                       <TH>TIME SINCE ONSET OF THIS EPISODE</TH>
                       <TH>TIME SINCE LAST RECEIVED PREDNISOLONE</TH>
                       <TH>IF RECURRENT ENL, START PREDNISOLONE</TH>
                       <TH>ADVISED ADMISSION</TH>
                       <TH>DATE OF NEXT ROUTINE ASSESSMENT</TH>
                  </tr>
             ';
          while ($row_form_4 = mysqli_fetch_array($result_form_4)) {
               $output .= '
                  <tr>  
                       <td>' . $row_form_4["f4id"] . '</td>
                       <td>' . $row_form_4["pid"] . '</td>
                       <td>' . $row_form_4["formDate"] . '</td>
                       <td>' . $row_form_4["time_point"] . '</td>
                       <td>' . $row_form_4["staff_name"] . '</td>
                       <td>' . $row_form_4["current_status"] . '</td>
                       <td>' . $row_form_4["weight"] . '</td>
                       <td>' . $row_form_4["nfa_4"] . '</td>
                       <td>' . $row_form_4["new_nfi_4"] . '</td>
                       <td>' . $row_form_4["Add1"] . '</td>
                       <td>' . $row_form_4["eess_4"] . '</td>
                       <td>' . $row_form_4["qol_4"] . '</td>
                       <td>' . $row_form_4["vas_4"] . '</td>
                       <td>' . $row_form_4["enl_present_time_since"] . '</td>
                       <td>' . $row_form_4["time_since_last_received_prednisolone"] . '</td>
                       <td>' . $row_form_4["recurrent_enl_start_predni"] . '</td>
                       <td>' . $row_form_4["advised_admission"] . '</td>
                       <td>' . $row_form_4["nextDate"] . '</td>
                  </tr>
             ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_4_checkbox) >= 0) {
          $output .= '
              <br>
                   <table class="table" border="1">  
                        <tr>  
                             <TH>F4ID</TH>  
                             <TH>PID</TH>
                             <TH>MILD INDIGESTION</TH>
                             <TH>PEPTIC ULCER</TH>
                             <TH>STRIAE</TH>
                             <TH>HERPES ZOSTER</TH>
                             <TH>HYPERGLYCAEMIA</TH>
                             <TH>HYPERTENSION</TH>
                             <TH>MALAENA</TH>
                             <TH>GLAUCOMA</TH>
                             <TH>TRUNCAL OBESITY</TH>
                             <TH>OSTEOPOROSIS</TH>
                             <TH>MOON FACE</TH>
                             <TH>PSYCHOSIS</TH>
                             <TH>GASTROINTESTINAL BLEEDING</TH>
                             <TH>HAEMATEMESIS</TH>
                             <TH>EXTENSIVE RINGWORM</TH>
                             <TH>ACNE</TH>
                        </tr>
                   ';
          while ($row_form_4_checkbox = mysqli_fetch_array($result_form_4_checkbox)) {
               $output .= '
                        <tr>  
                             <td>' . $row_form_4_checkbox["f4id"] . '</td>  
                             <td>' . $row_form_4_checkbox["pid"] . '</td>  
                             <td>' . $row_form_4_checkbox["Mild_Indigestion"] . '</td>  
                             <td>' . $row_form_4_checkbox["Peptic_Ulcer"] . '</td>  
                             <td>' . $row_form_4_checkbox["Striae"] . '</td>
                             <td>' . $row_form_4_checkbox["Herpes_Zoster"] . '</td>
                             <td>' . $row_form_4_checkbox["Hyperglycaemia"] . '</td>
                             <td>' . $row_form_4_checkbox["Hypertension"] . '</td>
                             <td>' . $row_form_4_checkbox["Malaena"] . '</td>
                             <td>' . $row_form_4_checkbox["Glaucoma"] . '</td>
                             <td>' . $row_form_4_checkbox["Truncal_Obesity"] . '</td>
                             <td>' . $row_form_4_checkbox["Osteoporosis"] . '</td>
                             <td>' . $row_form_4_checkbox["Moon_Face"] . '</td>
                             <td>' . $row_form_4_checkbox["Psychosis"] . '</td>
                             <td>' . $row_form_4_checkbox["Gastrointestinal_bleeding"] . '</td>
                             <td>' . $row_form_4_checkbox["Haematemesis"] . '</td>
                             <td>' . $row_form_4_checkbox["Extensive_Ringworm"] . '</td>
                             <td>' . $row_form_4_checkbox["Acne"] . '</td>
                        </tr>
                   ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_4_checkbox2) >= 0) {
          $output .= '
              <br>
                        <table class="table" border="1">  
                             <tr>  
                                  <TH>F4ID</TH>  
                                  <TH>PID</TH>
                                  <TH>MILD INDIGESTION</TH>
                                  <TH>VOMITING</TH>
                                  <TH>NAUSEA</TH>
                                  <TH>ABDOMINAL PAIN</TH>
                                  <TH>DIARRHOEA, ACUTE</TH>
                                  <TH>ICHTHYOSIS</TH>
                                  <TH>WEIGHT LOSS</TH>
                                  <TH>CONJUCTIVA</TH>
                                  <TH>PERSISTENT INDIGESTION</TH>
                                  <TH>DIARRHOEA, CHRONIC</TH>
                                  <TH>CHRONIC DYSENTERY</TH>
                                  <TH>SKIN DISCOLOURATION</TH>
                             </tr>
                        ';
          while ($row_form_4_checkbox2 = mysqli_fetch_array($result_form_4_checkbox2)) {
               $output .= '
                             <tr>  
                                  <td>' . $row_form_4_checkbox2["f4id"] . '</td>  
                                  <td>' . $row_form_4_checkbox2["pid"] . '</td>  
                                  <td>' . $row_form_4_checkbox2["Mild_Indigestion"] . '</td>  
                                  <td>' . $row_form_4_checkbox2["Vomiting"] . '</td>  
                                  <td>' . $row_form_4_checkbox2["Nausea"] . '</td>
                                  <td>' . $row_form_4_checkbox2["Abdominal_Pain"] . '</td>
                                  <td>' . $row_form_4_checkbox2["Diarrhoea,Acute"] . '</td>
                                  <td>' . $row_form_4_checkbox2["Ichthyosis"] . '</td>
                                  <td>' . $row_form_4_checkbox2["Weight_loss"] . '</td>
                                  <td>' . $row_form_4_checkbox2["Conjuctiva"] . '</td>
                                  <td>' . $row_form_4_checkbox2["Persistent_Indigestion"] . '</td>
                                  <td>' . $row_form_4_checkbox2["Diarrhoea,Chronic"] . '</td>
                                  <td>' . $row_form_4_checkbox2["Chronic_Dysentery"] . '</td>
                                  <td>' . $row_form_4_checkbox2["Skin_Discolouration"] . '</td>
                             </tr>
                        ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_5) >= 0) {
          $output .= '
              <br>
                   <table class="table" border="1">
                        <tr>
                             <th colspan="24" style="color:blue;text-align:left;">Form 5: Clinical Record Sheet</th>
                        </tr>
                        <tr>  
                             <th>F5ID</th>  
                             <th>PID</th>
                             <th>DATE</th>
                             <th>TIME POINT</th>
                             <th>STAFF NAME</th>
                             <th>PATIENT SINCE LAST VISIT</th>
                             <th>CURRENT MEDICATION</th>
                             <th>WEIGHT</th>
                             <th>PREDNISOLONE</th>
                             <th>CLOFAZIMINE VITAMINS</th>
                             <th>NFA</th>
                             <th>NFI</th>
                             <th>NFI DESCRIPTION</th>
                             <th>EESS SCORE</th>
                             <th>BP</th>
                             <th>BSL</th>
                             <th>IS PATIENT WORSE?</th>
                             <th>TIME SINCE FLARE BEGAN</th>
                             <th>DOSE STANDARD COURSE</th>
                             <th>DURATION STANDARD COURSE</th>
                             <th>DOSE ADDITIONAL PREDNISOLONE COURSE</th>
                             <th>DURATION ADDITIONAL PREDNISOLONE COURSE</th>
                             <th>ADVISED ADMISSION</th>
                             <th>DATE OF NEXT ASSESSMENT</th>
                        </tr>
                   ';
          while ($row_form_5 = mysqli_fetch_array($result_form_5)) {
               $output .= '
                        <tr>  
                             <td>' . $row_form_5["f5id"] . '</td>
                             <td>' . $row_form_5["pid"] . '</td>
                             <td>' . $row_form_5["date"] . '</td>
                             <td>' . $row_form_5["time_point"] . '</td>
                             <td>' . $row_form_5["staff_name"] . '</td>
                             <td>' . $row_form_5["patient_since_last_visit"] . '</td>
                             <td>' . $row_form_5["current_medication"] . '</td>
                             <td>' . $row_form_5["weight_5"] . '</td>
                             <td>' . $row_form_5["prednisolone_5"] . '</td>
                             <td>' . $row_form_5["clofazimine_vitamins"] . '</td>
                             <td>' . $row_form_5["nfa_5"] . '</td>
                             <td>' . $row_form_5["new_nfi_5"] . '</td>
                             <td>' . $row_form_5["if_yes"] . '</td>
                             <td>' . $row_form_5["eess_score_5"] . '</td>
                             <td>' . $row_form_5["bp"] . '</td>
                             <td>' . $row_form_5["bsl"] . '</td>
                             <td>' . $row_form_5["patient_worse"] . '</td>
                             <td>' . $row_form_5["time_since_flare_began"] . '</td>
                             <td>' . $row_form_5["dose_std_course"] . '</td>
                             <td>' . $row_form_5["dura_std_course"] . '</td>
                             <td>' . $row_form_5["dose_add_predni"] . '</td>
                             <td>' . $row_form_5["dura_add_predni"] . '</td>
                             <td>' . $row_form_5["advised_admission"] . '</td>
                             <td>' . $row_form_5["date_of_next_assessment_5"] . '</td>
                        </tr>
                   ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_5_checkbox) >= 0) {
          $output .= '
              <br>
                   <table class="table" border="1">  
                        <tr>  
                             <TH>F5ID</TH>  
                             <TH>PID</TH>
                             <TH>MILD INDIGESTION</TH>
                             <TH>PEPTIC ULCER</TH>
                             <TH>STRIAE</TH>
                             <TH>HERPES ZOSTER</TH>
                             <TH>HYPERGLYCAEMIA</TH>
                             <TH>HYPERTENSION</TH>
                             <TH>MALAENA</TH>
                             <TH>GLAUCOMA</TH>
                             <TH>TRUNCAL OBESITY</TH>
                             <TH>OSTEOPOROSIS</TH>
                             <TH>MOON FACE</TH>
                             <TH>PSYCHOSIS</TH>
                             <TH>GASTROINTESTINAL BLEEDING</TH>
                             <TH>HAEMATEMESIS</TH>
                             <TH>EXTENSIVE RINGWORM</TH>
                             <TH>ACNE</TH>
                        </tr>
                   ';
          while ($row_form_5_checkbox = mysqli_fetch_array($result_form_5_checkbox)) {
               $output .= '
                        <tr>  
                             <td>' . $row_form_5_checkbox["f5id"] . '</td>  
                             <td>' . $row_form_5_checkbox["pid"] . '</td>  
                             <td>' . $row_form_5_checkbox["Mild_Indigestion"] . '</td>  
                             <td>' . $row_form_5_checkbox["Peptic_Ulcer"] . '</td>  
                             <td>' . $row_form_5_checkbox["Striae"] . '</td>
                             <td>' . $row_form_5_checkbox["Herpes_Zoster"] . '</td>
                             <td>' . $row_form_5_checkbox["Hyperglycaemia"] . '</td>
                             <td>' . $row_form_5_checkbox["Hypertension"] . '</td>
                             <td>' . $row_form_5_checkbox["Malaena"] . '</td>
                             <td>' . $row_form_5_checkbox["Glaucoma"] . '</td>
                             <td>' . $row_form_5_checkbox["Truncal_Obesity"] . '</td>
                             <td>' . $row_form_5_checkbox["Osteoporosis"] . '</td>
                             <td>' . $row_form_5_checkbox["Moon_Face"] . '</td>
                             <td>' . $row_form_5_checkbox["Psychosis"] . '</td>
                             <td>' . $row_form_5_checkbox["Gastrointestinal_bleeding"] . '</td>
                             <td>' . $row_form_5_checkbox["Haematemesis"] . '</td>
                             <td>' . $row_form_5_checkbox["Extensive_Ringworm"] . '</td>
                             <td>' . $row_form_5_checkbox["Acne"] . '</td>
                        </tr>
                   ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_5_checkbox2) >= 0) {
          $output .= '
              <br>
                        <table class="table" border="1">  
                             <tr>  
                                  <TH>F5ID</TH>  
                                  <TH>PID</TH>
                                  <TH>MILD INDIGESTION</TH>
                                  <TH>VOMITING</TH>
                                  <TH>NAUSEA</TH>
                                  <TH>ABDOMINAL PAIN</TH>
                                  <TH>DIARRHOEA, ACUTE</TH>
                                  <TH>ICHTHYOSIS</TH>
                                  <TH>WEIGHT LOSS</TH>
                                  <TH>CONJUCTIVA</TH>
                                  <TH>PERSISTENT INDIGESTION</TH>
                                  <TH>DIARRHOEA, CHRONIC</TH>
                                  <TH>CHRONIC DYSENTERY</TH>
                                  <TH>SKIN DISCOLOURATION</TH>
                             </tr>
                        ';
          while ($row_form_5_checkbox2 = mysqli_fetch_array($result_form_5_checkbox2)) {
               $output .= '
                             <tr>  
                                  <td>' . $row_form_5_checkbox2["f5id"] . '</td>  
                                  <td>' . $row_form_5_checkbox2["pid"] . '</td>  
                                  <td>' . $row_form_5_checkbox2["Mild_Indigestion"] . '</td>  
                                  <td>' . $row_form_5_checkbox2["Vomiting"] . '</td>  
                                  <td>' . $row_form_5_checkbox2["Nausea"] . '</td>
                                  <td>' . $row_form_5_checkbox2["Abdominal_Pain"] . '</td>
                                  <td>' . $row_form_5_checkbox2["Diarrhoea,Acute"] . '</td>
                                  <td>' . $row_form_5_checkbox2["Ichthyosis"] . '</td>
                                  <td>' . $row_form_5_checkbox2["Weight_loss"] . '</td>
                                  <td>' . $row_form_5_checkbox2["Conjuctiva"] . '</td>
                                  <td>' . $row_form_5_checkbox2["Persistent_Indigestion"] . '</td>
                                  <td>' . $row_form_5_checkbox2["Diarrhoea,Chronic"] . '</td>
                                  <td>' . $row_form_5_checkbox2["Chronic_Dysentery"] . '</td>
                                  <td>' . $row_form_5_checkbox2["Skin_Discolouration"] . '</td>
                             </tr>
                        ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_6) >= 0) {
          $output .= '
              <br>
                        <table class="table" border="1">  
                             <tr>
                                  <th colspan="27" style="color:blue;text-align:left;">Form 6: Final Follow-Up Sheet at End of 24 months from Randomization (or at Withdrawal)</th>
                             </tr>
                             <tr>  
                                  <TH>F6ID</TH>  
                                  <TH>PID</TH>
                                  <TH>DATE</TH>
                                  <TH>STAFF NAME</TH>
                                  <TH>CURRENT STATUS</TH>
                                  <TH>WEIGHT</TH>
                                  <TH>BMI</TH>
                                  <TH>NFA</TH>
                                  <TH>EESS</TH>
                                  <TH>QOL</TH>
                                  <TH>VAS</TH>
                                  <TH>CURRENT ANTI-REACTION THERAPY</TH>
                                  <TH>NUMBER OF WEEKS OF EXTRA CLOFAZIMINE</TH>
                                  <TH>ENL AT RANDOMISATION</TH>
                                  <TH>DURATION OF FIRST EPISODE</TH>
                                  <TH>FLARE OF ENL</TH>
                                  <TH>IF FLARE, HOW LONG?</TH>
                                  <TH>EESS AT FLARE</TH>
                                  <TH>RECURRENT ENL STEROIDS</TH>
                                  <TH>CHRONIC ENL RANDOMISATION</TH>
                                  <TH>TOTAL STEROIDS CONSUMED</TH>
                                  <TH>CHANGE IN NFA</TH>
                                  <TH>CHANGE IN QOL</TH>
                                  <TH>ADVERSE EFFECT OF DRUG</TH>
                                  <TH>DRUG DESC</TH>
                                  <TH>OTHERS</TH>
                                  <TH>DEATH CAUSE</TH>
                             </tr>
                        ';
          while ($row_form_6 = mysqli_fetch_array($result_form_6)) {
               $output .= '
                             <tr>  
                                  <td>' . $row_form_6["f6id"] . '</td>  
                                  <td>' . $row_form_6["pid"] . '</td>  
                                  <td>' . $row_form_6["date"] . '</td>  
                                  <td>' . $row_form_6["staff_name"] . '</td>  
                                  <td>' . $row_form_6["current_status"] . '</td>
                                  <td>' . $row_form_6["Weight"] . '</td>
                                  <td>' . $row_form_6["BMI"] . '</td>
                                  <td>' . $row_form_6["nfa"] . '</td>
                                  <td>' . $row_form_6["eess"] . '</td>
                                  <td>' . $row_form_6["qol"] . '</td>
                                  <td>' . $row_form_6["vas"] . '</td>
                                  <td>' . $row_form_6["current_antireaction_therapy"] . '</td>
                                  <td>' . $row_form_6["no_weeks_extra_clofazimine"] . '</td>
                                  <td>' . $row_form_6["enl_at_randomisation"] . '</td>
                                  <td>' . $row_form_6["duration_first_episode"] . '</td>
                                  <td>' . $row_form_6["flare_of_enl"] . '</td>
                                  <td>' . $row_form_6["if_flare_how_long"] . '</td>
                                  <td>' . $row_form_6["eess_at_flare"] . '</td>
                                  <td>' . $row_form_6["recurrent_enl_steroids"] . '</td>
                                  <td>' . $row_form_6["chronic_enl_randomisation"] . '</td>
                                  <td>' . $row_form_6["total_steroids_consumed"] . '</td>
                                  <td>' . $row_form_6["change_in_nfa"] . '</td>
                                  <td>' . $row_form_6["change_in_qol"] . '</td>
                                  <td>' . $row_form_6["adverse_effect_of_drug"] . '</td>
                                  <td>' . $row_form_6["drug_desc"] . '</td>
                                  <td>' . $row_form_6["others"] . '</td>
                                  <td>' . $row_form_6["death"] . '</td>
                             </tr>
                        ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_6_checkbox) >= 0) {
          $output .= '
              <br>
                   <table class="table" border="1">  
                        <tr>  
                             <TH>F6ID</TH>  
                             <TH>PID</TH>
                             <TH>MILD INDIGESTION</TH>
                             <TH>PEPTIC ULCER</TH>
                             <TH>STRIAE</TH>
                             <TH>HERPES ZOSTER</TH>
                             <TH>HYPERGLYCAEMIA</TH>
                             <TH>HYPERTENSION</TH>
                             <TH>MALAENA</TH>
                             <TH>GLAUCOMA</TH>
                             <TH>TRUNCAL OBESITY</TH>
                             <TH>OSTEOPOROSIS</TH>
                             <TH>MOON FACE</TH>
                             <TH>PSYCHOSIS</TH>
                             <TH>GASTROINTESTINAL BLEEDING</TH>
                             <TH>HAEMATEMESIS</TH>
                             <TH>EXTENSIVE RINGWORM</TH>
                             <TH>ACNE</TH>
                        </tr>
                   ';
          while ($row_form_6_checkbox = mysqli_fetch_array($result_form_6_checkbox)) {
               $output .= '
                        <tr>  
                             <td>' . $row_form_6_checkbox["f6id"] . '</td>  
                             <td>' . $row_form_6_checkbox["pid"] . '</td>  
                             <td>' . $row_form_6_checkbox["Mild_Indigestion"] . '</td>  
                             <td>' . $row_form_6_checkbox["Peptic_Ulcer"] . '</td>  
                             <td>' . $row_form_6_checkbox["Striae"] . '</td>
                             <td>' . $row_form_6_checkbox["Herpes_Zoster"] . '</td>
                             <td>' . $row_form_6_checkbox["Hyperglycaemia"] . '</td>
                             <td>' . $row_form_6_checkbox["Hypertension"] . '</td>
                             <td>' . $row_form_6_checkbox["Malaena"] . '</td>
                             <td>' . $row_form_6_checkbox["Glaucoma"] . '</td>
                             <td>' . $row_form_6_checkbox["Truncal_Obesity"] . '</td>
                             <td>' . $row_form_6_checkbox["Osteoporosis"] . '</td>
                             <td>' . $row_form_6_checkbox["Moon_Face"] . '</td>
                             <td>' . $row_form_6_checkbox["Psychosis"] . '</td>
                             <td>' . $row_form_6_checkbox["Gastrointestinal_bleeding"] . '</td>
                             <td>' . $row_form_6_checkbox["Haematemesis"] . '</td>
                             <td>' . $row_form_6_checkbox["Extensive_Ringworm"] . '</td>
                             <td>' . $row_form_6_checkbox["Acne"] . '</td>
                        </tr>
                   ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_6_checkbox2) >= 0) {
          $output .= '
              <br>
                        <table class="table" border="1">  
                             <tr>  
                                  <TH>F6ID</TH>  
                                  <TH>PID</TH>
                                  <TH>MILD INDIGESTION</TH>
                                  <TH>VOMITING</TH>
                                  <TH>NAUSEA</TH>
                                  <TH>ABDOMINAL PAIN</TH>
                                  <TH>DIARRHOEA, ACUTE</TH>
                                  <TH>ICHTHYOSIS</TH>
                                  <TH>WEIGHT LOSS</TH>
                                  <TH>CONJUCTIVA</TH>
                                  <TH>PERSISTENT INDIGESTION</TH>
                                  <TH>DIARRHOEA, CHRONIC</TH>
                                  <TH>CHRONIC DYSENTERY</TH>
                                  <TH>SKIN DISCOLOURATION</TH>
                             </tr>
                        ';
          while ($row_form_6_checkbox2 = mysqli_fetch_array($result_form_6_checkbox2)) {
               $output .= '
                             <tr>  
                                  <td>' . $row_form_6_checkbox2["f6id"] . '</td>  
                                  <td>' . $row_form_6_checkbox2["pid"] . '</td>  
                                  <td>' . $row_form_6_checkbox2["Mild_Indigestion"] . '</td>  
                                  <td>' . $row_form_6_checkbox2["Vomiting"] . '</td>  
                                  <td>' . $row_form_6_checkbox2["Nausea"] . '</td>
                                  <td>' . $row_form_6_checkbox2["Abdominal_Pain"] . '</td>
                                  <td>' . $row_form_6_checkbox2["Diarrhoea,Acute"] . '</td>
                                  <td>' . $row_form_6_checkbox2["Ichthyosis"] . '</td>
                                  <td>' . $row_form_6_checkbox2["Weight_loss"] . '</td>
                                  <td>' . $row_form_6_checkbox2["Conjuctiva"] . '</td>
                                  <td>' . $row_form_6_checkbox2["Persistent_Indigestion"] . '</td>
                                  <td>' . $row_form_6_checkbox2["Diarrhoea,Chronic"] . '</td>
                                  <td>' . $row_form_6_checkbox2["Chronic_Dysentery"] . '</td>
                                  <td>' . $row_form_6_checkbox2["Skin_Discolouration"] . '</td>
                             </tr>
                        ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_6_checkbox3) >= 0) {
          $output .= '
              <br>
                             <table class="table" border="1">  
                                  <tr>  
                                       <TH>F6ID</TH>  
                                       <TH>PID</TH>
                                       <TH>PROTOCOL VIOLATION</TH>
                                       <TH>PATIENT WITHDRAWS CONTENT</TH>
                                       <TH>UNCONTROLLED REACTION</TH>
                                       <TH>END OF FUNDING PERIOD</TH>
                                       <TH>SEVERE ADVERSE EFFECTS</TH>
                                       <TH>DIED</TH>
                                       <TH>OTHERS</TH>
                                  </tr>
                             ';
          while ($row_form_6_checkbox3 = mysqli_fetch_array($result_form_6_checkbox3)) {
               $output .= '
                                  <tr>  
                                       <td>' . $row_form_6_checkbox3["f6id"] . '</td>  
                                       <td>' . $row_form_6_checkbox3["pid"] . '</td>  
                                       <td>' . $row_form_6_checkbox3["Protocol_Violation"] . '</td>  
                                       <td>' . $row_form_6_checkbox3["Patient_withdraws_content"] . '</td>  
                                       <td>' . $row_form_6_checkbox3["Uncontrolled_reaction"] . '</td>
                                       <td>' . $row_form_6_checkbox3["End_of_funding_period"] . '</td>
                                       <td>' . $row_form_6_checkbox3["Severe_adverse_effects"] . '</td>
                                       <td>' . $row_form_6_checkbox3["Died"] . '</td>
                                       <td>' . $row_form_6_checkbox3["Others"] . '</td>
                                  </tr>
                             ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_7) >= 0) {
          $output .= '
              <br>
                             <table class="table" border="1">
                                  <tr>
                                       <th colspan="5" style="color:blue;text-align:left;">Form 7: Miscellaneous Notes by Research Staff</th>
                                  </tr>
                                  <tr>  
                                       <TH>MISID</TH>  
                                       <TH>PID</TH>
                                       <TH>DATE</TH>
                                       <TH>STAFF NAME</TH>
                                       <TH>COMMENTS</TH>
                                  </tr>
                             ';
          while ($row_form_7 = mysqli_fetch_array($result_form_7)) {
               $output .= '
                                  <tr>  
                                       <td>' . $row_form_7["misid"] . '</td>  
                                       <td>' . $row_form_7["pid"] . '</td>  
                                       <td>' . $row_form_7["date_form_7"] . '</td>  
                                       <td>' . $row_form_7["staff_name_7"] . '</td>  
                                       <td>' . $row_form_7["comments_7"] . '</td>
                                  </tr>
                             ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_8_checkbox) >= 0) {
          $output .= '
              <br>
                             <table class="table" border="1">
                                  <tr>
                                       <th colspan="18" style="color:blue;text-align:left;">Form 8: Checklist for Adverse Effects</th>
                                  </tr>
                                  <tr>  
                                       <TH>F8ID</TH>  
                                       <TH>PID</TH>
                                       <TH>MILD INDIGESTION</TH>
                                       <TH>SEVERE/PERSISTENT INDIGESTION</TH>
                                       <TH>PEPTIC ULCER</TH>
                                       <TH>GASTROINTESTINAL BLEEDING</TH>
                                       <TH>HYPERTENSION</TH>
                                       <TH>HYPERGLYCAEMIA DIABETESMELLITUS</TH>
                                       <TH>GLAUCOMA</TH>
                                       <TH>PSYCHOSIS</TH>
                                       <TH>FRAGILITYFRACTURE OR OSTEOPOROSIS</TH>
                                       <TH>MOONFACE TRUNCALOBESITY STRIAE</TH>
                                       <TH>ACNE</TH>
                                       <TH>EXTENSIVE RINGWORM</TH>
                                       <TH>HERPES ZOSTER</TH>
                                       <TH>DELAYED WOUND HEALING</TH>
                                       <TH>TB</TH>
                                       <TH>STRONGYLOIDES HYPERINFESTATION</TH>
                                  </tr>
                             ';
          while ($row_form_8_checkbox = mysqli_fetch_array($result_form_8_checkbox)) {
               $output .= '
                                  <tr>  
                                       <td>' . $row_form_8_checkbox["f8id"] . '</td>  
                                       <td>' . $row_form_8_checkbox["pid"] . '</td>  
                                       <td>' . $row_form_8_checkbox["Mild_Indigestion"] . '</td>  
                                       <td>' . $row_form_8_checkbox["Severe/Persistent_Indigestion"] . '</td>  
                                       <td>' . $row_form_8_checkbox["Peptic_Ulcer"] . '</td>
                                       <td>' . $row_form_8_checkbox["Gastrointestinal_Bleeding"] . '</td>
                                       <td>' . $row_form_8_checkbox["Hypertension"] . '</td>
                                       <td>' . $row_form_8_checkbox["Hyperglycaemia_DiabetesMellitus"] . '</td>
                                       <td>' . $row_form_8_checkbox["Glaucoma"] . '</td>
                                       <td>' . $row_form_8_checkbox["Psychosis"] . '</td>
                                       <td>' . $row_form_8_checkbox["FragilityFracture_OR_Osteoporosis"] . '</td>
                                       <td>' . $row_form_8_checkbox["MoonFace_TruncalObesity_Striae"] . '</td>
                                       <td>' . $row_form_8_checkbox["Acne"] . '</td>
                                       <td>' . $row_form_8_checkbox["Extensive_Ringworm"] . '</td>
                                       <td>' . $row_form_8_checkbox["Herpes_Zoster"] . '</td>
                                       <td>' . $row_form_8_checkbox["Delayed_wound_healing"] . '</td>
                                       <td>' . $row_form_8_checkbox["Tb"] . '</td>
                                       <td>' . $row_form_8_checkbox["Strongyloides_Hyperinfestation"] . '</td>
                                  </tr>
                             ';
          }
     }
     $output .= '</table>';
     if (mysqli_num_rows($result_form_8_checkbox2) >= 0) {
          $output .= '
              <br>
                             <table class="table" border="1">
                                  <tr>  
                                       <TH>F8ID</TH>  
                                       <TH>PID</TH>
                                       <TH>NAUSEA</TH>
                                       <TH>VOMITING</TH>
                                       <TH>INDIGESTION MILD</TH>
                                       <TH>SEVERE/PERSISTENT INDIGESTION</TH>
                                       <TH>SEVERE ABDOMINAL PAIN</TH>
                                       <TH>DIARRHOEA ACUTE</TH>
                                       <TH>DIARRHOEA CHRONIC</TH>
                                       <TH>CHRONIC DYSENTERY</TH>
                                       <TH>SKIN DISCOLOURATION</TH>
                                       <TH>DISCOLOURATION CONJUNCTIVA/TEARS</TH>
                                       <TH>ICHTHYOSIS</TH>
                                       <TH>WEIGHT LOSS</TH>
                                  </tr>
                             ';
          while ($row_form_8_checkbox2 = mysqli_fetch_array($result_form_8_checkbox2)) {
               $output .= '
                                  <tr>  
                                       <td>' . $row_form_8_checkbox2["f8id"] . '</td>  
                                       <td>' . $row_form_8_checkbox2["pid"] . '</td>  
                                       <td>' . $row_form_8_checkbox2["Nausea"] . '</td>  
                                       <td>' . $row_form_8_checkbox2["Vomiting"] . '</td>  
                                       <td>' . $row_form_8_checkbox2["Indigestion_Mild"] . '</td>
                                       <td>' . $row_form_8_checkbox2["Severe/Persistent_Indigestion"] . '</td>
                                       <td>' . $row_form_8_checkbox2["Severe_Abdominal_Pain"] . '</td>
                                       <td>' . $row_form_8_checkbox2["Diarrhoea_Acute"] . '</td>
                                       <td>' . $row_form_8_checkbox2["Diarrhoea_Chronic"] . '</td>
                                       <td>' . $row_form_8_checkbox2["Chronic_Dysentery"] . '</td>
                                       <td>' . $row_form_8_checkbox2["Skin_Discolouration"] . '</td>
                                       <td>' . $row_form_8_checkbox2["Discolouration_Conjunctiva/Tears"] . '</td>
                                       <td>' . $row_form_8_checkbox2["Ichthyosis"] . '</td>
                                       <td>' . $row_form_8_checkbox2["Weight_Loss"] . '</td>
                                  </tr>
                             ';
          }

          $output .= '</table>';
        //   header('Content-Type: application/xls');
            header('Content-Type: application/octet-stream');
            // header("Content-type: text/csv; charset=utf-8");
            header('Content-Disposition: attachment; filename = Patient_Records.xls');
            header("Pragma: no-cache"); 
            header("Expires: 0"); 
            echo $output;
     }
}
?>