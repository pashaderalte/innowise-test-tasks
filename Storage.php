<?php
class Storage
{

    public static function serializeResultPath (object $storingObject, string $fileName = ''): void
    {
        $dateSpecification = date('d-m-Y_h-i-s', time());

        if ($fileName != '')
        {
            $curFileName = __DIR__ . "/log/result_path/" . $dateSpecification;
        }
        else
        {
            $curFileName = __DIR__ . "/log/result_path/" . $dateSpecification . '_' . $fileName;
        }

        $file = fopen($curFileName, 'w');

        fwrite($file, serialize($storingObject));

        fclose($file);

    }

    public static function unserializeResultPath (string $filePath): mixed
    {
        $file = fopen($filePath, 'r');

        $unserializedObject = unserialize(readfile($file));

        fclose($file);

        return $unserializedObject;

    }
}