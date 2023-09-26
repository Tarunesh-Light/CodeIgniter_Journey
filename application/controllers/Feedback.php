<?php

class Feedback extends CI_Controller{

    public function Feedbackform(){

        $this->load->view("Feedbackform.php");
    }

    public function formdata(){

        extract($_POST);           //Get POST data from the form
        $data=[
            'Name' => $name,
            'Contact' => $contact,
            'Story' => $story
        ];
        echo "$name";
        $this->load->model("Feedbackmodel");         //Loading in model-Class name
        $ret=$this->Feedbackmodel->insert($data);    //Class loader,now telling the function name of the class

        if($ret){
            redirect('http://localhost/codeigniter/feedback/selectdata');
        }
    
    }

    public function updatealter(){
        extract($_POST);   
        $id=$id;       
        $data=[
            'Name' => $name,
            'Contact' => $contact,
            'Story' => $story
        ];
        $this->load->model("Feedbackmodel");
        $res2=$this->Feedbackmodel->updatealter($data,$id);
        if($res2){
            $this->selectdata();
        }
    }

    public function delete($id){
        $this->load->model("Feedbackmodel");
        $ret1=$this->Feedbackmodel->delete($id);
        if($ret1){
              $this->selectdata();
        }
    }
    public function update($id){
        $this->load->model("Feedbackmodel");
        $ret1['data1']=$this->Feedbackmodel->update($id);
        $this->load->view('table.php',$ret1);
    }

    public function selectdata(){
        $this->load->model("Feedbackmodel");
        $res['data']=$this->Feedbackmodel->getdata();
        $this->load->view('table.php',$res);
    }

}

?>