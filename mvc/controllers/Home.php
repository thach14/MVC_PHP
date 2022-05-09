<?php 
class Home extends Controller{
    function SayHi(){
        $sv = $this->model("SinhVienModel");
        echo $sv->getSV();
    }
    function Hello(){
        echo "Home - hellooooo";
    }
    function NamSinh($namsinh)
    {
        $sv = $this->model("SinhVienModel");
        echo $sv->NamSinh($namsinh);
    }
}
?>