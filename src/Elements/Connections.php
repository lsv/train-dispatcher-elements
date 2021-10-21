<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements;

interface Connections
{
    public const CONNECT_TOP = 'top';
    public const CONNECT_TOP_RIGHT = 'top_right';
    public const CONNECT_TOP_LEFT = 'top_left';

    public const CONNECT_BOTTOM = 'bottom';
    public const CONNECT_BOTTOM_RIGHT = 'bottom_right';
    public const CONNECT_BOTTOM_LEFT = 'bottom_left';

    public const CONNECT_LEFT = 'left';
    public const CONNECT_RIGHT = 'right';
}
