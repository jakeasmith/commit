<?php

namespace Smacme\Commit;

class EmojiGithubList
{
    /** @var array The available markup for github emoji */
    private $options = [
        ':art:' => 'Improving the format/structure of the code',
        ':newspaper:' => 'Creating a new file',
        ':pencil:' => 'Performing minor changes/fixing the code or language',
        ':racehorse:' => 'Improving performance',
        ':books:' => 'Writing docs',
        ':bug:' => 'Reporting a bug, with @FIXMEComment Tag',
        ':ambulance:' => 'Fixing a bug',
        ':penguin:' => 'Fixing something on Linux',
        ':apple:' => 'Fixing something on Mac OS',
        ':checkered_flag:' => 'Fixing something on Windows',
        ':fire:' => 'Removing code or files, maybe with @CHANGED Comment Tag',
        ':tractor:' => 'Change file structure. Usually together with art',
        ':hammer:' => 'Refactoring code',
        ':umbrella:' => 'Adding tests',
        ':microscope:' => 'Adding code coverage',
        ':green_heart:' => 'Fixing the CI build',
        ':lock:' => 'Dealing with security',
        ':arrow_up:' => 'Upgrading dependencies',
        ':arrow_down:' => 'Downgrading dependencies',
        ':fast_forward:' => 'Forward-porting features from an older version/branch',
        ':rewind:' => 'Backporting features from a newer version/branch',
        ':shirt:' => 'Removing linter/strict/deprecation warnings',
        ':lipstick:' => 'Improving UI/Cosmetic',
        ':wheelchair:' => 'Improving accessibility',
        ':globe_with_meridians:' => 'Dealing with globalization/internationalization/i18n/g11n',
        ':construction:' => 'WIP(Work In Progress) Commits, maybe with @REVIEW Comment Tag',
        ':gem:' => 'New Release',
        ':egg:' => 'New Release with Python egg',
        ':ferris_wheel:' => 'New Release with Python wheel package',
        ':bookmark:' => 'Version Tags',
        ':tada:' => 'Initial Commit',
        ':speaker:' => 'Adding Logging',
        ':mute:' => 'Reducing Logging',
        ':sparkles:' => 'Introducing New Features',
        ':zap:' => 'Introducing Backward-InCompatible Features, maybe with @CHANGED Comment Tag',
        ':bulb:' => 'New Idea, with @IDEA Comment Tag',
        ':snowflake:' => 'Changing Configuration, Usually together with penguin or ribbon or rocket',
        ':ribbon:' => 'Customer requested application Customization, with @HACK Comment Tag',
        ':rocket:' => 'Anything related to Deployments/DevOps',
        ':elephant:' => 'PostgreSQL Database specific (Migrations, Scripts, Extensions, ...)',
        ':dolphin:' => 'MySQL Database specific (Migrations, Scripts, Extensions, ...)',
        ':leaves:' => 'MongoDB Database specific (Migrations, Scripts, Extensions, ...)',
        ':bank:' => 'Generic Database specific (Migrations, Scripts, Extensions, ...)',
        ':whale:' => 'Docker Configuration',
        ':handshake:' => 'Merge files',
    ];

    public function get()
    {
        return $this->options;
    }
}
