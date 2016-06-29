<?php

namespace Smacme\Commit;

class EmojiList
{
    /** @var array The available emoji */
    private $options = [
        ':art:'              => 'Improving the format/structure of the code',
        ':racehorse:'        => 'Improving performance',
        ':books:'            => 'Writing docs',
        ':bug:'              => 'Reporting a bug',
        ':ambulance:'        => 'Fixing a bug',
        ':penguin:'          => 'Fixing something on Linux',
        ':apple:'            => 'Fixing something on Mac OS',
        ':checkered_flag:'   => 'Fixing something on Windows',
        ':vhs:'              => 'Deprecating code',
        ':fire:'             => 'Removing code or files',
        ':white_check_mark:' => 'Adding tests',
        ':green_heart:'      => 'Fixing the CI build',
        ':lock:'             => 'Dealing with security',
        ':arrow_up:'         => 'Upgrading dependencies',
        ':arrow_down:'       => 'Downgrading dependencies',
        ':shirt:'            => 'Removing linter/strict/deprecation warnings',
        ':lipstick:'         => 'Improving UI/Cosmetic',
        ':construction:'     => 'WIP(Work In Progress) Commits',
        ':gem:'              => 'New Release',
        ':bookmark:'         => 'Version Tags',
        ':tada:'             => 'Initial Commit',
        ':speaker:'          => 'Adding Logging',
        ':mute:'             => 'Reducing Logging',
        ':sparkles:'         => 'Introducing New Features',
        ':zap:'              => 'Introducing Backward-InCompatible Features',
        ':bulb:'             => 'New Idea',
        ':snowflake:'        => 'Changing Configuration',
        ':ribbon:'           => 'Customer requested application Customization',
        ':rocket:'           => 'Anything related to Deployments/DevOps',
    ];

    public function get()
    {
        return $this->options;
    }
}