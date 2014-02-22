<?php if(!defined('APPLICATION')) exit();

//define plugin

$PluginInfo['Valentines'] = array(
    'Name' => 'Valentines',
    'Description' => 'Adds animated background image to Data List Item .',
    'Version' => '1.0',
    'MobileFriendly' => TRUE,
    'Author' => "VrijVlinder"
    
);

//Send style sheet to head of the pages we want it to appear
class ValentinesPlugin extends Gdn_Plugin {

    public function CategoryController_Render_Before($Sender) {
            $Sender->AddCssFile('plugins/Valentines/valentines.css');
   }

public function CategoriesController_Render_Before($Sender) {
    $Sender->AddCssFile('plugins/Valentines/valentines.css');

}
   
   public function DiscussionsController_Render_Before($Sender) {
    $Sender->AddCssFile('plugins/Valentines/valentines.css');

   }


   public function DiscussionController_Render_Before($Sender) {
    $Sender->AddCssFile('plugins/Valentines/valentines.css');


 
  }
  public function ActivityController_Render_Before($Sender) {
    $Sender->AddCssFile('plugins/Valentines/valentines.css');


    }

    public function Setup() {
    }
}
