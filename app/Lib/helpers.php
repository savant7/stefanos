<?php

function age($date) {
    if ($date instanceof \Carbon\Carbon) {
        return $date->diffInYears() . ' years';
    }
}

function getLabels() {
    $labels = [
        'customfield1' => 'Custom Field 1', 'customfield2' => 'Custom Field 2', 'customfield3' => 'Custom Field 3',
        'customfield4' => 'Custom Field 4', 'customfield5' => 'Custom Field 5', 'customfield6' => 'Custom Field 6',
        'customfield7' => 'Custom Field 7', 'customfield8' => 'Custom Field 8', 'customfield9' => 'Custom Field 9',
        'customfield10' => 'Custom Field 10', 'notelabel1' => 'Notes 1', 'notelabel2' => 'Notes 2', 'notelabel3' => 'Notes 3',
    ];
    $userCustom = \App\AdminUserCustom::first();
    if ($userCustom) {
        foreach ($labels as $k => $v) {
            $labels[$k] = !empty($userCustom->$k) ? $userCustom->$k : $labels[$k];
        }
    }
    return $labels;
}
