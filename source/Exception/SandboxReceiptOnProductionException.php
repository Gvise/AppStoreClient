<?php
/*
 * This program is free software. It comes without any warranty, to
 * the extent permitted by applicable law. You can redistribute it
 * and/or modify it under the terms of the Do What The Fuck You Want
 * To Public License, Version 2, as published by Sam Hocevar. See
 * http://www.wtfpl.net/ for more details.
 */

namespace alxmsl\AppStore\Exception;

/**
 * This receipt is a sandbox receipt, but it was sent to the production service for verification
 */
final class SandboxReceiptOnProductionException extends InvalidReceiptException {}
 