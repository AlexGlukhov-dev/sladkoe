<?php

AddEventHandler("iblock", "OnBeforeIBlockElementUpdate", ["CIBlockHandler", "OnBeforeIBlockElementUpdateHandler"]);

class CIBlockHandler
{
    function OnBeforeIBlockElementUpdateHandler(&$arFields)
    {
        
    }
}

