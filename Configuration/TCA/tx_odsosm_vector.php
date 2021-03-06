<?php
return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:ods_osm/Resources/Private/Language/locallang_db.xml:tx_odsosm_vector',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY title',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:ods_osm/Resources/Public/Icons/icon_tx_odsosm_vector.png',
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden,title,data,min_lat,min_lon,max_lat,max_lon'
    ),
    'columns' => array(
        'hidden' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
            'config' => array(
                'type' => 'check',
                'default' => 0
            )
        ),
        'title' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ods_osm/Resources/Private/Language/locallang_db.xml:tx_odsosm_vector.title',
            'config' => array(
                'type' => 'input',
                'size' => 30,
            )
        ),
        'data' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ods_osm/Resources/Private/Language/locallang_db.xml:tx_odsosm_vector.data',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'max' => 10000,
                'fieldControl' => [
                    'coordinatepickerControl' => [
                        'renderType' => 'coordinatepickerControl'
                    ]
                ]
            )
        ),
        'min_lon' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ods_osm/Resources/Private/Language/locallang_db.xml:tx_odsosm_track.min_lon',
            'config' => array(
                'type' => 'none',
                'size' => 8,
            )
        ),
        'min_lat' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ods_osm/Resources/Private/Language/locallang_db.xml:tx_odsosm_track.min_lat',
            'config' => array(
                'type' => 'none',
                'size' => 8,
            )
        ),
        'max_lon' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ods_osm/Resources/Private/Language/locallang_db.xml:tx_odsosm_track.max_lon',
            'config' => array(
                'type' => 'none',
                'size' => 8,
            )
        ),
        'max_lat' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ods_osm/Resources/Private/Language/locallang_db.xml:tx_odsosm_track.max_lat',
            'config' => array(
                'type' => 'none',
                'size' => 8,
            )
        ),
    ),
    'types' => array(
        '0' => array('showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2, data;;1;;3-3-3')
    ),
    'palettes' => array(
        '1' => array(
            'canNotCollapse' => true,
            'showitem' => 'min_lon, min_lat, max_lon, max_lat'
        )
    )
);
?>