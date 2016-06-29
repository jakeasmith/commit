<?php

namespace Smacme\Commit;

class EmojiUsage
{
    /** @var string The directory used to store emoji usage data */
    private $workingDir;
    /** @var  string Filename to store usage data */
    private $usageFilename = '.emoji_usage';

    public function __construct($workingDir)
    {
        $this->workingDir = realpath($workingDir);
    }

    public function sortByUsage($emojii)
    {
        uksort($emojii, function ($a, $b) use ($emojii) {
            $aCount = $this->getCount($a);
            $bCount = $this->getCount($b);

            if ($aCount == $bCount) {
                return $emojii[$a] > $emojii[$b];
            }

            return $aCount > $bCount ? -1 : 1;
        });

        return $emojii;
    }

    public function useEmojii($emojii)
    {
        $usage = $this->get();
        foreach ($emojii as $emoji) {
            if (!array_key_exists($emoji, $usage)) {
                $usage[$emoji] = 0;
            }

            $usage[$emoji]++;
        }

        $this->save($usage);
    }

    private function getCount($emoji)
    {
        $usage = $this->get();
        return array_key_exists($emoji, $usage)
            ? $usage[$emoji]
            : 0;
    }

    private function get()
    {
        $filename = $this->getFilename();
        if (!file_exists($filename)) {
            file_put_contents($filename, json_encode([]));
        }

        return json_decode(file_get_contents($filename), true);
    }

    private function save($usage)
    {
        file_put_contents($this->getFilename(), json_encode($usage, JSON_PRETTY_PRINT));
    }

    private function getFilename()
    {
        return $this->workingDir . DIRECTORY_SEPARATOR . $this->usageFilename;
    }
}