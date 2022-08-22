<?php

namespace rndediiv2\CustomHelper;

use DB;

class CustomHelper
{
    public function __construct()
    {
    }

    public function setSelectCombo($sQuery, $sKey, $sValue, $iEmpty = FALSE, &$disable = "")
    {
        $arrComboBox = [];
        $objData = DB::select($sQuery);
        if($iEmpty) $arrComboBox[''] = '';
        if(sizeof($objData) > 0)
        {
            $sCodeDisabled = "";
            $arrCodeDisabled = [];
            $arrData = json_decode(json_encode($objData), TRUE);
            foreach ($arrData as $row)
            {
                if (is_array($disable))
                {
                    if ($sCodeDisabled == $row[$disable[0]])
                    {
                        if (!array_key_exists($row[$sKey], $arrComboBox))
                            $arrComboBox[$row[$sKey]] = "&nbsp; &nbsp;&nbsp;&nbsp;" . $row[$sValue];
                    }
                    else
                    {
                        if (!array_key_exists($row[$disable[0]], $arrComboBox))
                            $arrComboBox[$row[$disable[0]]] = $row[$disable[1]];
                        if (!array_key_exists($row[$sKey], $arrComboBox))
                            $arrComboBox[$row[$sKey]] = "&nbsp; &nbsp;&nbsp;&nbsp;" . $row[$sValue];
                    }
                    $sCodeDisabled = $row[$disable[0]];
                    if (!in_array($sCodeDisabled, $arrCodeDisabled))
                        $arrCodeDisabled[] = $sCodeDisabled;
                }
                else
                {
                    $arrComboBox[$row[$sKey]] = str_replace("'", "\'", $row[$sValue]);
                }
            }
            $disable = $arrCodeDisabled;
        }
        return $arrComboBox;
    }

    public function setDropdownFromJson($args, $key, $value, $isEmpty = FALSE, &$disable = '')
    {
        $arrDropdown = [];
        if($isEmpty) $arrDropdown[''] = '';
        if(sizeof($args) > 0)
        {
            $sCodeDisabled = '';
            $arrCodeDisabled = [];
            foreach($args as $row)
            {
                if(is_array($disable))
                {
                    if($sCodeDisabled == $row[$disable[0]])
                    {
                        if(!array_key_exists($row[$key], $arrDropdown))
                            $arrDropdown[$row[$key]] = '&nbsp; &nbsp; &nbsp;' . $row[$value];
                    }
                    else
                    {
                        if (!array_key_exists($row[$disable[0]], $arrDropdown))
                            $arrDropdown[$row[$disable[0]]] = $row[$disable[1]];
                        if (!array_key_exists($row[$key], $arrDropdown))
                            $arrDropdown[$row[$key]] = "&nbsp; &nbsp;&nbsp;&nbsp;" . $row[$value];

                    }
                    $sCodeDisabled = $row[$disable[0]];
                    if(!in_array($sCodeDisabled, $arrCodeDisabled))
                        $arrCodeDisabled[] = $sCodeDisabled;
                }
                else
                {
                    $arrDropdown[$row[$key]] = str_replace("'","\'", $row[$value]);
                }
            }
        }
        return $arrDropdown;
    }

    public function post2Query($array, $except = "")
    {
        $data = array();
        foreach ($array as $a => $b) {
            if (is_array($except)) {
                if (!in_array($a, $except))
                    $data[$a] = $b;
            } else {
                $data[$a] = $b;
            }
        }
        return $data;
    }
}