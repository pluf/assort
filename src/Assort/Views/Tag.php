<?php
Pluf::loadFunction('Pluf_Shortcuts_GetObjectOr404');
Pluf::loadFunction('Assort_Shortcuts_GetTagByNameOr404');

class Assort_Views_Tag
{

    /**
     * Returns tag with given name.
     *
     * @param Pluf_HTTP_Request $request
     * @param array $match
     * @return Assort_Tag
     */
    public static function getTagByName($request, $match)
    {
        $tag = Assort_Shortcuts_GetTagByNameOr404($match['name']);
        // حق دسترسی
        // CMS_Precondition::userCanAccessContent($request, $content);
        // اجرای درخواست
        return $tag;
    }
    
    public static function getByName($request, $match)
    {
        $tag = Assort_Views_Tag::getTagByName($request, $match);
        // حق دسترسی
        // CMS_Precondition::userCanAccessContent($request, $content);
        // اجرای درخواست
        return new Pluf_HTTP_Response_Json($tag);
    }
}