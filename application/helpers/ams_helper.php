<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
    function test_method($var = '')
    {
        return $var;
    }

    function get_post_data($tablename, $controller){
      $CI =& get_instance();
      $CI->load->model('Crud_model');
      $fields = $CI->Crud_model->get_fields($tablename);
      foreach ($fields as $field) {
        if($controller->input->post($field)){
          $data[$field] = $controller->input->post($field);
        }
        else{
          $data[$field] = '';
        }
      }
      return $data;
    }

    function get_2d_post_data($tablename, $controller){
      $CI =& get_instance();
      $CI->load->model('Crud_model');
      $fields = $CI->Crud_model->get_fields($tablename);
      for ($i=0; $i < 2 ; $i++) {
        foreach ($fields as $field) {
          if($controller->input->post($field)){
            $data[$i][$field] = $controller->input->post($field);
          }
          else{
            $data[$i][$field] = '';
          }
        }
      }
      return $data;
    }

    function print_table($objects){
      foreach ($objects as $object) {
        $object = (array)$object;
        foreach ($object as $key => $value) {
          echo "<td>$value</td>";
        }
      }
    }

  

    function print_select($name, $case, $options, $params){
      echo "<select class='form-control' name='$name' $params>";
      if($options[$case]){
        echo "<option value='$case'>$options[$case]</option>";
      }else{
        echo "<option value=''>Select an option</option>";
      }
      foreach ($options as $key => $value) {
        if($key != $case){
          echo "<option value='$key'>$value</option>";
        }
      }
      echo "</select>";
    }

    function join_model($obj, $id){
      foreach ($obj as $o) {
        if($o->id == $id){
          return $o;
        }
      }
    }

    function get_empty_model($tablename){
      $CI =& get_instance();
      $CI->load->model('Crud_model');
      $fields = $CI->Crud_model->get_fields($tablename);
      foreach ($fields as $field) {
        $data[$field] = '';
      }
      $output[0] = (object)$data;
      return $output;
    }

     function print_options($case, $options, $id){
      if($options[$case]){
        echo "<option value='$case'>$options[$case]</option>";
      }else{
        echo "<option value=''>Select an option</option>";
      }
      foreach ($options as $key => $value) {
        if($key != $case){
          echo "<option value='$key'>$value</option>";
        }
      }
    }

    function getNiceDuration($durationInSeconds) {

      $duration = '';
      $days = floor($durationInSeconds / 86400);
      $durationInSeconds -= $days * 86400;
      $hours = floor($durationInSeconds / 3600);
      $durationInSeconds -= $hours * 3600;
      $minutes = floor($durationInSeconds / 60);
      $seconds = $durationInSeconds - $minutes * 60;

      if($days > 0) {
        $duration .= $days . ' days';
      }
      if($hours > 0) {
        $duration .= ' ' . $hours . ' hours';
      }
      if($minutes > 0) {
        $duration .= ' ' . $minutes . ' minutes';
      }
      if($seconds > 0) {
        $duration .= ' ' . $seconds . ' seconds';
      }
      return $duration;
    }

//-------------------------------------------//
    function auth_check($controller){
      if(!$controller->session->userdata('is_logged_in')){
      redirect('/Login/login');
     }
    }

    function auth_restrict($controller, $id){
      if($controller->session->userdata('designation') == $id){
      redirect($controller->agent->referrer());
     }
    }

    function auth_hide($controller){
      if(!$controller->session->userdata('is_logged_in')){
        echo "style='display:none;'";
     }
    }




//------------------------------------------//
//      Project Specific Functions          //
//------------------------------------------//
   
   function all_status()
   {
      $status[0]='Pending';
      $status[1]='Approved';
      $status[2]='Rejected';

      return $status;
   }

   function all_type_of_funding()
   {
      $status[0]='Direct Payment';
      $status[1]='COPF Fund';
      $status[2]='Rejected';

      return $status;
   }

   function all_description_of_scholarship()
   {
      $status[0]='Need Based';
      $status[1]='Merit Based';
      $status[2]='Special Ability';
      $status[3]='Special Need';
      $status[4]='Any';
      return $status;
   }

   function all_type_of_disbursement()
   {
      $status[0]='Monthly';
      $status[1]='Quaterly';
      $status[2]='Mid Yearly';
      $status[3]='Annually';
      return $status;
   }

   function all_source_of_remittance()
   {
      $status[0]='Cash';
      $status[1]='Westren Union';
      $status[2]='Bank Transfer';
      $status[3]='Cheque';
      return $status;
   }

   function all_account_type(){
    $status[0] = 'Student';
    $status[1] = 'Individual';
    $status[2] = 'Corporate';
    $status[3] = 'Admin';
    return $status;
   }

   function all_beneficiary(){
    $status[0] = 'Myself';
    $status[1] = 'Someone Else';
    return $status;
   }
}