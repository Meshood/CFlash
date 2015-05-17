<?php

namespace Anax\Flash;

class CFlash
{
    /**
    * Constructor creates a session flash if it does not exist
    * 
    */
    public function __construct()
    {
        if(!isset($_SESSION['flash']))
        {
            $_SESSION['flash'] = array();
        }
    } 
    
    
    
    
    /**
    * Constructor creates a session flash if it does not exist
    * 
    */
    public function message($type, $message)
    {
        switch($type)
        {
        case "success":
            $_SESSION['flash'][] = 
            [
                'type' => "success",
                'message' => $message,
            ];
            break;
            
        case "warning":
            $_SESSION['flash'][] = 
            [
                'type' => "warning",
                'message' => $message,
            ];
            break;
            
        case "error":
            $_SESSION['flash'][] = 
            [
                'type' => "error",
                'message' => $message,
            ];
            break;
            
        default:
            $_SESSION['flash'][] = 
            [
                'type' => "info",
                'message' => $message,
            ];
            break;
        }
    }
    
    
    
    
   /**
    * Constructor creates a session flash if it does not exist
    * 
    */
    public function getMessage()
    {
        $html = null;
        if(isset($_SESSION['flash']))
        {
            foreach($_SESSION['flash'] as $messages => $message)
            {
                $type = $message['type'];
                $message = $message['message'];
                $html .= "<div class='flash-{$type}'>{$message}</div>\n";
            }
            $_SESSION['flash'] = null;
            return $html;
        }
        else
        {
            return "<div class='flash-error'>The message system is broken. No message found in session.</div>\n";
        }
        
    }
}
