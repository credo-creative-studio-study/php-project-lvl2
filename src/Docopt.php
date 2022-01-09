<?php

namespace Differ\Docopt;

use Docopt;

/**
 * @param array<mixed> $config
 */
function create(string $interface, array $config = []): \Docopt\Response
{
    return \Docopt::handle($interface, $config);
}

function getPathToFile(object $docopt, string $argName): string
{
    return $docopt->args[$argName];
}
