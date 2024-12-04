<?php 
require_once "../app/core/Controller.php";

class PagesController extends Controller{

    public function aboutUs()
    {
        $this->renderView("pages/AboutUs");
    }
    public function history()
    {
        $this->renderView("pages/History");
    }
    public function watchMaking(){
        $this->renderView("pages/watchmaking");
    }
    public function branches(){
        $this->renderView("pages/Branches");
    }
    public function services(){
        $this->renderView("pages/Services");
    }

}
?>