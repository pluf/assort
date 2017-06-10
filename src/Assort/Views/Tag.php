<?php
Pluf::loadFunction('Pluf_Shortcuts_GetObjectOr404');
Pluf::loadFunction('Assort_Shortcuts_GetTagByNameOr404');

class Assort_Views_Tag
{

    public static function getByName($request, $match)
    {
        $tag = Assort_Shortcuts_GetTagByNameOr404($match['name']);
        // حق دسترسی
        // CMS_Precondition::userCanAccessContent($request, $content);
        // اجرای درخواست
        return new Pluf_HTTP_Response_Json($tag);
    }
}