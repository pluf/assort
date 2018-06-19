<?php

/**
 * Returns Assort_Tag with given name.
 * Throws an exception (with http code 404) if there is no tag with given name.
 * @param string $name
 * @throws Assort_Exception_ObjectNotFound if there is no tag with given name.
 * @return Assort_Tag
 */
function Assort_Shortcuts_GetTagByNameOr404 ($name)
{
    $q = new Pluf_SQL('name=%s', array(
            $name
    ));
    $item = new Assort_Tag();
    $item = $item->getList(array(
            'filter' => $q->gen()
    ));
    if (isset($item) && $item->count() == 1) {
        return $item[0];
    }
    if ($item->count() > 1) {
        Pluf_Log::error(
                sprintf('more than one tag exist with the name $s', $name));
        return $item[0];
    }
    throw new Assort_Exception_ObjectNotFound(
            "Tag not found (Tag name:" . $name . ")");
}

function Assort_Shortcuts_NormalizeItemPerPage ($request)
{
    $count = array_key_exists('_px_c', $request->REQUEST) ? intval($request->REQUEST['_px_c']) : 30;
    if($count > 30)
        $count = 30;
    return $count;
}
