<?php
/**
 * Elgg groupsmap plugin language pack
 * @package GroupsMap 
 */

$language = array(

    //Menu items and titles
    'groupsmap' => "Gruppenkarte",
    'groupsmap:menu' => "Gruppenkarte",
    'groupsmap:all' => "Gruppenkarte",
    'groupsmap:allgroups' => "Alle Gruppen",
    'groupsmap:map' => "Karte",
    'admin:settings:groupsmap' => "Gruppenkarte",
    'groups:newest' => "Neueste",
    'groups:popular' => "Beliebteste",
    
    //search 
    'groupsmap:search' => "Suche Gruppen nach Standort",
    'groupsmap:search:location' => "Standort",
    'groupsmap:search:radius' => "Radius (Meter)",
    'groupsmap:search:radius:meters' => "Radius (Meter)",
    'groupsmap:search:radius:km' => "Radius (Kilometer)",
    'groupsmap:search:radius:miles' => "Radius (Meilen)",
    'groupsmap:search:meters' => "Meter",
    'groupsmap:search:km' => "Kilometer",
    'groupsmap:search:miles' => "Meilen",    
    'groupsmap:search:showradius' => "Zeige Suchbereich",
    'groupsmap:search:submit' => "Suche",
    'groupsmap:mylocationsis' => "Mein Standort ist: ",
    'groupsmap:searchbyname' => "Suche Gruppen nach Namen",
    'groupsmap:search:name' => "Name",
    'groupsmap:search:searchname' => "Gruppen-Suche nach %s und in der Nähe",
    'groupsmap:search:usernotfound' => "Keine Gruppen gefunden",
    'groupsmap:search:usersfound' => "Gruppen gefunden",
    'groupsmap:search:around' => "Gefundene Gruppen in der Nähe",  
    'groupsmap:settings:groupsmap:disabled' => 'Das AgoraMap Maps Api Plugin ist nicht aktiviert',
    'groupsmap:groups:newest' => 'Karte mit den %s neuesten Gruppen',  
    'groupsmap:groups:nearby:search' => 'Gruppen in der Nähe von "%s"',  
    
    //js alerts
    'groupsmap:map:1' => "Bitte einen gültigen Standard-Ort im Admin-Bereich eintragen",
    'groupsmap:map:2' => "keine gültige Such-Adresse",
    'groupsmap:map:3' => "Geocode war aus folgenden Gründen nicht erfolgreich",
    
    // settings
    'groupsmap:settings:markericon' => 'Markierungs-Symbol', 
    'groupsmap:settings:markericon:blue-light' => 'Hellblau', 
    'groupsmap:settings:markericon:blue' => 'Blau', 
    'groupsmap:settings:markericon:green' => 'Grün', 
    'groupsmap:settings:markericon:grey' => 'Grau', 
    'groupsmap:settings:markericon:orange' => 'Orange', 
    'groupsmap:settings:markericon:pink' => 'Pink', 
    'groupsmap:settings:markericon:purple-light' => 'Hell-Lila', 
    'groupsmap:settings:markericon:purple' => 'Lila', 
    'groupsmap:settings:markericon:red' => 'Rot', 
    'groupsmap:settings:markericon:yellow' => 'Gelb', 
    'groupsmap:settings:markericon:note' => 'Wähle die Farbe für die Markierung der Gruppen auf der Karte aus', 
    'groupsmap:settings:sidebar_list' => 'Liste der Gruppen in der Seitenleiste anzeigen', 
    'groupsmap:settings:sidebar_list:note' => 'Wählen, wenn eine Liste der Gruppen in der Seitenleiste angezeigt werden soll. Die Gruppen werden anklickbar, um das Info-Fenster der Gruppe auf der Karte azuzeigen.',    
    'groupsmap:settings:groupstab' => 'Tabulator "Gruppenkarte" auf der Gruppen-Seite ausgeben', 
    'groupsmap:settings:groupstab:note' => 'Wählen, wenn ein Tabulator "Gruppenkarte" auf der Gruppen-Seite ausgeben werden soll (domain/groups). <strong>Wichtig</strong>: Das groupsmap plugin muss nach dem Groups plugin unter Admin/Plugins angeordnet werden.',    
    'groupsmap:settings:maponmenu' => 'Seiten-Menüpunkt "Gruppenkarte" hinzufügen', 
    'groupsmap:searchnearby' => 'Gruppen in der Nähe suchen',
    'groupsmap:settings:maponmenu:note' => 'Wählen, um einen Seiten-Menüpunkt "Gruppenkarte" hinzuzufügen. ',      
    'groupsmap:settings:no' => 'Nein', 
    'groupsmap:settings:yes' => 'Ja',
    'groupsmap:settings:batch' => 'Massen Gruppen-Geolokalisierung',
    'groupsmap:settings:batch:start' => 'Geolokalisierung starten',
    'groupsmap:settings:batch:note' => 'Wenn Sie bereits Gruppen auf Ihrer Elgg Seite haben, klicken Sie auf diese Schaltfläche, um für Gruppen die Standort Koordinaten umzuwandeln.<br />Dies muss nur <strong>ein mal</strong> vor der Nutzung des Plugins durchgeführt werden.',
    'groupsmap:settings:searchbyname' => 'Suche Gruppen nach Name', 
    'groupsmap:settings:searchbyname:note' => 'Wählen, umd "Suche Gruppen nach Name" Formlar auszugeben (Seitenleiste). ',  
    'groupsmap:settings:groupsmap:notenabled' => 'Kanella Maps API ist nicht aktiviert. Gruppenkarte kann nicht angezeigt werden',
    'groupsmap:settings:tabs:general_options' => 'Allgemeine Optionen', 
    'groupsmap:settings:tabs:groups_geolocation' => 'Gruppen Geolokalisierung', 
    'groupsmap:settings:save:ok' => 'Einstellungen wurden gespeichert', 
    'groupsmap:settings:geolocation:results' => 'Ergebnisse der Geolokalisierung',  
    'groupsmap:settings:initial_load:title' => 'Erste Kartenansicht',
    'groupsmap:settings:initial_load:note' => 'Wählen, was bei der ersten Karteansicht angezeigt werden soll',
    'groupsmap:settings:initial_load:all' => 'Alle Gruppen',
    'groupsmap:settings:initial_load:newest' => 'Neueste Gruppen',
    'groupsmap:settings:initial_load:mylocation' => 'Benutzer Standort',
    'groupsmap:settings:initial_load:newest_no' => 'Keine der neuesten Gruppen',
    'groupsmap:settings:initial_load:newest_no:note' => 'Wenn <strong>Neueste Gruppen</strong> gewählt wurde, Anzahl der anzuzeigenden Gruppen angeben.',
    'groupsmap:settings:initial_load:mylocation_radius' => 'Radius',
    'groupsmap:settings:initial_load:mylocation_radius:note' => 'Wenn <strong>Benutzer Standort</strong> gewählt wurde, Such-Radius um Benutzer-Standort angeben.',
    'groupsmap:settings:amap_maps_api:notenabled' => 'Das Maps-API-Plugin ist nicht aktiviert',
 
    // widget
    'groupsmap:widgets:title' => 'Standortkarte', 
    'groupsmap:widgets:detail' => 'Zeige Gruppen-Standort auf Karte', 
    'groupsmap:widgets:nolocationdefined' => 'Gruppen-Standort wurde nicht angegeben', 
    'groupsmap:widgets:settings:zoom' => 'Wähel Vergrößerung der Karte: ',    
    'groupsmap:widgets:settings:mapheight' => 'Geben Sie einen numerischen Wert für die Höhe der Karte an (in Pixel): ', 
);

add_translation("de", $language);
