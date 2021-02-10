<?php
class iniFile
{
    public $iniFilePath;
    public $iniFileHandle;

    function __construct($iniFilePath)
    {
        $this->iniFilePath = $iniFilePath;
        if (file_exists($this->iniFilePath)) {
            $this->iniFileHandle = parse_ini_file($this->iniFilePath, true);

            if (empty($this->iniFileHandle)) {
                unlink($this->iniFilePath);
            }
        } else {
            die($this->iniFilePath . ' file cannot be opened');
        }
    }

    public function addCategory($category_name, array $item = [])
    {
        if (!isset($this->iniFileHandle[$category_name])) {
            $this->iniFileHandle[$category_name] = [];
        } else {
            if (!empty($item)) {
                foreach ($item as $key => $value) {
                    $this->iniFileHandle[$category_name][$key] = $value;
                }
            }
        }
        $this->save();
    }

    public function addItem($category_name, array $item)
    {
        foreach ($item as $key => $value) {
            $this->iniFileHandle[$category_name][$key] = $value;
        }
        $this->save();
    }

    public function getAll()
    {
        return $this->iniFileHandle;
    }

    public function getCategory($category_name)
    {
        return isset($this->iniFileHandle[$category_name]) ?  $this->iniFileHandle[$category_name] : null;
    }

    public function getItem($category_name, $item_name)
    {
        if (is_array($item_name)) {
            $arr = array();
            foreach ($item_name as $value) {
                $arr[$value] = isset($this->iniFileHandle[$category_name][$value]) ? $this->iniFileHandle[$category_name][$value] : null;
            }
            return $arr;
        } else {
            return isset($this->iniFileHandle[$category_name][$item_name]) ? $this->iniFileHandle[$category_name][$item_name] : null;
        }
    }

    public function updItem($category_name, array $item)
    {
        foreach ($item as $key => $value) {
            $this->iniFileHandle[$category_name][$key] = $value;
        }
        $this->save();
    }

    public function delCategory($category_name)
    {
        unset($this->iniFileHandle[$category_name]);
        $this->save();
    }

    public function delItem($category_name, $item_name)
    {
        unset($this->iniFileHandle[$category_name][$item_name]);
        $this->save();
    }

    public function save()
    {
        $string = '';
        foreach ($this->iniFileHandle as $key => $value) {
            $string .= '[' . $key . ']' . "\r\n";
            foreach ($value as $k => $v) {
                $string .= "$k = $v\r\n";
            }
        }
        $iniFileHandle = fopen($this->iniFilePath, 'w+');
        $isfwrite = fwrite($iniFileHandle, $string);
        if ($isfwrite) {
            fclose($iniFileHandle);
            return true;
        } else {
            fclose($iniFileHandle);
            return false;
        }
    }
}
