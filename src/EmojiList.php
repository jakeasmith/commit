<?php

namespace Smacme\Commit;

class EmojiList
{
    /** @var array The available emoji */
    private $options = [
        '🎨' => 'Improving the format/structure of the code',
        '🐎' => 'Improving performance',
        '📚' => 'Writing docs',
        '🐛' => 'Reporting a bug',
        '🚑' => 'Fixing a bug',
        '🐧' => 'Fixing something on Linux',
        '🍎' => 'Fixing something on Mac OS',
        '🏁' => 'Fixing something on Windows',
        '📼' => 'Deprecating code',
        '🔥' => 'Removing code or files',
        '✅'  => 'Adding tests',
        '💚' => 'Fixing the CI build',
        '🔒' => 'Dealing with security',
        '⬆️' => 'Upgrading dependencies',
        '⬇️' => 'Downgrading dependencies',
        '👕' => 'Removing linter/strict/deprecation warnings',
        '💄' => 'Improving UI/Cosmetic',
        '🚧' => 'WIP(Work In Progress) Commits',
        '💎' => 'New Release',
        '🔖' => 'Version Tags',
        '🎉' => 'Initial Commit',
        '🔈' => 'Adding Logging',
        '🔇' => 'Reducing Logging',
        '✨'  => 'Introducing New Features',
        '⚡️' => 'Introducing Backward-InCompatible Features',
        '💡' => 'New Idea',
        '❄️' => 'Changing Configuration',
        '🎀' => 'Customer requested application Customization',
        '🚀' => 'Anything related to Deployments/DevOps',
    ];

    public function get()
    {
        return $this->options;
    }
}
