@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../codingavenue/php-proof/src/bin/eval-runner
php "%BIN_TARGET%" %*
