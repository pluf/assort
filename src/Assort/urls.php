<?php
return array(
    // ************************************************************* Category
    array( // Find
        'regex' => '#^/category/find$#',
        'model' => 'Pluf_Views',
        'method' => 'findObject',
        'http-method' => 'GET',
        'params' => array(
            'model' => 'Assort_Category',
            'listFilters' => array(
                'id',
                'name',
                'parent'
            ),
            'searchFields' => array(
                'name',
                'description'
            ),
            'sortFields' => array(
                'id',
                'name',
                'parent',
                'creation_date',
                'modif_dtime'
            )
        )
    ),
    array( // Create
        'regex' => '#^/category/new$#',
        'model' => 'Pluf_Views',
        'method' => 'createObject',
        'http-method' => 'POST',
        'params' => array(
            'model' => 'Assort_Category'
        ),
        'precond' => array(
            'Pluf_Precondition::loginRequired',
            'Pluf_Precondition::ownerRequired'
        )
    ),
    array( // Get info
        'regex' => '#^/category/(?P<modelId>\d+)$#',
        'model' => 'Pluf_Views',
        'method' => 'getObject',
        'http-method' => 'GET',
        'params' => array(
            'model' => 'Assort_Category'
        )
    ),
    array( // Delete
        'regex' => '#^/category/(?P<modelId>\d+)$#',
        'model' => 'Pluf_Views',
        'method' => 'deleteObject',
        'http-method' => 'DELETE',
        'params' => array(
            'model' => 'Assort_Category',
            'permanently' => true
        ),
        'precond' => array(
            'Pluf_Precondition::loginRequired',
            'Pluf_Precondition::ownerRequired'
        )
    ),
    array( // Update
        'regex' => '#^/category/(?P<modelId>\d+)$#',
        'model' => 'Pluf_Views',
        'method' => 'updateObject',
        'http-method' => 'POST',
        'params' => array(
            'model' => 'Assort_Category'
        ),
        'precond' => array(
            'Pluf_Precondition::loginRequired',
            'Pluf_Precondition::ownerRequired'
        )
    ),
    // ************************************************************* Tag
    array( // Find
        'regex' => '#^/tag/find$#',
        'model' => 'Pluf_Views',
        'method' => 'findObject',
        'http-method' => 'GET',
        'params' => array(
            'model' => 'Assort_Tag',
            'listFilters' => array(
                'id',
                'name'
            ),
            'searchFields' => array(
                'name',
                'description'
            ),
            'sortFields' => array(
                'id',
                'name',
                'creation_date',
                'modif_dtime'
            )
        )
    ),
    array( // Create
        'regex' => '#^/tag/new$#',
        'model' => 'Pluf_Views',
        'method' => 'createObject',
        'http-method' => 'POST',
        'params' => array(
            'model' => 'Assort_Tag'
        ),
        'precond' => array(
            'Pluf_Precondition::loginRequired',
            'Pluf_Precondition::ownerRequired'
        )
    ),
    array( // Get info
        'regex' => '#^/tag/(?P<modelId>\d+)$#',
        'model' => 'Pluf_Views',
        'method' => 'getObject',
        'http-method' => 'GET',
        'params' => array(
            'model' => 'Assort_Tag'
        )
    ),
    array( // Get info (by name)
        'regex' => '#^/tag/(?P<name>[^/]+)$#',
        'model' => 'Assort_Views_Tag',
        'method' => 'getByName',
        'http-method' => 'GET'
    ),
    array( // Delete
        'regex' => '#^/tag/(?P<modelId>\d+)$#',
        'model' => 'Pluf_Views',
        'method' => 'deleteObject',
        'http-method' => 'DELETE',
        'params' => array(
            'model' => 'Assort_Tag',
            'permanently' => true
        ),
        'precond' => array(
            'Pluf_Precondition::loginRequired',
            'Pluf_Precondition::ownerRequired'
        )
    ),
    array( // Update
        'regex' => '#^/tag/(?P<modelId>\d+)$#',
        'model' => 'Pluf_Views',
        'method' => 'updateObject',
        'http-method' => 'POST',
        'params' => array(
            'model' => 'Assort_Tag'
        ),
        'precond' => array(
            'Pluf_Precondition::loginRequired',
            'Pluf_Precondition::ownerRequired'
        )
    )
);