<?php
return [
    "*"=>["Label", 'Description:RichText','Tooltip:RichText'],
    "text"=>["DefaultText","Placeholder"],
    "numeric"=>["DefaultValue","Placeholder"],
    'textarea'=>["DefaultText"],
    'masked'=>['DefaultText'],
    'datepicker'=>['Placeholder'],
    'slider'=>['ValueLabel:RichText'],
    'switch'=>['CheckedText','UnCheckedText'],
    'fileupload'=>[],
    'dropdown'=>["Options[].Label:RNT"],
    'checkbox'=>["Options[].Label:RNT"],
    'radio'=>["Options[].Label:RNT"],
    'buttonselection'=>["Options[].Label:RNT"],
    'colorswatcher'=>["Options[].Label:RNT"],
    'imagepicker'=>["Options[].Label:RNT"],
    'list'=>["Columns[].Name"],
    'grouppanel'=>['SubTotalLabel'],
    'chained'=>['Columns','EmptyPlaceholder'],
    'simpletext'=>['Text:RichText'],
    'html'=>['HTML:RichText'],
    'image'=>[],
    'divider'=>['Title:RichText'],
    'total'=>[],
    'name'=>['FirstNameLabel','LastNameLabel','FirstNameDefaultText','LastNameDefaultText','FirstNamePlaceholder','LastNamePlaceholder'],
    'address'=>['Address1Label','Address2Label','CityLabel','StateLabel','ZipLabel','CountryLabel','Address1Placeholder','Address2Placeholder','CityPlaceholder','StatePlaceholder','ZipPlaceholder','CountryPlaceholder','Address1DefaultValue','Address2DefaultValue','CityDefaultValue','StateDefaultValue','ZipDefaultValue','CountryDefaultValue'],
    'email'=>['DefaultText','Placeholder'],
    'signature'=>[],
    'termofservice'=>['Text','PopUpTitle','PopUpContent:RichText'],
    'actionbutton'=>[],
    'daterange'=>['StartDate.Label','EndDate.Label'],
    'colorpicker'=>[],
    'textualimage'=>['Texts[].Label'],
    'googlemaps'=>['Address1Label','Address2Label','CityLabel','StateLabel','ZipLabel','CountryLabel','MarkerLabels[]'],
    'password'=>['DefaultText','Placeholder'],
    'website'=>['DefaultText','Placeholder'],
    'rating'=>[],
    'repeater'=>['SubTotalLabel'],
    'rnwc_dropdown'=>['Placeholder'],
    'lutextbox'=>[],
    'luradio'=>[],
    'ludropdown'=>[],
    'ludate'=>['Placeholder']
];