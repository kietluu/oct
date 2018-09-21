<?php namespace WTT\Movies\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Config;
use WTT\Movies\Models\Actor;

class ActorBox extends FormWidgetBase
{
    public function widgetDetails()
    {
        return [
            'name' => 'Actorbox',
            'description' => 'Field for adding actors'
        ];
    }

    public function render(){
        $this->prepareVars();
        // dump($this->vars['actors']);
        return $this->makePartial('widget');
    }

    public function loadAssets()
    {
        $this->addCss('css/select2.css');
        $this->addJs('js/select2.js');
    }

    public function prepareVars()
    {
        $this->vars['id'] = $this->model->id;
        $this->vars['actors'] = Actor::all()->lists('full_name', 'id');
        $this->vars['name'] = $this->formField->getName().'[]';
        $this->vars['selectedValues'] = $this->getLoadValue();
    }
}
