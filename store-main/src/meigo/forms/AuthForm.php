<?php
namespace meigo\forms;

use std, gui, framework, meigo;
use php\gui\event\UXMouseEvent; 

class AuthForm extends AbstractForm
{

    /**
     * @event imageAlt.click-Left 
     */
    function doImageAltClickLeft(UXMouseEvent $e = null)
    {    
        app()->shutdown();
    }


    /**
     * @event panel4.click-Left 
     */
    function doPanel4ClickLeft(UXMouseEvent $e = null)
    {    
        if ($this->form('AuthForm')->maximized == true;) {
            $this->form('AuthForm')->maximized = false;
            $this->panel6->hide();
        } else {
            $this->form('AuthForm')->maximized = true;
            $this->panel6->show();
        }
    }

    /**
     * @event panel5.click-Left 
     */
    function doPanel5ClickLeft(UXMouseEvent $e = null)
    {
        if ($this->form('AuthForm')->maximized == true;) {
            $this->form('AuthForm')->maximized = false;
            $this->panel6->hide();
            $this->panel->borderRadius = 15;

        } else {
            $this->form('AuthForm')->maximized = true;
            $this->panel6->show();
            $this->panel->borderRadius = 0;
        }
        

    }

    /**
     * @event link.click-Left 
     */
    function doLinkClickLeft(UXMouseEvent $e = null)
    {    
        $this->panel10->show();
        Animation::moveTo($this->labelAlt, 300, 104.0, 8.0);
        Animation::fadeTo($this->labelAlt, 300, 0.0);
        Animation::fadeTo($this->label9, 300, 1.0);
        Animation::moveTo($this->label9, 300, 104.0, 24.0);
        Animation::fadeTo($this->panel9, 300, 0.0);
        Animation::fadeTo($this->panel10, 300, 1.0);
        Animation::fadeTo($this->label, 300, 0.0);
        Animation::fadeTo($this->link, 300, 0.0);
        Animation::fadeTo($this->label7, 300, 1.0);
        $this->label7->show();
        $this->linkAlt->show();
        Animation::fadeTo($this->linkAlt, 300, 1.0, function () use ($e, $event) {
            $this->panel9->hide();
            $this->label->hide();
            $this->link->hide();
        });
    }

    /**
     * @event loginbutton.click-Left 
     */
    function doLoginbuttonClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event regbutton.click-Left 
     */
    function doRegbuttonClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event linkAlt.click-Left 
     */
    function doLinkAltClickLeft(UXMouseEvent $e = null)
    {    
        $this->panel9->show();
        Animation::moveTo($this->labelAlt, 300, 104.0, 24.0);
        Animation::fadeTo($this->labelAlt, 300, 1.0);
        Animation::fadeTo($this->label9, 300, 0.0);
        Animation::moveTo($this->label9, 300, 104.0, 72.0);
        Animation::fadeTo($this->panel9, 300, 1.0);
        Animation::fadeTo($this->panel10, 300, 0.0);
        Animation::fadeTo($this->label, 300, 1.0);
        Animation::fadeTo($this->link, 300, 1.0);
        Animation::fadeTo($this->label7, 300, 0.0);
        $this->link->show();
        $this->label->show();
        Animation::fadeTo($this->linkAlt, 300, 0.0, function () use ($e, $event) {
            $this->linkAlt->hide();
            $this->label7->hide();
            $this->panel10->hide();
        });
    }

    /**
     * @event image3.click-Left 
     */
    function doImage3ClickLeft(UXMouseEvent $e = null)
    {    
        app()->minimizeForm('AuthForm');
    }








}
